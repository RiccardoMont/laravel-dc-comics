@extends('layouts.app')

@section('content')

<h1>Fumetti del 1900</h1>
<div class="row">
@include('guests.comics.comicList')
</div>

@endsection