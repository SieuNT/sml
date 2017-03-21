@extends('layouts.backend_auth')

@section('content')
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form role="form" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <h1 class="text-center">BioCMS</h1>
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

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">
                            Gửi yêu cầu
                        </button>
                    </div>
                    <div class="form-group">
                        <a class="btn" href="{{ route('backend.login') }}">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i> Quay lại đăng nhập
                        </a>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection
