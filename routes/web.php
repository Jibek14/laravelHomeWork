<?php

use Illuminate\Support\Facades\Route;


Route::get('/','TaskController@insertform');
Route::post('create','TaskController@insert');
