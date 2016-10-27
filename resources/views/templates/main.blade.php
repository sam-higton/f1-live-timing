<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ @asset('css/app.css') }}" />
        <script type="text/javascript" src="{{ @asset('js/app.js') }}"></script>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

    @yield('bodyEnd')
    </body>
</html>