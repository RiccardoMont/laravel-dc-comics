@extends('layouts.app')

@section('content')


<h1>Le uscite degli ultimi anni</h1>


<div class="row">
    @forelse ($comics as $comic)

    <div class="card">
        <div class="mask">
            <img src="{{$comic->thumb}}" alt="">
        </div>
        <div class="text">
            <div class="title">
                <h2>{{$comic->title}}</h2>
            </div>
            <div class="sale_date">
                <em>{{$comic->sale_date}}</em>
            </div>
            <div class="price">
                <span>{{$comic->price}}$</span>
            </div>
        </div>
    </div>




    @empty

    <p>No comics here</p>

    @endforelse
</div>




@endsection



<style type="text/css">
    
</style>