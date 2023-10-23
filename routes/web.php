<?php



use App\Http\Controllers\post;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/post', [post::class, 'create']);
Route::post('/post/store', [post::class, 'store']);
Route::get('/post/show-single/{id}', [post::class, 'show_single']);
Route::get('/post/edit/{id}', [post::class, 'edit']);
Route::put('/post/update/{id}', [post::class, 'update']);
Route::delete('/post/delete/{id}', [post::class, 'destroy']);
