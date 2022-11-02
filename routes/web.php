<?php

use Illuminate\Support\Facades\Route;

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
// デフォルトで呼ばれるルート
Route::get('/', function () {
    return view('welcome');
});
// クイズ一覧ページを返す
Route::get('/quizzes', function () {
    return view('quizzes.index');
})->name('quizzes.index');

//クイズ内容の詳細ページを返す
Route::get('quizzes/show', function () {
    return view('quizzes.show');
})->name('quizzes.show');

// 問題追加画面を返す
Route::get('quizzes/create', function () {
    return view('quizzes.create');
})->name('quizzes.create');

Route::delete('quizzes/{id}', function ($id) {
    return json_encode(['message' => 'ID:'.$id.' が削除されるIDもです(仮の出力)']);
})->name('quizzes.delete');