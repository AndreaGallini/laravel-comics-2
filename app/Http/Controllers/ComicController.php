<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

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
        $data = $request->all();

        $newcomic = new Comic();
        $newcomic->titolo = $data['title'];
        $newcomic->descrizione = $data['description'];
        $newcomic->thumb = $data['thumb'];
        $newcomic->price = $data['price'];
        $newcomic->series = $data['series'];
        $newcomic->sale_date = $data['sales_date'];
        $newcomic->type = $data['type'];
        $newcomic->artists = $data['artists'];
        $newcomic->writers = $data['writers'];
        $newcomic->save();
        return redirect()->route('comics.show', ['comic' => $newcomic->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
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
        $comic = Comic::find($id);

        $data_form = $request->all();

        $comic->titolo = $data_form['title'];
        $comic->descrizione = $data_form['description'];
        $comic->thumb = $data_form['thumb'];
        $comic->price = $data_form['price'];
        $comic->series = $data_form['series'];
        $comic->sale_date = $data_form['sales_date'];
        $comic->type = $data_form['type'];
        $comic->artists = $data_form['artists'];
        $comic->writers = $data_form['writers'];

        $comic->update();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
