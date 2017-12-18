<?php


Route::get('admin','AdminController@index')->name('admin.index');

Route::group(['namespace'=>'Usuarios'], function() {

	Route::resource('usuarios','UsuariosController',['names'=>'admin.usuarios','only'=>['index','show','edit','update','store']]);
	Route::get('activar/{tabla}/{id}/{sw}','UsuariosController@activate')->name('admin.usuarios.activar');
	Route::get('usuarios-create/','UsuariosController@create')->name('admin.usuarios.create');
	Route::get('usuarios-delete/{id}','UsuariosController@delete')->name('admin.usuarios.delete');

});


Route::group([], function() {

	Route::resource('slider','SliderController',['names'=>'admin.slider']);
	Route::get('slider-delete/{id}','SliderController@delete')->name('admin.slider.delete');
/*	Route::get('activar/{tabla}/{id}/{sw}','UsuariosController@activate')->name('admin.usuarios.activar');
	Route::get('usuarios-create/','UsuariosController@create')->name('admin.usuarios.create');
*/
});




