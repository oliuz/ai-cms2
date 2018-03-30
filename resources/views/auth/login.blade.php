@extends('layouts.auth')

@section('content')
<div class="sixteen wide tablet six wide computer column">
    <div class="ui left aligned segment">

        <form id="form1" class="ui form" method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="ui header login center aligned">
                <img src="{{asset('img/logo.png')}}" alt="aicmslogo" class="ui small image">

                <div class="content">
                
                </div>
            </h1>

            <div class="field">
                <label>
                    {{ __('E-Mail Address') }}:
                </label>
                <div class="ui fluid icon input">
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus>
                    <i class="icon mail outline"></i>
                </div>
            </div>
            <div class="field">
                <label>
                    {{ __('Password') }}:
                </label>
                <div class="ui fluid icon input">
                    <input type="password" name="password" style="width:100%!important;min-width:100%;width:100%;" required>
                    <i class="icon key"></i>
                </div>
            </div>
            <div class="field">
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
                <button type="submit" class="ui teal right labeled icon button fluid">
                    {{ __('Login') }}
                    <i class="icon sign in"></i>
                </button>

                <a class="ui blue right labeled icon button fluid" href="{{ route('register') }}">
                    Sign Up
                    <i class="icon spy"></i>
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
