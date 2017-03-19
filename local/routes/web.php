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





Route::get('/danh-sach/truyen-full','PublicController@termPage');
Route::get('/static/cropimage','PublicController@cropPage');
Auth::routes();

Route::get('/','PublicController@homePage');
Route::group(['middleware' => 'auth'], function () {
	
    Route::get('/admin', 'AdminController@index');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('/admin/story','AdminController@storiesAction');
	Route::get('/admin/chapter','AdminController@chaptersAction');
	Route::get('/admin/category','AdminController@categoriesAction');
	Route::post('/admin/story','StoryController@store');
	Route::post('/admin/category/add','TermController@addcategory');
	Route::get('/admin/test','AdminController@AutogetTerm2');

	Route::get('/admin/plugins/autostory',function () {
	    return view('admin/plugins/autostory');
	});
	Route::get('/admin/plugins/autochapter',function () {
	    return view('admin/plugins/autochapter');
	});
	Route::get('/datatables/data','DatatablesController@listStoryData');
});
Route::post('/ajax','PublicController@ajaxPage');
Route::get('/tac-gia/{slug}/','PublicController@authorPage');
Route::get('/the-loai/{slug}/','PublicController@categoryPage');
Route::get('/{slug}','PublicController@storyPage');
Route::get('/{slug}/{slugchap}','PublicController@chapterPage');





// Ajax

Route::post('/admin/ajax/getstory','AdminController@ajaxGetstory');
Route::post('/admin/ajax/getchapter','AdminController@ajaxGetchapter');
Route::get('/admin/ajax/getpage','AdminController@ajaxGetPage');
Route::post('/admin/ajax/addstory','AdminController@ajaxAddstory');
Route::post('/admin/ajax/addchapter','AdminController@ajaxAddchapter');
Route::get('/admin/ajax/liststory','StoryController@AjaxListStory');


