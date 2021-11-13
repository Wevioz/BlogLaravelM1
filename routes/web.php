<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormationController;


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
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'getCategories']);

Route::get('/categories/{id}', [FormationController::class, 'getFormations']);

// Route::get('/posts/add', function() {
//     return view('posts.add');
// });

// Route::post('/posts/add', [PostController::class, 'addPost']);
