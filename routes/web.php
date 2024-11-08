<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

// $info = "hi, let's learn laravel";

// // $info=Str::ucfirst($info);
// // $info=Str::replaceFirst('Hi', 'hello', $info);
// // $info=Str::camel($info);
                                                  //fluent string
// $info=Str::of($info)
// ->ucfirst($info)
// ->replaceFirst('Hi', 'hello', $info)
// ->camel($info);

// echo $info;


Route::get('/', function () {
    return view('welcome');
});

Route::post('send-email',[MailController::class,'sendEmail']);

Route::view('send-email','send-email');
