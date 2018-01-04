<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCreateRequest;
use App\Models\Blog;
use App\Traits\RecordActivate;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    use RecordActivate;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Lista = Blog::all();
        return view('admin.blog.index',compact('Lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCreateRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('blog','public');
        }
        $data['idusuario'] = Auth::user()->id;
        Blog::create($data);
        return redirect()->route('admin.blog.index');
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
        $blog = Blog::find($id);
        return view('admin.blog.edit',compact('blog'));
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
        $blog = Blog::find($id);
        $data = $request->all();
        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('blog','public');

            $exists = Storage::disk('blog')->exists($blog->solo_imagen);
            if($exists)
            Storage::delete("/public/$blog->imagen");

        }
        $blog->fill($data);
        $blog->save();
        return redirect()->route('admin.blog.index');

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
        $blog = Blog::find($id);

        $exists = Storage::disk('blog')->exists($blog->solo_imagen);
        if($exists)
        Storage::delete("/public/$blog->imagen");

        $blog->delete($id);
        return redirect()->route('admin.blog.index');
    }
}
