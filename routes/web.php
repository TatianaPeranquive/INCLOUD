<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\doc_documento_controller;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('CRUD_documentos', doc_documento_controller::class);
