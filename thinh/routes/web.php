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
// Route::get('/{name?}',"HomeController@getParam");
// // Route::get('/{name}', function ($name) {
// //     return $name;
// // });
// Route::post('/thinh',"HomeController@index");
// Route::put('/thinh', function () {
//     return "Thinh";
// });

Route::get('/',function(){
	return view('welcome');
});
//  Lay du lieu theo dieu kien where 

// Route::get('/test',function(){
// 	$data = App\Danhmuc::where('id','>=','1')->get()->toArray();
// 	echo "<pre>";
// 	print_r ($data);
// 	echo "</pre>";
// });

// Dem du lieu trong data

// Route::get('/test',function(){
// 	$data = App\Danhmuc::all()->count();
// 	echo "<pre>";
// 	print_r ($data);
// 	echo "</pre>";
// });

// Them du lieu trong data

// Route::get('/test',function(){
// 	$data =  new App\Danhmuc;
// 	$data->description =" Mid Carry";
// 	$data->name =" Mid Carry";
// 	$data->save();
// 	echo "<pre>";
// 	print_r($data);
// 	echo "/pre>";
// });

// Update du lieu trong data


// Route::get('/test',function(){
// 	$data = App\Danhmuc::find(3);
// 	$data->description =" Mid Carry";
// 	$data->save();
// 	echo "<pre>";
// 	print_r($data);
// 	echo "/pre>";
// });

// Xoa du lieu trong data


// Route::get('/test',function(){
// 	$data = App\Danhmuc::destroy(3);
// 	echo "<pre>";
// 	print_r($data);
// 	echo "/pre>";
// });

Route::get('/thinh',function(){
	return view('client.index');
});
