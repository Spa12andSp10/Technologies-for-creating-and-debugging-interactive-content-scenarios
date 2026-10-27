<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ResultsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
});

Route::get('/form', [FormController::class, "create"]);

Route::post('/form', [FormController::class, "store"]);

Route::get('/form/success', function () {
    return "<h1>Успех!</h1><p>Данные сохранены.</p><p><a href='/form'>Вернуться к форме</a></p>";
});

Route::get("/results", [ResultsController::class, "create"]);

