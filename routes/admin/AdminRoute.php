<?php


Route::get('admin','AdminController@index')->name('admin.index');

Route::group(['namespace'=>'Usuarios'], function() {

	Route::resource('usuarios','UsuariosController',['names'=>'admin.usuarios','only'=>['index','show','edit','update','store']]);
	Route::get('activar-usuario/{tabla}/{id}/{sw}','UsuariosController@activate')->name('admin.usuarios.activar');
	Route::get('usuarios-create/','UsuariosController@create')->name('admin.usuarios.create');
	Route::get('usuarios-delete/{id}','UsuariosController@delete')->name('admin.usuarios.delete');

});


Route::group([], function() {

	Route::resource('admin/slider','SliderController',['names'=>'admin.slider']);
	Route::get('admin/slider-delete/{id}','SliderController@delete')->name('admin.slider.delete');
	Route::get('admin/activar-slider/{tabla}/{id}/{sw}','SliderController@activate')->name('admin.slider.activar');

	Route::resource('admin/logo','LogosController',['names'=>'admin.logo']);
	Route::get('admin/logo-delete/{id}','LogosController@delete')->name('admin.logo.delete');
	Route::get('admin/activar-logo/{tabla}/{id}/{sw}','LogosController@activate')->name('admin.logo.activar');

	Route::resource('admin/curso','Cursos\CursosController',['names'=>'admin.curso']);
	Route::get('admin/curso-delete/{id}','Cursos\CursosController@delete')->name('admin.curso.delete');
	Route::get('admin/activar-curso/{tabla}/{id}/{sw}','Cursos\CursosController@activate')->name('admin.curso.activar');

	Route::resource('admin/blog','Blog\BlogController',['names'=>'admin.blog']);
	Route::get('admin/blog-delete/{id}','Blog\BlogController@delete')->name('admin.blog.delete');
	Route::get('admin/activar-blog/{tabla}/{id}/{sw}','Blog\BlogController@activate')->name('admin.blog.activar');

});




