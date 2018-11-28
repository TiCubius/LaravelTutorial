<?php

// Quand un visiteur va sur /users/create, exécute la méthode "create" du contrôleur UserController
Route::get("/users/create", "UserController@create");
Route::post("/users", "UserController@store");

