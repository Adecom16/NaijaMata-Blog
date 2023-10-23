<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [Controller::class, 'home']);
Route::get('/admin/news', [Controller::class, 'index']);
Route::get('/admin/news/post', [Controller::class, 'post'])->name('news.post');
Route::get('/admin/news/edit/{id}', [Controller::class, 'edit']);
Route::put('/admin/news/post', [Controller::class, 'update'])->name('news.update');

Route::delete('/admin/news/delete', [Controller::class, 'delete'])->name('news.delete');

Route::post('/admin/news/post', [Controller::class, 'store']);


