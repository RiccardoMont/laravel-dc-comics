<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $comics = Comic::all();

        return view('admins.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('admins.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $val_data = $request->validate([
            'title' => 'required|max:200',
            'description' => 'required|max:2500',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required|max:100',
            'sale_date' => 'required',
            'type' => 'required|max:100'
        ]);

        //dd($val_data);
        $data = $request->all();

        //dd($data);



        $comic = new Comic();
        //Metodo esteso funzionante
        /*
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->save();
        */

        //Metodo fill funzionante
        $comic->fill($val_data);
        $comic->save();


        
        return to_route('comics.index');
        //return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        //
        return view('admins.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        //
        //dd($comic);

        return view('admins.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //
        $comic->update($request->all());
        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();
        return to_route('comics.index', $comic);
    }
}
