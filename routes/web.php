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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/appointments', function () {
        return view('appointments/index');
    })->name('appointments');
    Route::get('/clients', function () {
        return view('clients/index');
    })->name('clients');
    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', function () {
            return view('settings.index');
        })->name('settings');
        Route::get('/services', function () {
            return view('settings/index');
        })->name('settings.services');
        Route::get('/goals', function () {
            return view('settings/index');
        })->name('settings.goals');
        Route::get('/pricing', function () {
            return view('settings/index');
        })->name('settings.pricing');
    });
});
