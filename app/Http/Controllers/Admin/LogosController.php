<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LogoCreateRequest;
use App\Models\Logo;
use App\Traits\RecordActivate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogosController extends Controller
{
    use RecordActivate;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Lista = Logo::all();
        return view('admin.logo.index',compact('Lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.logo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LogoCreateRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('logos','public');
        }
        Logo::create($data);
        return redirect()->route('admin.logo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logo = Logo::find($id);
        return view('admin.logo.edit',compact('logo'));
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
        $logo = Logo::find($id);
        $data = $request->all();
        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('logos','public');

            $exists = Storage::disk('logos')->exists($logo->solo_imagen);
            if($exists)
            Storage::delete("/public/$logo->imagen");

        }
        $logo->fill($data);
        $logo->save();
        return redirect()->route('admin.logo.index');

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
        $logo = Logo::find($id);

        $exists = Storage::disk('logos')->exists($logo->solo_imagen);
        if($exists)
        Storage::delete("/public/$logo->imagen");

        $logo->delete($id);
        return redirect()->route('admin.logo.index');
    }
}
