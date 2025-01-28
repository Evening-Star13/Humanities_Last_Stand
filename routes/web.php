<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivestockController;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/ninjas', [LivestockController::class, 'index']);

Route::get('/ninjas/create', function () {
  return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
  return view('ninjas.show', ['id' => $id]);
});
