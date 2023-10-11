@extends('user::admin.auth.layout')

@section('content')
<div class="login">
  <div class="wrapper wrapper-login" style="padding:0px; display:flex">
    @include('user::admin.auth.sidebar')

    <div id="layoutSidenav_content" style="height:calc(100vh - 62px); width:calc(100vw - 250px); overflow:auto; padding:20px">

    <body style="background-color:white;">

        <body class="sb-nav-fixed">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">

                    <div class="container">
                        <div class="row justify-content-center" style="display:flex; flex-direction: column;">
            
                            <center><b>
                                    <font face="Verdana" size="5" color="#000000">ImageWiz.net Free Counters</font>
                                </b></center></br>
                            <center>

                                <body>

                                    <center>
                                        <table cellpadding="0" cellspacing="0" style="width: 70%">
                                            <tbody>
                                                <tr>
                                                    <td><!--<b>ImageWiz.net Free Counters<br>-->
                                                        <p class="menu"><a href="{{ route('free_counters') }}">Counter Home</a> | <a
                                                                href="{{ route('count_login') }}">Counter Login</a> | <a
                                                                href="{{ route('count_register') }}">Counter Registration</a> | <a
                                                                href="{{ route('free_counters') }}"
                                                                onclick="javascript:window.open('http://ww2.imagewiz.net/counter/style.php','','height=500,width=475,resizable=yes,scrollbars=yes')">View
                                                                Counter Styles </a></p>
                                                        <hr>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <center></center>
                                        <center>
                                            <div class="col-sm-12 col-md-6" style="text-align:left">
                                                <form method="POST" action="{{ route('admin.register.post') }}">
                                                    {{ csrf_field() }}
                                                    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group {{ $errors->has('first_name') ? 'has-error': '' }}">
                                                                <label for="first-name">{{ clean(trans('user::auth.first_name')) }} <span class="required-label">*</span></label>

                                                                <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" id="first-name" autofocus>
                                                                @if($errors->has('first_name'))
                                                                    <span class="help-block error">{{ clean($errors->first('first_name')) }}</span>
                                                                @endif
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group {{ $errors->has('last_name') ? 'has-error': '' }}">
                                                                <label for="last-name">{{ clean(trans('user::auth.last_name')) }} <span class="required-label">*</span></label>

                                                                <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" id="last-name">

                                                                @if($errors->has('last_name'))
                                                                    <span class="help-block error">{{ clean($errors->first('last_name')) }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                                                                <label for="email">{{ clean(trans('user::auth.email')) }} <span class="required-label">*</span></label>

                                                                <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="email">

                                                                @if($errors->has('email'))
                                                                    <span class="help-block error">{{ clean($errors->first('email')) }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group {{ $errors->has('password') ? 'has-error': '' }}">
                                                                <label for="password">{{ clean(trans('user::auth.password')) }} <span class="required-label">*</span></label>
                                                                <div style="position:relative">
                                                                    <input type="password" name="password" class="form-control" id="password">
                                                                
                                                                    <div style="position:absolute; right:20px; top:50%; transform:translateY(-50%);">
                                                                        <i class="icon-eye"></i>
                                                                    </div>
                                                                </div>
                                                                
                                                                @if($errors->has('password'))
                                                                    <span class="help-block error">{{ clean($errors->first('password')) }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error': '' }}">
                                                                <label for="confirm-password">{{ clean(trans('user::auth.password_confirmation')) }} <span class="required-label">*</span></label>
                                                                <div style="position:relative">
                                                                    <input type="password" name="password_confirmation" class="form-control" id="confirm-password">
                                                                    
                                                                    <div style="position:absolute; right:20px; top:50%; transform:translateY(-50%);">
                                                                        <i class="icon-eye"></i>
                                                                    </div>
                                                                </div>
                                                                
                                                                @if($errors->has('password_confirmation'))
                                                                    <span class="help-block error">{{ clean($errors->first('password_confirmation')) }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-action-d-flex mb-3">
                                                        
                                                        <button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold" data-loading>{{ clean(trans('user::auth.sign_up')) }}</button>
                                                        
                                                    </div>
                                                </form>
                                            </div>
                                        </center>
                                    </center>
                                    <div id="mttContainer" class="bootstrapiso notranslate" data-html="true"
                                        data-original-title="" title="" style="transform: translate(1230px, 100px);">
                                    </div>
                                </body>
                            </center>
                            <p>&nbsp;</p>
                            <div id="layoutAuthentication_footer">
                                <footer class="py-4 bg-light mt-auto">
                                    <div class="container-fluid px-4">
                                        <div>
                                            </p>
                                            <p align="center">
                                                <font face="Verdana"
                                                    style="font-size: 14pt; font-variant:small-caps; font-weight:700">
                                                    Copyright - 2002 - 2023</b>
                                                </font>
                                            </p>
                                        </div>
                                        <script>
                                            function onSubmit(token) {
                                                document.getElementById("demo-form").submit();
                                            }
                                        </script>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </div>
</div>
@endsection		