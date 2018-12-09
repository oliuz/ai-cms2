@extends('layouts.app')

@section('content')
<div class="col-md-6">
  <form class="login-box" method="post" action="{{ route('login') }}">
    {{-- <div class="row margin-bottom-1x">
      <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block facebook-btn" href="#"><i class="socicon-facebook"></i>&nbsp;Facebook login</a></div>
      <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block twitter-btn" href="#"><i class="socicon-twitter"></i>&nbsp;Twitter login</a></div>
      <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block google-btn" href="#"><i class="socicon-googleplus"></i>&nbsp;Google+ login</a></div>
    </div> --}}
    <h4 class="margin-bottom-1x">Login</h4>
    @csrf
    <div class="form-group input-group">
      <input class="form-control" type="email" name="email" placeholder="Email" required="" value="{{ old('email') }}" autofocus/>
      <span class="input-group-addon"><i class="icon-mail"></i></span>
    </div>
    <div class="form-group input-group">
      <input class="form-control" type="password" name="password" placeholder="Password" required=""/>
      <span class="input-group-addon"><i class="icon-lock"></i></span>
    </div>
    <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
      <div class="custom-control custom-checkbox">
        <input class="custom-control-input" type="checkbox" id="remember_me" checked="">
        <label class="custom-control-label" for="remember_me">Remember me</label>
      </div><a class="navi-link" href="account-password-recovery.html">Forgot password?</a>
    </div>
    <div class="d-flex flex-wrap">
      @if ($errors->has('email'))
        <span class="invalid-feedback">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
      @endif
      @if ($errors->has('password'))
        <span class="invalid-feedback">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
      @endif
    </div>
    <div class="text-center text-sm-right">
      <button class="btn btn-primary margin-bottom-none" type="submit">Login</button>
    </div>
  </form>
</div>
<div class="col-md-6">
  <div class="padding-top-3x hidden-md-up"></div>
  <h3 class="margin-bottom-1x">No Account? Register</h3>
  <p>Registration takes less than a minute but gives you full control over your orders.</p>
  <form class="row" method="post" action="{{ route('register') }}">
    @csrf
    <div class="col-sm-6">
      <div class="form-group">
        <label for="reg-fn">First Name</label>
        <input class="form-control" type="text" id="reg-fn" name="name" required="">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="reg-ln">Last Name</label>
        <input class="form-control" type="text" id="reg-ln" required="">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="form-group">
        <label for="reg-email">E-mail Address</label>
        <input class="form-control" type="email" id="reg-email" name="email" required="">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="reg-pass">Password</label>
        <input class="form-control" type="password" id="reg-pass" name="password" required="">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="reg-pass-confirm">Confirm Password</label>
        <input class="form-control" type="password" id="reg-pass-confirm" name="password_confirmation" required="">
      </div>
    </div>
    <div class="col-12 text-center text-sm-right">
      <button class="btn btn-primary margin-bottom-none" type="submit">Register</button>
    </div>
  </form>
</div>
@endsection
