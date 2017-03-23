<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Socialite\Contracts\User as ProviderUser;

class UserSocial extends Model
{
    /**
     * @var string
     */
    protected $table = 'user_socials';
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'provider_user_id', 'provider'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function createOrGetUser(ProviderUser $providerUser, $provider) {
        $account = $this->whereProvider($provider)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if($account) {
            return $account->user;
        } else {


            $user = User::whereEmail($providerUser->getEmail())->first();

            if(!$user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                ]);
            }

            $this->create([
                'user_id' => $user->id,
                'provider_user_id' => $providerUser->getId(),
                'provider' => $provider
            ]);

            return $user;
        }
    }
}
