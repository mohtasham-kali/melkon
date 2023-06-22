<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
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

route::get('/', [HomeController::class, 'index']);
route::middleware(['auth:sanctum','verified']) ->get('/dashboard', function (){
    return view('dashboard');
})->name('dashboard');

route::get('/redirect', [HomeController::class, 'redirect']);
route::get('/view_category', [AdminController::class, 'view_category']);
route::post('/add_category', [AdminController::class, 'add_category']);
route::post('/delete_category/{id}', [AdminController::class, 'delete_category']);
route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);
route::get('/view_product', [AdminController::class, 'view_product']);
route::post('/view_product', [AdminController::class, 'view_product']);
route::get('/add_product', [AdminController::class, 'add_product']);
route::post('/add_product', [AdminController::class, 'add_product']);
route::get('/show_product', [AdminController::class, 'show_product']);
route::post('/show_product', [AdminController::class, 'show_product']);
route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);
route::get('/update_product/{id}', [AdminController::class, 'update_product']);
route::put('/update_product_confirm/{id}', [AdminController::class, 'update_product_confirm'])->name('update_product_confirm');
route::get('view_order/{id}', [HomeController::class, 'view_order']);
route::post('view_order/{id}', [HomeController::class, 'view_order']);
route::get('add_cart/{id}', [HomeController::class, 'add_cart']);
route::get('store', [HomeController::class, 'store']);
route::get('get_started', [HomeController::class, 'get_started']);
route::get('contact', [HomeController::class, 'contact']);
route::get('custom', [HomeController::class, 'custom']);
route::get('merch', [HomeController::class, 'merch']);
route::get('comingsoon', [HomeController::class, 'comingsoon']);
route::get('shopping_cart', [HomeController::class, 'shopping_cart']);
