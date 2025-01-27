<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/ninjas', function () {
  $ninjas = [
    ['name' => 'Goku', 'skill' => 99, 'id' => '1'],
    ['name' => 'Vegeta', 'skill' => 85, 'id' => '2'],
    ['name' => 'Brolly', 'skill' => 90, 'id' => '3'],
  ];

  return view('ninjas.index', ["greeting" => "Hello", "ninjas" => $ninjas]);
});

Route::get('/ninjas/create', function () {
  return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
  return view('ninjas.show', ['id' => $id]);
});
