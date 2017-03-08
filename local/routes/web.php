<?php

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
    return view('public/index');
});
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/story','AdminController@storiesAction');
Route::get('/admin/chapter','AdminController@chaptersAction');
Route::get('/admin/category','AdminController@categoriesAction');
Route::post('/admin/story','StoryController@store');
Route::post('/admin/category/add','TermController@addcategory');
Route::get('/admin/test','AdminController@AutogetTerm');
Route::get('/admin/plugins/autostory',function () {
    return view('admin/plugins/autostory');
});
Route::get('/admin/plugins/autochapter',function () {
    return view('admin/plugins/autochapter');
});
Route::get('/datatables/data','DatatablesController@listStoryData');
// Ajax
Route::post('/admin/ajax/getstory','AdminController@ajaxGetstory');
Route::post('/admin/ajax/getchapter','AdminController@ajaxGetchapter');
Route::post('/admin/ajax/addstory','AdminController@ajaxAddstory');
Route::post('/admin/ajax/addchapter','AdminController@ajaxAddchapter');
Route::get('/admin/ajax/liststory','StoryController@AjaxListStory');


