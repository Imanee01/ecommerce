<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Nette\Utils\Random;
use Ramsey\Uuid\Generator\RandomLibAdapter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil',[
    'rand' => Product::all()->random(),
    'rand2' => Product::all()->random(),
    'rand3' => Product::all()->random(),
    'rands' => Product::all()->random(4),
    'lasts'=>Product::all()->last()->take(4)->get(),
    'favorite'=>Product::inRandomOrder()->where('favorite','1')->first(),
   
    
       
    ]);
});

Route::get('/produits',[ProductController::class,'index']);

// verifier le ($product)
Route::get('/produits/{product}',[ProductController::class,'show']);

Route::get('/categories/{category}',[CategoryController::class,'show']);

Route::get('/contact',[ContactController::class,'index']);

Route::get('/admin',[AdminProductController::class,'index']);
Route::get('/admin/produits',[AdminProductController::class,'show']);
Route::get('/admin/produits/creer',[AdminProductController::class,'create']);
Route::post('/admin/produits/creer',[AdminProductController::class,'store']);
Route::get('/admin/produits/{product}/modifier',[AdminProductController::class,'edit']);
Route::put('/admin/produits/{product}',[AdminProductController::class,'update']);
Route::delete('/admin/produits/{product}',[AdminProductController::class,'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


