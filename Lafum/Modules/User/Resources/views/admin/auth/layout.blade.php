<!DOCTYPE html>
<html lang="{{ locale() }}">
<head>
    <base href="{{ url('/') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title> @yield('title') - {{ setting('site_name') }}</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    
    @foreach ($assets->allCss() as $css)
            <link media="all" type="text/css" rel="stylesheet" href="{{ v($css) }}">
    @endforeach

	@include('admin::include.general')
    
</head>

<body>
	<div class="wrapper overlay-sidebar">
        @include('admin::include.header',['fullwidth'=>true])
        
		<div class="main-panel">
			<div class="content">
                @yield('content')
			</div>
		</div>
		@stack('more-actions')
	</div>
	
    @foreach($assets->allJs() as $js)
        <script src="{{ v($js) }}"></script>
    @endforeach
    
    @if(setting('custom_js',null,0)!='')
    <script>
        {!! setting('custom_js',null,0) !!}
    </script>
    @endif
    
    @stack('scripts')
    
</body>
</html>
