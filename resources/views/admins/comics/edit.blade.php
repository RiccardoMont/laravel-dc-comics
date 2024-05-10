@extends('layouts.app')

@section('content')



<form action="{{ route('comics.update', $comic) }}" method="post">
    @csrf
    @method('PUT')


    <label for="title">Titolo</label>
    <input type="text" name="title" id="title" value="{{$comic->title}}">
    <br>
    <label for="description">Descrizione</label>
    <textarea type="text" name="description" id="description" rows="6" cols="100">{{$comic->description}}</textarea>
    <br>
    <label for="thumb">Link img</label>
    <input type="text" name="thumb" id="thumb" size="100" value="{{$comic->thumb}}">
    <img src="{{$comic->thumb}}" alt="" style="width: 100px;">
    <br>
    <label for="price">Prezzo</label>
    <input type="number" name="price" id="price" step=".01" value="{{$comic->price}}">
    <br>
    <label for="series">Serie</label>
    <input type="text" name="series" id="series" value="{{$comic->series}}">
    <br>
    <label for="sale_date">Data uscita</label>
    <input type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
    <br>
    <label for="type">Tipologia</label>
    <input type="text" name="type" id="type" value="{{$comic->type}}">
    <br>


    <button type="submit">Aggiorna</button>

</form>





@endsection