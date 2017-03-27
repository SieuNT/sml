@extends('layouts.backend_auth')

@section('content')

    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        @if (session('status'))
            {{ session('status') }}
        @else
            Nhập <b>Email của bạn</b> để nhận thông tin lấy lại mật khẩu!
        @endif
    </div>
    <form role="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="input-group">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                       placeholder="Email" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <span class="input-group-btn"><button type="submit" class="btn btn-primary">Gửi yêu cầu</button></span>
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group text-center">
            <a href="{{ route('backend.login') }}">
                Quay lại đăng nhập
            </a>
        </div>
    </form>
@endsection
