<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(["namespace" => "App\Http\Controllers\User"], function () {
    Route::get("/", "HomeController@index")->name('home.index');
    Route::group(["as"=>"company.", "prefix"=>"company"], function () {
        Route::get("/about", "CompanyController@about")->name('about');
        Route::get("/contact", "CompanyController@contact")->name('contact');
        Route::get("/faq", "CompanyController@faq")->name('faq');
    });

    Route::group(["as"=>"catalog.", "prefix"=>"catalog"], function () {
        Route::get("/news", "CatalogController@news")->name('news');
        Route::get("/event", "CatalogController@event")->name('event');
    });

    Route::group(["as"=>"product.", "prefix"=>"product"], function () {
        Route::get("/", "ProductController@index")->name('index');
    });

    Route::group(["as"=>"course.", "prefix"=>"course"], function () {
        Route::group(["as"=>"pengembangan-diri.", "prefix"=>"pengembangan-diri"], function () {
            Route::get("/", "SelfDevelopmentController@index")->name('index');
        });

        Route::group(["as"=>"pelatihan-ekonomi.", "prefix"=>"pelatihan-ekonomi"], function () {
            Route::get("/", "EconomicTrainingController@index")->name('index');
        });
    });
});
