@extends('layouts.app')

@section('content')



<form action="{{ route('comics.update', $comic) }}" method="post">
    @csrf
    @method('PUT')

    <div class="campo">
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title" value="{{$comic->title}}">
    </div>
    <div class="campo">
        <label for="description">Descrizione</label>
        <textarea type="text" name="description" id="description" rows="6" cols="100">{{$comic->description}}</textarea>
    </div>
    <div class="campo">
        <label for="thumb">Link img</label>
        <input type="text" name="thumb" id="thumb" size="100" value="{{$comic->thumb}}">
        <img src="{{$comic->thumb}}" alt="" style="width: 100px;">
    </div>
    <div class="campo">
        <label for="price">Prezzo</label>
        <input type="number" name="price" id="price" step=".01" value="{{$comic->price}}">
    </div>
    <div class="campo">
        <label for="series">Serie</label>
        <input type="text" name="series" id="series" value="{{$comic->series}}">
    </div>
    <div class="campo">
        <label for="sale_date">Data uscita</label>
        <input type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
    </div>
    <div class="campo">
        <label for="type">Tipologia</label>
        <input type="text" name="type" id="type" value="{{$comic->type}}">
    </div>
    <div class="update-comic">
        <button class="purple-button" type="submit">Update</button>
    </div>
</form>






@endsection

<style type="text/css">
    form {
        margin: 0 10rem;


        & .campo {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin: 1rem 0;


            & input {
                border-radius: 5px;
                border: 2px solid var(--bgheader-violet);
                padding: 0.5rem;
            }

            & input:hover,
            input:focus {
                box-shadow: 0px 0px 10px var(--hover-bgheader-violet);
            }

            & textarea {
                border-radius: 5px;
                border: 2px solid var(--bgheader-violet);
                padding: 0.5rem;
            }

            & textarea:hover,
            textarea:focus {
                box-shadow: 0px 0px 10px var(--hover-bgheader-violet);
            }

        }

    }

    .update-comic {
        width: 100%;
        display: flex;
        justify-content: space-between;
        margin: 2rem 0;

        & button {
            cursor: pointer;
        }
    }
</style>