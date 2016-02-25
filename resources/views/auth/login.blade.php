@extends('layouts.app')

@section('content')
<body class="hold-transition login-page">
  <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Halaman</b>LOGIN</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Masuk Untuk Menggunakan Aplikasi</p>
        <form role="form" method="POST" action="{{ url('/login') }}">
          {!! csrf_field() !!}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Masukkan Kata Sandi">

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="{{ url('/password/reset') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Lupa Password</a>
          <a href="{{ url('/register') }}" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Daftar</a>
        </div><!-- /.social-auth-links -->

        <a href="{{ url('/password/reset') }}">Lupa Password?</a><br>
        <a href="{{ url('/register') }}" class="text-center">Daftar</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
  </div>

@endsection
