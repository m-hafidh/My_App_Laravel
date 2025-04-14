<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// La route pour afficher la page welcome sur la view
// Route::get('/', function () {
//     return view('welcome');
// });

Route :: view ('/','homepage')->name('homepage');

// LA route pour afficher la page projects sur view
// Route::get('/', function () {
//     return view('projects');
// });

Route :: view('/projects','projects')->name('projects');

// Creer une vue pour afficher de recettes sur le navigateur 

Route :: get('/recipes', function () {
 $recipes = [
    1 =>  ['title' => 'spaghetti carbonara', 'ingredients'=>['pasta','Eggs', 'Chese','Baccon']],

    2 =>  ['title' => 'Chicken Curry ', 'ingredients'=>['Chicken','Cocunut Milk', 'Curry Ponder']],

    3 =>  ['title' => 'Vegetal Stir Fry', 'ingredients'=>['Crocoli','Carrots', 'Soy Sauce','Sarlic']]

 ];

 #creer une varibale pour la recuprer et l'afficher sur la vue 
// $firstname="Maoulida";
// $lastname = "Hafidhou";
//  return view('recipes.index',[

//     'name' => $firstname,
//     'lastname' => $lastname


//  ]);

// Une autre methode php en utilisant la fonction "compact" pour recuperer et l'afficher 
//return view('recipes.index', compact('firstname','lastname'));

 return view('recipes.index', compact('recipes')); 
   
})->name('recipes.index');

// creer une nouvelle route pour afficher les identifiant
Route :: get ('/recipes/{id}', function(int $id){
    //dd($id);
    $recipes = [
        1 =>  ['title' => 'spaghetti carbonara', 'ingredients'=>['pasta','Eggs', 'Chese','Baccon']],
    
        2 =>  ['title' => 'Chicken Curry ', 'ingredients'=>['Chicken','Cocunut Milk', 'Curry Ponder']],
    
        3 =>  ['title' => 'Vegetal Stir Fry', 'ingredients'=>['Crocoli','Carrots', 'Soy Sauce','Sarlic']]
    
     ];
     $recipe = Arr::get($recipes,$id,['title' => "La recettes n'est pas trouvée",'ingredients'=>[]]);

     return view('recipes.show', compact('recipe'));

})-> name('recipes.show');




