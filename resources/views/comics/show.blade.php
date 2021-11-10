@extends('layouts.main')

@section('comics')

    <div id="show-wrapper">

        <div id="comic-container">
            <div id="img-container">
                <img src="{{$comic->url_img}}" alt="">
            </div>
            <div id="info-container">
                <h3>{{$comic->title}}</h3>
                <p>DESCRIPTION: {{$comic->description}}</p>
                <p>PRICE: {{$comic->price}}</p>
                <p>DATE: {{$comic->sale_date}}</p>
            </div>
        </div>

        <a href="{{ route('comic.edit' ,  $comic->id)}}"><button>EDIT COMIC</button></a>
    </div>

@endsection