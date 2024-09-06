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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('news/create', 'add')->name('news.add');
    Route::post('news/create','create')->name('news.create');
});


/*PHP/Laravel 09 Routingについて理解する課題３　「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください */

/*use App\Http\Controllers\Admin\AAAControroller;
Route::controller(AAAController::class)
->prefix('admin')->group(function() {
    Route::get('/XXX','bbb');
});
*/
echo ("\n");

/*課題４ 【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。web.phpを編集して、admin/profile/create にアクセスしたら ProfileController の add Action に、admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください
 */

 /*PHP/Laravel 13 課題３・６↓*/
use App\Http\Controllers\Admin\ProfileController;
Route::controller(ProfileController::class)
->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('profile/create','add')->name('profile.add');
    Route::post('profile/create','create')->name('profile.create');
    Route::get('profile/edit','add')->name('profile.add');
    Route::post('profile/edit','update')->name('profile.update');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

