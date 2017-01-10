@extends('admin_template')
@section('content')

<div class="login-box">
 

  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="login-logo">
    <a href="../../index2.html"><b>Login</b>Profile</a>
  </div>
    <p class="login-box-msg">Sign in to start your session</p>

    {{ Form::open(array('url' => 'login')) }}
      <div class="form-group has-feedback">       
        {{ Form::text('email', Input::old('email'), array('class'=>'form-control','placeholder' => 'awesome@awesome.com')) }}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         {{ Form::password('password',  array('class'=>'form-control','placeholder' => 'Password')) }}
         @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    {{ Form::close() }}

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="/auth/register" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>

@endsection
