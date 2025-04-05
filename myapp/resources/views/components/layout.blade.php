
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
            
            {{-- <li><a href="/"> Homepage</a></li> --}}

            {{-- Faire un lien vers les pages  --}}
            <x-link-items href="/" :active="Route::currentRouteName() === 'homepage' ? true : false"> Homepage</x-link-items>
            {{-- <li> <a href="/projects">Projects</a></li> --}}
            <x-link-items href="/projects" :active="Route::currentRouteName() === 'projects' ? true : false"> Projects </x-link-items>
        </ul>
    </nav>

    {{-- creeons une directive --}}
    {{-- @yield('content') --}}

     {{-- @dump($slot) --}}

    {{-- On peut l'afficher avec le php classique en utilisant  --}}
     {{-- <?= $slot ?> --}}

     {{-- ou bien avec cette methode  --}}
      {{$slot}} 
    
</body>
</html>

