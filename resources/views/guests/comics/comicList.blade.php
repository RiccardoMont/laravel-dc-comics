@forelse ($comics as $comic)

<p>{{$comic->title}}</p>
<p>{{$comic->sale_date}}</p>

@empty

<p>No comics here</p>

@endforelse