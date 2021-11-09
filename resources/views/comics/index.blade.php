@extends('layouts.main')

@section('comics')
    <div id="index-wrapper">
        <div id="comics-container">
            @foreach($comics as $comic)
                <div id="comic">
                    <img src="{{$comic->url_img}}" alt="{{$comic->name}}">
                    <h3>{{$comic->title}}</h3>
                </div>
            @endforeach
        </div>
    </div>
@endsection