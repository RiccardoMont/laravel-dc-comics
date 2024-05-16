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
<div class="empty-case">
    <h3>No comics here</h3>
</div>
@endforelse


<style type="text/css">

    .empty-case{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        text-transform: uppercase;
    }

</style>