<?php

use App\Http\Controllers\HomeController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
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
Route::get('/giangvien', function () {
    return view('giangvien');
});
Route::get('dslop','HomeController@index');

Route::get('detai','HomeController@dsdetai');
Route::get('congviec','HomeController@lichcv');
Route::get('/doan','HomeController@doan');
Route::get('dtnc','HomeController@dtnghiencuu');
Route::get('dssv','HomeController@dssv');
Route::get('congviec','HomeController@lichcv');
Route::get('search','HomeController@search');
Route::get('searchdoan','HomeController@searchdoan');
Route::get('tailieu','HomeController@tailieu');
Route::get('giaotrinh','HomeController@giaotrinh');
Route::get('/Login','HomeController@getLogin');
Route::post('Login','HomeController@postLogin');
Route::get('/head','HomeController@header');
Route::get('lv','HomeController@lvts');
Route::get('/searchlich','HomeController@searchlich');
Route::get('danhsachlop', [HomeController::class, 'fileImportExport']);
Route::get('/timkiem','HomeController@timkiem');
Route::get('/thongke','HomeController@thongke');
Route::get('export',[HomeController::class,'export']);


Route::get('quantri','HomeController@qt');

