<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preload" href="{{ asset('css/main.css') }}?v=1.0" as="style" />

        @if (isset($inAdminRouteGroup) && $inAdminRouteGroup === true)
            <meta name="description" content="Admin | {{ ucfirst(Route::currentRouteName()) }}">
            <title>
                Admin | {{ ucfirst(Route::currentRouteName()) }}
            </title>

            <link rel="preload" href="{{ asset('css/admin.css') }}?v=1.0" as="style" />
            <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}?v=1.0">
        @else
            <meta name="description" content="This is a great laravel boilerplate by Viktor Karpinski">
            <title>
                laravel boilerplate by Viktor Karpinski
            </title>

            <link rel="preload" href="{{ asset('js/main.js') }}?v=1.0" as="script" />
            <link rel="preload" href="{{ asset('css/style.css') }}?v=1.0" as="style" />
            <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}?v=1.0">
        @endif
    
        @yield('preload')
    
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}?v=1.0">
    </head>
<body>
    @if (isset($inAdminRouteGroup) && $inAdminRouteGroup === true)
        <header>
            <a href="{{ route('dashboard') }}">
                logo
            </a>
            <nav>
                yield('navigation')
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
    @else
        <header>
            <h1>
                laravel boilerplate by Viktor Karpinski
            </h1>
        </header>

        <div id="load">
            <main>
                @yield('content')
            </main>

            <footer>
                <p>
                    copyright by <a href="https://viktorkarpinski.com" target="_blank">Viktor Karpinski</a>
                </p>
            </footer>
        </div>
        <script src="{{ asset('js/main.js') }}?v=1.0"></script>
    @endif
</body>
</html>