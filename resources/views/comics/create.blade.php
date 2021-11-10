@extends('layouts.main')

@section('comics')

    <form action="{{ route('comic.store')}}" method="POST">
        @csrf

        <input type="text" placeholder="inserisci il titolo" name="title">

        <input type="text" placeholder="inserisci una descrizione" name="description">

        <input type="text" placeholder="inserisci link url. img." name="url_img">

        <input type="text" placeholder="inserisci il prezzo" name="price">

        <input type="text" placeholder="inserisci data di uscita" name="sale_date">

        <input type="text" placeholder="inserisci genere" name="type">

        <input type="submit" value="CREATE">

    </form>

@endsection