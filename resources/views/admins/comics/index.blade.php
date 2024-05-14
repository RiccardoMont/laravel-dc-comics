@extends('layouts.admins')

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
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($comics as $comic)
        <tr>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description ?? 'N/A'}}</td>
            <td><a href="{{route('comics.show', $comic)}}"><img style="width: 100px;" src="{{$comic->thumb}}" alt=""></a></td>
            <td>{{$comic->price}}$</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td>
                <div>
                    <a href="{{route('comics.edit', $comic)}}"><i class="fa-solid fa-pencil"></i></a>
                    <i class="fa-solid fa-trash" onclick="document.getElementById('{{$comic->id}}').style.display='block'"></i>
                    <div id="{{$comic->id}}" class="modal">
                        <div class="modal-content">
                            <span onclick="document.getElementById('{{$comic->id}}').style.display= 'none'" class="close">&times;</span>
                            <div class="modal-texts">
                                <h2>Procedere con la cancellazione definitiva?</h2>
                                <p>Vuoi procedere alla cancellazione di <strong>{{$comic->title}}</strong></p>
                            </div>
                            <div class="modal-buttons">
                                <form action="{{route('comics.destroy', $comic)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="red button">Cancella</button>
                                </form>
                                <button class="grey button" onclick="document.getElementById('{{$comic->id}}').style.display= 'none'">Annulla</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td>No content here</td>
        </tr>
        @endforelse

    </tbody>
</table>
<div class="add-comic">
    <a href="{{route('comics.create')}}">
        <button class="purple-button">+</button>
    </a>
</div>






@endsection

<style type="text/css">
    table {
        margin-top: 2rem;
        border-collapse: collapse;

        & tr {
            border-bottom: 1px solid var(--bgheader-violet);

        }

        & th {
            border-bottom: 10px solid var(--bgheader-violet);
        }

        & td {
            padding: 1.5rem 1rem;

            & a {
                text-decoration: none;
                color: black;

                & i{
                    color: var(--bgheader-violet);
                }

                & i:hover{
                    color: var(--text-black);
                }
            }


            & i {
                margin-top: 10px;
                font-size: 1.5em;
                cursor: pointer;
                color: var(--button-red);
            }

            & i:hover {
                color: var(--button-scarlet);
            }

        }

        


    }

    .add-comic {
        width: 100%;
        display: flex;
        justify-content: center;
        padding: 1rem 0;
        margin-bottom: 2rem;
        border-bottom: 1px solid var(--bgheader-violet);

        & button {
            font-size: 32px;
            border-radius: 25px;
            cursor: pointer;
        }
    }
</style>