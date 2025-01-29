<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControllerr;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;

Route::get('/login',
    [LoginController::class, 'index']);
Route::get('/Register',
    [RegisterController::class, 'index']);
/* Route::post('/register',
    [RegisterController::class, 'index']); */
Route::get('/Home',
    [HomeController::class, 'index']);
    Route::get('/',
    [HomeController::class, 'index']);

Route::get('/404',
    function(){
    abort(404);
    });
Route::get('/505',
    function(){
    abort(505);
    });

?>
