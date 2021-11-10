@extends('layouts.main')

@section('comics')

<form action="{{route('comic.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')

        <!-- name è importante perchè prende il valore dell'input e associa alla chiave del name -->

        <input type="text" value="{{$comic->title}}" name="title" > 

        <input type="text" value="{{$comic->description}}" name="description">

        <input type="text" value="{{$comic->url_img}}" name="url_img">

        <input type="text" value="{{$comic->price}}" name="price">

        <input type="text" value="{{$comic->sale_date}}" name="sale_date">

        <input type="text" value="{{$comic->type}}" name="type">

        <input type="submit" value="EDIT">

    </form>

@endsection