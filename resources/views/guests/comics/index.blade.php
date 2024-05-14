@extends('layouts.app')

@section('content')


<h1>Nuovo sito di comics!</h1>
<h3>prova</h3>


<div class="row">
    @forelse ($comics as $comic)

    <div class="card">
        <div class="mask">
            <img src="{{$comic->thumb}}" alt="">
        </div>
        <div class="text">
            <h2>{{$comic->title}}</h2>
            <em>{{$comic->sale_date}}</em>
            
            <span>{{$comic->price}}$</span>
        </div>
    </div>




    @empty

    <p>No comics here</p>

    @endforelse
</div>




@endsection



<style type="text/css">
    .row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -1rem;
        & .card {

            width: calc((100%/12 * 3) - 2rem );
            display: flex;
            flex-direction: column;
            background-color: var(--bgcard-lightviolet);
            padding: 1rem;
            margin: 1rem;
            border: 2px solid var(--hover-bgheader-violet);
            border-radius: 20px;


            & .mask {

                width: 200px;
                max-height: 300px;
                overflow: hidden;
                align-self: center;
                & img {
                    width: 100%;
                }

            }

            & .text {
                display: flex;
                flex-direction: column;
                gap: 8px;
            }
        }


    }
</style>