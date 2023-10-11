@extends('user::admin.auth.layout')

@section('content')
<div class="login">
  <div class="wrapper wrapper-login" style="padding:0px; display:flex">
    @include('user::admin.auth.sidebar')

    <div id="layoutSidenav_content" style="height:calc(100vh - 62px); width:calc(100vw - 250px); overflow:auto; padding-top:20px">

    <body style="background-color:white;">

        <body class="sb-nav-fixed">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">

                    <div class="container">
                        <div class="row justify-content-center">
                            <p>&nbsp;</p>
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
                                            <table cellpadding="0" cellspacing="0" style="width: 90%">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>ImageWiz.net Counters are a great way to let users know
                                                                how much traffic your site gets.
                                                                A web counter is also a simple way for webmasters to
                                                                measure site activity. Plus, a hit counter adds
                                                                a bit of interactivity to your site. We provide the
                                                                coolest, most feature-rich, reliable hit counters
                                                                offering features you can't find anywhere else for free!
                                                            </p>

                                                            <b>Why ImageWiz.net Counters?</b>
                                                            <ul>
                                                                <li>Easy to read statistical graphs and tables.</li>
                                                                <li>No ads are displayed on your website.</li>
                                                                <li>Incredibly easy to use - no software to install,
                                                                    just a simple code entry.</li>
                                                                <li>You can't beat free!</li>
                                                            </ul>

                                                            <a href="{{ route('count_login') }}">Login</a>/<a
                                                                href="register.php">Register</a><br>

                                                            <br>
                                                            <br>
                                                            <center><!-- Begin ImageWiz.net Counters Code -->
                                                                <img
                                                                    src="http://www.imagewiz.net/counter/getcount.php?cid=144210b5">
                                                                <!-- End ImageWiz.net Counters Code -->
                                                                <br><br>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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