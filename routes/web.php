<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/ninjas', function () {
  $ninjas = [
    ['name' => 'Goku', 'gender' => 'Male', 'id' => '1'],
    ['name' => 'Vegeta', 'gender' => 'Male', 'id' => '2'],
    ['name' => 'Brolly', 'gender' => 'Male', 'id' => '3'],
    ['name' => 'Bulma', 'gender' => 'Female', 'id' => '4'],
  ];

  return view('ninjas.index', ["greeting" => "Hello", "ninjas" => $ninjas]);
});

Route::get('/ninjas/create', function () {
  return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
  return view('ninjas.show', ['id' => $id]);
});
