<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('posts', 'App\Http\Controllers\PostController');
Route::resource('videos', 'App\Http\Controllers\VideoController');
Route::resource('comments', 'App\Http\Controllers\CommentController');
Route::resource('tags', 'App\Http\Controllers\TagController');

Route::get('tags/{tag}/videos', 'App\Http\Controllers\TagVideoPostController@getTagVideo');
Route::get('tags/{tag}/posts', 'App\Http\Controllers\TagVideoPostController@getTagPost');

Route::post('tags/{tag}/videos', 'App\Http\Controllers\TagVideoPostController@attachTagVideo');
Route::post('tags/{tag}/posts', 'App\Http\Controllers\TagVideoPostController@attachTagPost');

Route::delete('tags/{tag}/videos/{video}', 'App\Http\Controllers\TagVideoPostController@detachTagVideo');
Route::delete('tags/{tag}/posts/{post}', 'App\Http\Controllers\TagVideoPostController@detachTagPost');