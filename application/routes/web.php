<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $idade = 24;
    $nome  = "Willas";

    $arr = [1,2,3,4,5];

    $nomes = ["Mateus", "Maria", "Jonathan", "Paulo"];

    return view('welcome', 
    [
        "nome" => $nome, 
        "idade" => $idade, "profissao" => "Programador",
        "arr" => $arr,
        "nomes" => $nomes
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});
