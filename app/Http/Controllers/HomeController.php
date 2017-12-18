<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Auth;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$seccion = 'home';
        $Slider = Slider::orderBy('orden')->get();
        return view('web.index',compact('seccion','Slider'));
    }

}
