<?php

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
 return view('recipes.index');
   
})->name('recipes.index');


