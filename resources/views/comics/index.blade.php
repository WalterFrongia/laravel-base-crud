@extends('layouts.main')

@section('comics')
    @foreach($comics as $comic)
        <img src="{{$comic->url_img}}" alt="{{$comic->name}}">
        <h3>{{$comic->title}}</h3>
    @endforeach
@endsection