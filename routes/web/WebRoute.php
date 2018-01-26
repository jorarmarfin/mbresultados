<?php

use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

Route::view('nosotros','web.nosotros',['seccion'=>'nosotros'])->name('nosotros');
Route::view('servicios','web.servicios',['seccion'=>'servicios'])->name('servicios');

Route::view('servicios/consultorias','web.consultorias',['seccion'=>'consultorias'])->name('servicios.consultorias');
Route::view('servicios/capacitaciones','web.capacitaciones',['seccion'=>'capacitaciones'])->name('servicios.capacitaciones');
Route::view('servicios/asesorias','web.asesorias',['seccion'=>'asesorias'])->name('servicios.asesorias');

Route::view('contactanos','web.contactanos',['seccion'=>'contactanos'])->name('contactanos');

Route::get('curso/{id}','HomeController@show')->name('ver.curso');
Route::get('cursos','HomeController@cursos')->name('cursos');

Route::get('blog/{id}','HomeController@showBlog')->name('ver.blog');
Route::get('blogs','HomeController@blogs')->name('blogs');

/*Envio de Email*/
Route::post('envio-email',function(){
	$datos = Request::all();

	Mail::to('caroll.bejarano@hotmail.com','Carol Bejarano')
			->cc('mbresultados@gmail.com','Mb Resultados')
		    ->send(new ContactEmail($datos));
	return redirect()->route('home.index');
})->name('envio.email.contactanos');