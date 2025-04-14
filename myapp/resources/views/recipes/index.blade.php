<x-layout>

    <h1> Nos recettes</h1>
    {{-- <p> C'est la recettes de Mr {{$firstname}} {{$lastname}}</p> --}}

    {{-- Utiliser php classique pour afficher nos recettes  --}}

    {{-- <?php foreach ($recipes as $recipe):?> 

       @dump($recipe)
     <?php  endforeach;?>  --}}

                        {{-- une autre methode, c'est pour une utiliser une directive specifiquement pour blade  --}}
                         @foreach ($recipes as $key => $recipe)

                            {{-- @dump($recipe) --}}

                            {{-- Creer des liens entre les recettes --}}
                            <p> <a href="/recipes/{{ $key }}" class="underline text-blue-500"> {{$recipe['title']}}</a></p>
                
                            
                         @endforeach
    
</x-layout>
