<?php

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Route;
use Symfony\Component\String\ByteString;

Route::get('/', function () {
    session()->put('name', 'John Doe');
    session()->regenerate();
    
    dd(session()->all());
});
