<?php

use Auth0\Laravel\Facade\Auth0;
use Illuminate\Support\Facades\Route;

Route::get('/private', function () {
  return response('Welcome! You are logged in.');
})->middleware('auth');

Route::get('/', function () {
  return view('welcome');
});
