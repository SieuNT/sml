@extends('layouts.backend_auth')

@section('content')
    <form role="form" method="POST" action="{{ route('backend.login') }}">
        {{ csrf_field() }}
        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">

            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                   placeholder="Email" required autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control" name="password"
                   placeholder="Mật khẩu"
                   required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label class="cr-styled">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <i class="fa"></i>
                Ghi nhớ đăng nhập
            </label>
        </div>
        <div class="form-group text-right">
            <button type="submit" class="btn btn-success w-md">Đăng nhập</button>
        </div>
        <div class="form-group m-t-30">
            <a href="{{ route('backend.password.request') }}"><i class="fa fa-lock m-r-5"></i> Bạn bị quên mật khẩu?</a>
        </div>
    </form>
@endsection
