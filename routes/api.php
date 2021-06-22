<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [UserController::class, 'authenticate']);
Route::post('register', [UserController::class, 'register']);
Route::get('blog/all', [BlogController::class, 'all']);


Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('blog', [BlogController::class, 'index']);
    Route::get('logout', [UserController::class, 'logout']);
    Route::get('get_user', [UserController::class, 'get_user']);

    Route::get('blog/{id}', [BlogController::class, 'show']);
    Route::post('blog/create', [BlogController::class, 'store']);
    Route::put('update/{blog}',  [BlogController::class, 'update']);
    Route::delete('delete/{blog}',  [BlogController::class, 'destroy']);
});

// Route::get('/blog',[ControllersBlog::class],'index');

// Route::post('/blog',function(){
//     return Blog::create(
//        [ 
//            'blog_title' => 'This is my first blog',
//             'blog_content' => 'Here is my blog'
//        ]
//        );
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
