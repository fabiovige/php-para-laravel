<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Symfony\Component\String\ByteString;

Route::get('/', function () {
    $user = new User();
    $user->table = 'teste';
    dd($user);
});
