<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url ('/css/style.css') }}">
    @yield('style')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <ul class="nav">
            <li><a class="link" href="/">Home</a></li>
            <li><a class="link" href="/characters">Characters</a></li>
            <li><a class="link" href="/designers">Designers</a></li>
        </ul>
    </header>
        <main>
            @yield('content')
        </main>
    
</body>
</html>