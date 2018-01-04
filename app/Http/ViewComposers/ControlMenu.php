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
			'Inicio' => ['route' => 'admin.index', 'icon' => 'icon-home'],
			'Configuracion' => ['icon'=>'icon-settings',
						'submenu'=>[
							'Catalogo'=>['route'=>'catalogo.index','roles'=>['root']],
							'Secciones'=>['route'=>['catalogo.show','secciones'],'roles'=>['root']],
							'Roles'=>['route'=>['catalogo.show','roles'],'roles'=>['root']],
							'Usuarios'=>['route'=>'admin.usuarios.index','roles'=>['root']]
						]
			],
			'Slider' => ['route' => 'admin.slider.index','icon'=>'fa fa-bars','roles'=>['admin','root']],
			'Cursos' => ['route' => 'admin.curso.index','icon'=>'fa fa-book','roles'=>['admin','root']],
			'Blog' => ['route' => 'admin.blog.index','icon'=>'fa fa-wordpress','roles'=>['admin','root']],
			'Logos' => ['route' => 'admin.logo.index','icon'=>'fa fa-get-pocket','roles'=>['admin','root']],
			'Pagina web' => ['route' => 'home.index','icon'=>'fa fa-internet-explorer','roles'=>['admin','root'],'target'=>'blank']
		];
		$view->with(compact('items'));
	}
}