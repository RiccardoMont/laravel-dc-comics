@extends('layouts.app')

@section('content')

<h3>Fumetti del 1900</h3>
@forelse ($comics as $comic)

<p>{{$comic->title}}</p>
<p>{{$comic->sale_date}}</p>

@empty

<p>No comics here</p>

@endforelse


@endsection