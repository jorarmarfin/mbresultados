<?php

namespace App\Http\Controllers\Admin\Cursos;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Traits\RecordActivate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CursosController extends Controller
{
    use RecordActivate;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Lista = Curso::all();
        return view('admin.curso.index',compact('Lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('cursos','public');
        }
        Curso::create($data);
        return redirect()->route('admin.curso.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Curso::find($id);
        return view('admin.curso.edit',compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $curso = Curso::find($id);
        $data = $request->all();
        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('slides','public');

            $exists = Storage::disk('cursos')->exists($curso->solo_imagen);
            if($exists)
            Storage::delete("/public/$curso->imagen");

        }
        $curso->fill($data);
        $curso->save();
        return redirect()->route('admin.curso.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        $curso = Curso::find($id);

        $exists = Storage::disk('cursos')->exists($curso->solo_imagen);
        if($exists)
        Storage::delete("/public/$curso->imagen");

        $curso->delete($id);
        return redirect()->route('admin.curso.index');
    }
}
