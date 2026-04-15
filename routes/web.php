<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwirperController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;

Route::get('/', [TwirperController::class,'index']);

Route::middleware('auth')->group(function () {//colocar guest aqui faz as paradas ficar desprotegidas e vc pode entrar devolta sem precisar ta logado
    Route::post('/twirps', [TwirperController::class,'store']);//ele usa o post, que nem no php, pra uplodar o dado pro metodom store do controller
    Route::get('/twirps/{twirp}/edit', [TwirperController::class, 'edit']);
    Route::put('/twirps/{twirp}', [TwirperController::class, 'update']);
    Route::delete('/twirps/{twirp}', [TwirperController::class, 'destroy']);
});
//rotas do register
Route::view('/register', 'auth.register')
    ->middleware('guest')
    ->name('register');

Route::post('/register', Register::class)
    ->middleware('guest');

//login
Route::view('/login', 'auth.login')
    ->middleware('guest')
    ->name('login');

Route::post('/login', Login::class)
    ->middleware('guest');

//logout
Route::post('/logout', Logout::class)
    ->middleware('auth')
    ->name('logout');//meio inutil

// como ta em baixo funcionaria as rotas de crud normalmente , só ia deixar o código mais limpo, mais vou fazer do jeito secão mesmo
//Route::resource('chirps', ChirpController::class)
//    ->only(['store', 'edit', 'update', 'destroy']);