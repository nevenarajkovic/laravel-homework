<?php

use Illuminate\Support\Facades\Route;

/*
    Domaci:
    1. glavna stranica (welcome.blade.php)
    2.about
    3.shop
    4.contact
*/

Route::view("/", "welcome");

Route::get("/about", function () {
    return view("about");
});


Route::get("/shop", function (){
    return view("shop");
});

Route::get("/contact", function (){
    return view("contact");
});
