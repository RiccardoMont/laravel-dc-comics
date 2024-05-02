@extends('layouts.app')

@section('content')


<table>
    <thead>
        <tr>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Thumb</th>
            <th>Prezzo</th>
            <th>Serie</th>
            <th>Data uscita</th>
            <th>Tipologia</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($comics as $comic)

        <tr>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td><img style="width: 100px;" src="{{$comic->thumb}}" alt=""></td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
        </tr>

        @empty
        <tr>
            <td>Nada</td>
        </tr>


        @endforelse
    </tbody>
</table>



@endsection