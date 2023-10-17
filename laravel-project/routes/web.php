<?php

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
/*
タスク
use App\Http\Controllers\TaskController;

//App\Http\Controllers\追加忘れずに！！


//ホーム画面を返す
Route::group(['middleware' => 'auth'], function() {

    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

    // ルート定義(タスク画面作った)
    Route::get('/folders/{id}/tasks', 'App\Http\Controllers\TaskController@index')->name('tasks.index');

    // ルート定義（フォルダ追加フォーム）
    Route::get('/folders/create', 'App\Http\Controllers\FolderController@showCreateForm')->name('folders.create');
    Route::post('/folders/create', 'App\Http\Controllers\FolderController@create');

    // ルート定義（タスク追加フォーム）
    Route::get('/folders/{id}/tasks/create', 'App\Http\Controllers\TaskController@showCreateForm')->name('tasks.create');
    Route::post('/folders/{id}/tasks/create', 'App\Http\Controllers\TaskController@create');

    // ルート定義（タスクの編集機能）
    Route::get('/folders/{id}/tasks/{task_id}/edit', 'App\Http\Controllers\TaskController@showEditForm')->name('tasks.edit');
    Route::post('/folders/{id}/tasks/{task_id}/edit', 'App\Http\Controllers\TaskController@edit');
    
    

});

//会員登録機能
Auth::routes();
*/


use App\Http\Controllers\TopController;
//query.topにお問い合わせフォームを置く
Route::get('query/top', 'App\Http\Controllers\TopController@showCreateForm')->name('query.top');
Route::post('query/confirm', 'App\Http\Controllers\TopController@confirm')->name('query.confirm');
Route::post('query/thanks', 'App\Http\Controllers\TopController@create')->name('query.thanks');

