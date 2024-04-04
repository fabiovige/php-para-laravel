<?php

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Route;
use Symfony\Component\String\ByteString;

Route::get('/', function () {
    try {
        $user = User::findOrFail(1);
        dd($user);
    } catch (ModelNotFoundException $e) {
        echo 'usuário não encontrado';
    } catch (QueryException $e) {
        echo 'erro ao buscar usuário';
    } finally {
        echo 'finalmente';
    }
});
