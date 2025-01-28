<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/ninjas', function () {
  $ninjas = [
    ['first-name' => 'Chris', 'last-name' => 'Barranger', 'gender' => 'Male', 'id' => '1'],
    ['first-name' => 'Rebecca', 'last-name' => 'Barranger', 'gender' => 'Female', 'id' => '2'],
    ['first-name' => 'Devin', 'last-name' => 'Patton', 'gender' => 'Male', 'id' => '3'],
    ['first-name' => 'Jason', 'last-name' => 'Borden', 'gender' => 'Male', 'id' => '4'],
  ];

  return view('ninjas.index', ["greeting" => "Hello", "ninjas" => $ninjas]);
});

Route::get('/ninjas/create', function () {
  return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
  return view('ninjas.show', ['id' => $id]);
});
