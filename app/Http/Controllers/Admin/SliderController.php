<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderCreateRequest;
use App\Models\Slider;
use App\Traits\RecordActivate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{
    use RecordActivate;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Lista = Slider::all();
        return view('admin.slider.index',compact('Lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderCreateRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('slides','public');
        }
        Slider::create($data);
        return redirect()->route('admin.slider.index');
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
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
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
        $slider = Slider::find($id);
        $data = $request->all();
        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('slides','public');

            $exists = Storage::disk('sliders')->exists($slider->solo_imagen);
            if($exists)
            Storage::delete("/public/$slider->imagen");

        }
        $slider->fill($data);
        $slider->save();
        return redirect()->route('admin.slider.index');

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
        $slide = Slide::find($id);

        $exists = Storage::disk('sliders')->exists($slide->solo_imagen);
        if($exists)
        Storage::delete("/public/$slide->imagen");

        $slide->delete($id);
        return redirect()->route('admin.slider.index');
    }
}
