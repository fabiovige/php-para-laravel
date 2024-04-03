<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Symfony\Component\String\ByteString;

Route::get('/', function () {
    $user = new User();
    $user->name = 'Fulano';
    $user->email = 'fulano@gmail.com';
    $user->password = bcrypt('123456');
    $user->save();
    dd($user);
});
