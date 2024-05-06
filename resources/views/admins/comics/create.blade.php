@extends('layouts.app')

@section('content')



<form action="{{ route('comics.store') }}" method="post">
@csrf

<label for="title">Titolo</label>
<input type="text" name="title" id="title">
<br>
<label for="description">Descrizione</label>
<textarea type="text" name="description" id="description" rows="6" cols="100"></textarea>
<br>
<label for="thumb">Link img</label>
<input type="text" name="thumb" id="thumb" size="100">
<br>
<label for="price">Prezzo</label>
<input type="number" name="price" id="price" step=".01">
<br>
<label for="series">Serie</label>
<input type="text" name="series" id="series">
<br>
<label for="sale_date">Data uscita</label>
<input type="date" name="sale_date" id="sale_date">
<br>
<label for="type">Tipologia</label>
<input type="text" name="type" id="type">
<br>


<button type="submit">Inserisci</button>

</form>





@endsection