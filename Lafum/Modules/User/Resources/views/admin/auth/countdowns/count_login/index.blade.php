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
                            
                                                        <div style="position:relative">
                                                            <input type="password" class="form-control" name="password" placeholder="{{ clean(trans('user::attributes.users.password')) }}">
                                                            <div style="position:absolute; right:20px; top:50%; transform:translateY(-50%);">
                                                                <i class="icon-eye"></i>
                                                            </div>
                                                        </div>
                                                        
                                                        @if($errors->has('password'))
                                                            <span class="help-block">{{ clean($errors->first('password')) }}</span>
                                                        @endif
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group form-action-d-flex mb-3">
                                                        
                                                        <button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold" data-loading>{{ clean(trans('user::auth.sign_in')) }}</button>
                                                        
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