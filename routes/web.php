<?php

// Quand un visiteur va sur /users/create, exécute la méthode "create" du contrôleur UserController
Route::get("/users/create", "UserController@create")->name("users.create");
Route::post("/users", "UserController@store");

Route::get("/users/login", "UserController@login")->name("users.login");
Route::post("/users/login", "UserController@doLogin");
