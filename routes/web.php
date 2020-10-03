<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Authentication;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Article\ArticleIndex;
use App\Http\Livewire\Admin\Article\CategoryIndex;
use App\Http\Livewire\Admin\Article\CategoryCreate;
// START AUTH LOGIN
//Route::livewire('auth/login','Authentication')->name('auth.showLoginForm');
Route::get('auth', function () {
    return redirect()->route('auth.showLoginForm');
});
Route::get('auth/login',Authentication::class)->name('auth.showLoginForm');
//Route::post('/',[AuthController::class,'login'])->name('login');
//Route::get('logout',Authentication::class)->name('logout');
//END AUTH LOGIN

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'superuser'],function(){
        Route::get('/',Dashboard::class)->name('dashboard');
//        Route::view('website/about','admin.setting.website.skeleton');
        Route::group(['prefix'=>'article'],function(){
            Route::get('/',ArticleIndex::class)->name('article');
            Route::get('category',CategoryIndex::class)->name('category');
            Route::get('category/create',CategoryCreate::class)->name('category.create');


        });
    });
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('admin.login');
});
