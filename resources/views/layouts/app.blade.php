<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'my laravel app')</title>
    @yield('style')
</head>
<body>
    <header>
        <h1>My Laravel App</h1>
        <nav>
            <ul>
                <li><a href="{{route('home')}}"></a></li>
                <li><a href="{{route('about')}}"></a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© {{date('Y')}} My Laravel App</p>
    </footer>

    @yield('script')
</body>
</html>