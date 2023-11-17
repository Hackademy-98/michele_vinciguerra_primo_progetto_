<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/series', function (){
    return view('index');
});

//rotta per i film
Route::get('/films', function (){
    $movies = [
        [
            "name" => "jhon Wick 4",
            "year" => 2023,
            "description" => "johon Wick trova una via per sconfiggere la gran Tavola. Ma prima di guadagnare la liberta, Wick deve affrontare un nuovo nemico che ha potenti alleanze in tutto il mondo " ,
            "img"=> "media/john.jpg"
        ],
        [
            "name" => "Mission Imposible",
            "year" => 2023,
            "description" => "Ethan Hunt e la scuadra dell'IMF si trovano di fronte alla sfida piu pericolosa che abbiano mai affrontato: trovare e disinnescare una nuova terrificante arma che minaccia l'intera umanità. con il destino del mondo e il controllo del futuro appesi a un filo ",
            "img"=> "media/mission.jpg"
        ],
        [
            "name" => "Guardiani della Galassia vol. 3",
            "year" => 2023,
            "description" => "Peter Quill, ancora provato dalla perdita di gamora , deve riunire la sua squadra per difendere l'universo e",
            "img"=> "media/guardian.jpg"
        ],
    ];
    return view('films',["films"=>$movies]);
});

//rotta serie tv
Route::get('/series',function (){
    $series = [
        ["name" => "The Witcher", "year"=> 2019, "description" => "Geralt di rivia, un cacciatore di mostri mutante, viaggia verso il suo destino in un mondo turbolento in cui le persone spesso si dimostrano piu perverse delle bestie.", "img" => "media/The_Witcher.png" ],
        ["name" => "Peaky Blinders", "year"=> 2013, "description" => "la storia di una famiglia criminale nella ", "img" => "media/Peaky_Blinders.png"],
        ["name" => "Vikings", "year"=> 2013, "description" => "Vikings e una serie televisiva storica canadese", "img" => "media/vikings.png"],
        ["name" => "Fringe", "year"=> 2008, "description" => "La divisione Fringe si occupa di indagare su una ser", "img" => "media/Fringe.png"],
        ["name" => "Gomorra", "year"=> 2014, "description" => "", "img" => "media/gomorra.png"],
        ["name" => "Hannibal", "year"=> 2013, "description" => "", "img" => "media/Hannibal.png"],
    ];

    return view('films', ["films"=>$movies]);
});



