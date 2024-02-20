<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;
use Illuminate\Support\Facades\Validator;

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
        $form = $request->all();
        
        $comic = new Comic();

        $comic->title = $form['title'];
        $comic->description = $form['description'];
        $comic->thumb = $form['thumb'];
        $comic->price = $form['price'];
        $comic->series = $form['series'];
        $comic->sale_date = $form['sales_date'];
        $comic->type = $form['type'];

        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', ['comic' => $comic]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
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
        $form = $this->validation($request->all());
        
        $comic = Comic::find($id);

        $comic->title = $form['title'];
        $comic->description = $form['description'];
        $comic->thumb = $form['thumb'];
        $comic->price = $form['price'];
        $comic->series = $form['series'];
        $comic->sale_date = $form['sales_date'];
        $comic->type = $form['type'];

        
        $comic->update();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation($data){
        $validator = Validator::make($data, 
        [
            'title'         => 'required|min:5|max:40',
            'description'   => 'required|max:1000',
            'thumb'         => 'min:10',
            'price'         => 'required|max:10',
            'series'        => 'required|min:5|max:30',
            'sales_date'     => 'required',
            'type'          => 'required|min:5|max:20',
        ],
        [
            'title.required'         => 'Inserimento del titolo obbligatiorio',
            'title.min'              => 'I caratteri del titolo devono essere almeno 5',
            'title.max'              => 'I caratteri del titolo devono essere meno di 40',
            'description.required'   => 'Inserimento della descrizione obbligatiorio',
            'description.max'        => 'I caratteri della descrizione devono essere meno di 1000',
            'thumb.min'              => 'I caratteri dell\' immagine devono essere almeno 10',
            'price.required'         => 'Inserimento del prezzo obbligatorio',
            'price.max'              => 'I caratteri del prezzo devono essere meno di 10',
            'series.required'        => 'Inserimento della serie obbligatorio',
            'series.min'             => 'I caratteri della serie devono essere almeno 5',
            'series.max'             => 'I caratteri della serie devono essere meno di 30',
            'sales_date.required'     => 'Inserimento della data obbligatorio',
            'type.required'          => 'Inserimento del tipo obbligatorio',
            'type.min'               => 'I caratteri del tipo devono essere meno di 5',
            'type.max'               => 'I caratteri del tipo devono essere almeno 20',
        ]
        )->validate();

        return $validator;
    }

}


