<?php

// USERS - Login
Route::get("/users/login", "UserController@login")->name("users.login");
Route::post("/users/login", "UserController@doLogin");

// USERS - Logout
Route::get("/users/logout", "UserController@logout")->name("users.logout");

// USERS
Route::resource("users", "UserController");

// POSTS
Route::resource("posts", "PostController");

// Redirige sur la liste des articles
Route::get("/", function() {
    return redirect(route("posts.index"));
});
