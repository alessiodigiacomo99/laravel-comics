<?php

namespace App\Http\Controllers\Admin;

use App\Comic;
use App\Writer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::latest()->get();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $writers = Writer::all();
        return view('admin.comics.create', compact('writers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'cover' => '',
            'price' => '',
            'available' => '',
        ]);

        
        if (strlen($request->cover) != 0){
            $cover = Storage::put('cover_imgs', $request->cover);
            $validateData['cover'] = $cover;
        }

        Comic::create($validateData);
        $post = Comic::orderBy('id', 'desc')->first();
        $post->writers()->attach($request->writers);
        return redirect()->route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $writers = Writer::all();
        return view('admin.comics.edit', compact('comic'), compact('writers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        if (strlen($request->cover) != 0){
            $cover = Storage::put('cover_imgs', $request->cover);
            $data['cover'] = $cover;
        }
        $comic->update($data);
        $post = Comic::orderBy('id', 'desc')->first();
        $post->writers()->sync($request->writers);

        return redirect()->route('admin.comics.index', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('admin.comics.index');
    }
}
