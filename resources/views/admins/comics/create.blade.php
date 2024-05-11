@extends('layouts.app')

@section('content')



<form action="{{ route('comics.store') }}" method="post">
    @csrf

    <label for="title">Titolo</label>
    <input type="text" name="title" id="title" value="{{old('title')}}" class="@error('title') is-invalid @enderror">
    @error('title')
    <div>{{$message}}</div>
    @enderror
    <br>
    <label for="description">Descrizione</label>
    <textarea type="text" name="description" id="description" rows="6" cols="100" class="@error('description') is-invalid @enderror">{{old('description')}}</textarea>
    @error('description')
    <div>{{$message}}</div>
    @enderror
    <br>
    <label for="thumb">Link img</label>
    <input type="text" name="thumb" id="thumb" size="100" value="{{old('thumb')}}" class="@error('thumb') is-invalid @enderror">
    @error('thumb')
    <div>{{$message}}</div>
    @enderror
    <br>
    <label for="price">Prezzo</label>
    <input type="number" name="price" id="price" step=".01" value="{{old('price')}}" class="@error('price') is-invalid @enderror"> 
    @error('price')
    <div>{{$message}}</div>
    @enderror
    <br>
    <label for="series">Serie</label>
    <input type="text" name="series" id="series" value="{{old('series')}}" class="@error('series') is-invalid @enderror">
    @error('series')
    <div>{{$message}}</div>
    @enderror
    <br>
    <label for="sale_date">Data uscita</label>
    <input type="date" name="sale_date" id="sale_date" value="{{old('sale_date')}}" class="@error('sale_date') is-invalid @enderror">
    @error('sale_date')
    <div>{{$message}}</div>
    @enderror
    <br>
    <label for="type">Tipologia</label>
    <input type="text" name="type" id="type" value="{{old('type')}}" class="@error('type') is-invalid @enderror">
    @error('type')
    <div>{{$message}}</div>
    @enderror
    <br>


    <button type="submit">Inserisci</button>

</form>





@endsection