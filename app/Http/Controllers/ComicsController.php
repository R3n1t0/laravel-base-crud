<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Comics;


class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comics::orderBy('id', 'desc')->get();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(

            [
                'title'=>'required|max:255|min:3',
                'image'=>'required|max:255|min:10',
                'type'=>'required|max:255|min:3'
            ],
            [
                'title.required'=>'Il campo title &eacute obligatorio',
                'title.max'=>'Il campo title puo avere al massimo :max caratteri',
                'title.min'=>'Il campo title puo avere minimo :min caratteri',
                'image.required'=>'Il campo image &eacute obligatorio',
                'image.max'=>'Il campo image puo avere al massimo :max caratteri',
                'image.min'=>'Il campo image puo avere minimo :min caratteri',
                'type.required'=>'Il campo type &eacute obligatorio',
                'type.max'=>'Il campo type puo avere al massimo :max caratteri',
                'type.min'=>'Il campo type puo avere minimo :min caratteri',
            ]

        );

        $data = $request->all();

        $new_comic = new Comics();
        $data['slug'] = Str::slug($data['title'], '-');
        $new_comic->fill($data);
        $new_comic -> save();

        return redirect()->route('comics.show', $new_comic->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comics::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $comic = Comics::find($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comics $comic)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title'], '-');
        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comic)
    {
        $comic-> delete();
        return redirect()->route('comics.index');
    }
}
