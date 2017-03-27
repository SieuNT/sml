@extends('layouts.backend_auth')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form role="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                   placeholder="Email" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">
                Gửi yêu cầu
            </button>
        </div>
        <div class="form-group text-center">
            <a href="{{ route('backend.login') }}">
                Quay lại đăng nhập
            </a>
        </div>
    </form>
@endsection
