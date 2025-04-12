
<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site Minimalsite</title>

    {{-- Importer le package de css depuis le site  --}}
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="flex flex-col min-h-screem">

    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
         <a href="#" class="text-xl font-bold">Logo</a>

         <ul class="flex space-x-6">
            {{-- hover:text-gray-600 --}}

              {{-- Faire un lien vers les pages  --}}
              <x-link-items href="/" :active="Route::currentRouteName() === 'homepage' ? true : false"> Homepage</x-link-items>
              {{-- <li> <a href="/projects">Projects</a></li> --}}
              <x-link-items href="/projects" :active="Route::currentRouteName() === 'projects' ? true : false"> Projects </x-link-items>
          
             {{-- <li><a href="#" class="hover:text-gray-600">Accueil</a></li>
             <li><a href="#" class="hover:text-gray-600">Services</a></li>
             <li><a href="#" class="hover:text-gray-600">Contact</a></li> --}}
         </ul>
             
         </div> 
 
     </nav>



        {{-- footer --}}

        <main class="flex-grow container mx-auto p-6">

     {{-- ou bien avec cette methode  --}}
      {{$slot}} 
    

        </main>
        
        <footer class="bg-gray-100 text-center p-4 mt-6">
            <p class="text-gray-600">&copy; 2025 MonSite. Tous droit réservés</p>
    
</body>
</html>