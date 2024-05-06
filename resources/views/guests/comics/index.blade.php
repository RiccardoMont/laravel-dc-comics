@extends('layouts.app')

@section('content')


<h1>Nuovo sito di comics!</h1>
<h3>prova</h3>


@forelse ($comics as $comic)

<p>{{$comic->title}}</p> <p>{{$comic->sale_date}}</p>


@empty 

<p>No comics here</p>

@endforelse


@endsection