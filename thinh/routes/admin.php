<?php 
Route::get('/', "Admin\\DashboardController@index");
Route::get('/category', "Admin\\CategoryController@index")->name("admin.cate.list");
Route::get('/category/add-new', "Admin\\CategoryController@addNew")->name("admin.cate.add");
Route::get('/category/delete', "Admin\\CategoryController@delete")->name("admin.cate.delete");
Route::get('/category/update/{id}', "Admin\\CategoryController@update")->name("admin.cate.update");
// save category (insert/update)
Route::post('/category/store', "Admin\\CategoryController@store")->name("admin.cate.store");
 ?>