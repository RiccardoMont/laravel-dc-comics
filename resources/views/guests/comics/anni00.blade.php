@extends('layouts.app')

@section('content')

<h3>anni 00</h3>
@forelse ($comics as $comic)

<p>{{$comic->title}}</p>
<p>{{$comic->sale_date}}</p>

@empty

<p>No comics here</p>

@endforelse


@endsection