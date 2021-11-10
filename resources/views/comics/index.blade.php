@extends('layouts.main')

@section('comics')
    <div id="index-wrapper">
        <div id="comics-container">
            @foreach($comics as $comic)
                <div id="comic">
                    <img src="{{$comic->url_img}}" alt="{{$comic->name}}">
                    <a href="{{ route('comic.show' , $comic->id)}}">{{$comic->title}}</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection