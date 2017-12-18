<?php
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;

class ControlMenu
{
	/**
	 * Variables
	 * @param  actions: hide para ocultar el panel
	 * @return [type]       [description]
	 */
	public function compose(View $view)
	{
		$items = [
			'Inicio' => ['route' => 'home.index', 'icon' => 'icon-home'],
			'Configuracion' => ['icon'=>'icon-settings',
						'submenu'=>[
							'Catalogo'=>['route'=>'catalogo.index','roles'=>['root']],
							'Secciones'=>['route'=>['catalogo.show','secciones'],'roles'=>['root']],
							'Roles'=>['route'=>['catalogo.show','roles'],'roles'=>['root']],
							'Usuarios'=>['route'=>'admin.usuarios.index','roles'=>['root']]
						]
			],
			'Slider' => ['route' => 'admin.slider.index','icon'=>'fa fa-bars','roles'=>['admin','root']],
			'Cursos' => ['full_url' => 'http://contact.us','icon'=>'fa fa-book','roles'=>['admin','root']],
			'Blog' => ['full_url' => 'http://contact.us','icon'=>'fa fa-wordpress','roles'=>['admin','root']],
			'Logos' => ['full_url' => 'http://contact.us','icon'=>'fa fa-get-pocket','roles'=>['admin','root']]
		];
		$view->with(compact('items'));
	}
}