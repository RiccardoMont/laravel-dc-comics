@extends('layouts.app')

@section('content')


<h1>{{$comic->title}}</h1>
<p>{{$comic->description}}</p>
<img style="width: 100px;" src="{{$comic->thumb}}" alt="">
<span>{{$comic->price}}</span>
<p>{{$comic->series}}</p>
<em>{{$comic->sale_date}}</em>
<p>{{$comic->type}}</p>

@endsection