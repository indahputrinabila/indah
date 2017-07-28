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
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
	return view('about');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/testmodel', function () {
	$query= App\Post::all();
	return $query;
});

Route::get('/testmodel1', function () {
	$query= App\Post::find(1);
	return $query;
});

Route::get('/testmodel2', function () {
	$query= App\Post::where('title','like','%cepat nikah%')->get();
	return $query;
});

Route::get('/testmodel3', function () {
	$query= App\Post::find(1);
	$query->title="ciri-ciri keluarga sakinah";
	$query->save();
	return $query;
});

Route::get('/testmodel', function () {
	$query= App\Siswa::all();
	return $query;
});

Route::get('/testmodel1', function () {
	$query= App\Siswa::find(1);
	return $query;
});

Route::get('/testmodel2', function () {
	$query= App\Siswa::where('nama','like','%indah%')->get();
	return $query;
});

Route::get('/testmodel3', function () {
	$query= App\Siswa::find(1);
	$query->nama="indah";
	$query->save();
	return $query;
});

Route::get('cektampilan', function(){
	return view ('layouts.master');
});
 Route::get('tampilan', function(){
 	return view ('layouts.tampilan');
 });

