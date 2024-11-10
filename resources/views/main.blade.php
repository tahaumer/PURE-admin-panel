<!DOCTYPE html>
<html lang="en">
<head>        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('media/logo.svg') }}">
    <meta name="_token" content="{{ csrf_token() }}" />
    <title>{!! @$meta_title !!}</title>
    <meta name="description" content="{!! @$meta_description !!}" />
    <meta name="creator" content="Taha Umar" />
    @stack('style')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app.obfuscated.js') }}"></script>
    @stack('script')
</body>
</html>
