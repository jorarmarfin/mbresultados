<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Curso;
use App\Models\Logo;
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
        $Logos = Logo::orderBy('orden')->get();
        $Cursos = Curso::Activo()->orderBy('orden')->get();
        $Blog = Blog::Activo()->OrderBy('fecha','desc')->first();
        return view('web.index',compact('seccion','Slider','Logos','Cursos','Blog'));
    }
    public function show($id)
    {
        $seccion = 'curso';
        $curso = Curso::where('slug',$id)->first();
        if(!is_null($curso))
            return view('web.curso',compact('seccion','curso'));
        else dd('error');
    }
    public function showBlog($id)
    {
        $seccion = 'Blog';
        $blog = Blog::where('slug',$id)->first();
        if(!is_null($blog))
            return view('web.blog.show',compact('seccion','blog'));
        else dd('error');
    }
    public function cursos()
    {
        $seccion = 'cursos';
        $Cursos = Curso::Activo()->get();
        return view('web.cursos',compact('seccion','Cursos'));
    }
    public function blogs()
    {
        $seccion = 'Blogs';
        $blogs = Blog::Activo()->OrderBy('fecha','desc')->get();
        return view('web.blog.index',compact('seccion','blogs'));
    }

}
