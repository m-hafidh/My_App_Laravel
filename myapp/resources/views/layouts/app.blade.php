<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
</head>
<body>
    {{-- <h4> Bienvenue sur la page Welcome</h4> --}}
    <nav>
        <ul>
            <li><a href="/"> Homepage</a></li>
            <li> <a href="/projects">Projects</a></li>
        </ul>
    </nav>

    {{-- creeons une directive --}}
    @yield('content')
    
</body>
</html>