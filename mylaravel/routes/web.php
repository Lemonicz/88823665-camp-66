<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
Route::get('/mycontroller',
    [MyController::class, 'Myfunction']);

Route::post('/mycontroller',
    [MyController::class, 'Myfunction']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/id?',
function ($val=""){
    return "<h1>Hello world !!! $val</h1>";
});

?>