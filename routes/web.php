<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TerrainController;
use App\Http\Controllers\TournoiController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ResultatController;


Route::get('/', function () {
    return view('welcome');
});

  Route::get('/faqs', function() {
     return view('faqs');
  })->name('faqs');
  route::get('/apropos', function() {
     return view('apropos');
  })->name('apropos');
Route::get('/contact', function() {
    return view('contact');
})->name('contact');
Route::get('/newtocloud', function () {
    return view('newtocloud');
})->name('newtocloud');
Route::get('/alreadyoncloud', function () {
    return view('alreadyoncloud');
})->name('alreadyoncloud');
Route::get('/Googleclient', function () {
    return view('Googleclient');
})->name('Googleclient');
Route::get('/dropboxclient', function () {
    return view('dropboxclient');
})->name('dropboxclient');
Route::get('/microsoftclient', function () {
    return view('microsoftclient');
})->name('microsoftclient');
Route::get('/azureclient', function () {
    return view('azureclient');
})->name('azureclient');
Route::get('/awsclient', function () {
    return view('awsclient');
})->name('awsclient');
Route::get('/slackclient', function () {
    return view('slackclient');
})->name('slackclient');
Route::get('/clientdashboard', function () {
    return view('clientdashboard');
})->name('clientdashboard');
Route::get('/upload', function () {
    return view('upload');
})->name('upload');
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');
Route::get('/billing', function () {
    return view('billing');
})->name('billing');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');   
Route::get('/demo', function () {
    return view('demo');
})->name('demo');
Route::get('/dataserviceonly', function () {
    return view('dataserviceonly');
})->name('dataserviceonly');

Route::get('/pagetest', [App\Http\Controllers\HomeController::class, 'pagetest'])->name('pagetest');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/courtownerint', [App\Http\Controllers\HomeController::class, 'courtownerint'])->name('courtownerint');
Route::get('/playerint', [App\Http\Controllers\HomeController::class, 'playerint'])->name('playerint');

Route::get('/tennishub', [App\Http\Controllers\HomeController::class, 'tennishub'])->name('tennishub');
Route::resource('/posts', 'App\Http\Controllers\PostController');
Route::get('/tournois', [App\Http\Controllers\HomeController::class, 'tournois'])->name('tournois');
Route::get('/postmatch', [App\Http\Controllers\HomeController::class, 'postmatch'])->name('postmatch');
use App\Http\Controllers\LogoutController;

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::resource('/terrains', 'App\Http\Controllers\TerrainController');
Route::resource('/resultats', 'App\Http\Controllers\ResultatController');
Route::resource('/tournois', 'App\Http\Controllers\TournoiController');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/home',[AdminController::class,'index'])->name('dashboard');
require_once __DIR__.'/jetstream.php';

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('/terrains', TerrainController::class)->except(['index','delete','destroy', 'show','create','store']);
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('/tournois', TournoiController::class)->except(['index', 'show','create','store']);
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('/posts', PostController::class)->except(['index', 'show','create','store']);
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('/postmatch', ResultatController::class)->except(['index', 'show','create','store']);
});