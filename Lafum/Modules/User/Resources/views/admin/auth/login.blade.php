@extends('user::admin.auth.layout')

@section('title', clean(trans('user::auth.sign_in')))

@section('content')
<div class="login" style="overflow:hidden;">
    <div class="wrapper wrapper-login" style="padding: 0px; justify-content:unset">
    
        @include('user::admin.auth.sidebar')
        <div class="container container-login">
            @include('admin::include.notification')
            <h3 class="text-center">{{ clean(trans('user::auth.sign_in')) }}</h3>
            <div class="login-form">
                <form method="POST" action="{{ route('admin.login.post') }}">
                    {{ csrf_field() }}
                    
                    <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                        <label for="email">{{ clean(trans('user::auth.email')) }} <span class="required-label">*</span></label>

                        <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="{{ clean(trans('user::attributes.users.email')) }}" autofocus>
                        @if($errors->has('email'))
                            <span class="help-block">{{ clean($errors->first('email')) }}</span>
                        @endif
                        
                    </div>
                    
                    <div class="form-group {{ $errors->has('password') ? 'has-error': '' }}">
                        <label for="password" class="placeholder">{{ clean(trans('user::auth.password')) }} <span class="required-label">*</span></label>
                        <a href="{{ route('admin.reset') }}" class="link float-right">
                            {{ clean(trans('user::auth.forgot_password')) }}
                        </a>
                        <div class="position-relative">
                            <input type="password" class="form-control" name="password" placeholder="{{ clean(trans('user::attributes.users.password')) }}">
                            <div class="show-password">
                                <i class="icon-eye"></i>
                            </div>
                        </div>
                        
                        @if($errors->has('password'))
                            <span class="help-block">{{ clean($errors->first('password')) }}</span>
                        @endif
                    </div>
                    
                    
                    <div class="form-group form-action-d-flex mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="hidden" name="remember_me" value="0">
                            <input type="checkbox" name="remember_me"  value="1" id="remember_me" class="custom-control-input">
                            <label class="custom-control-label m-0" for="remember_me">{{ clean(trans('user::attributes.auth.remember_me')) }}</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold" data-loading>{{ clean(trans('user::auth.sign_in')) }}</button>
                        
                    </div>
                    @if(setting('allow_registrations'))
                    <div class="login-account">
                        <span class="msg">{{ clean(trans('user::auth.dont_have_an_account_yet')) }}</span>
                        <a href="{{ route('admin.register')  }}" id="show-signup" class="link">{{ clean(trans('user::auth.sign_up')) }}</a>
                    </div>
                    @endif
                    <div class="clearfix"></div> 
                        <div class="social-login-buttons text-center">
                            @if (count(app('enabled_social_login_providers')) !== 0)
                                <div class="hline btn-primary">
                                    <span class="hline-innertext btn-primary">{{ clean(trans('user::auth.or')) }}</span>
                                </div>
                                
                            @endif

                            @if (setting('facebook_login_enabled'))
                                <a href="{{ route('admin.login.redirect', ['provider' => 'facebook']) }}" class="btn btn-facebook">
                                    <i class="fab fa-facebook-f"></i>
                                    {{ clean(trans('user::auth.log_in_with_facebook')) }}
                                </a>
                            @endif

                            @if (setting('google_login_enabled'))
                                <a href="{{ route('admin.login.redirect', ['provider' => 'google']) }}" class="btn btn-google">
                                    <i class="fab fa-google"></i>
                                    {{ clean(trans('user::auth.log_in_with_google')) }}
                                </a>
                            @endif
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
    
@endsection
