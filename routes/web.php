<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteOne\SiteOneController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mypage', function () {
    return view('mypage');
});

//site1/home ,about us contact us
//prefix
Route::prefix('site1')->controller(SiteOneController::class)->group(function () {
    Route::get('/home','home');
    Route::get('/about','about');
    Route::get('/contact','contact');
    Route::get('/msg/{id}','msg');
}
);

