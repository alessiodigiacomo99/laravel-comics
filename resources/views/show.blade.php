@extends('layouts.app')
@section('header')
@include('partials.header')
@endsection
@section('content')
<div class="jumbo" >
    <img src="{{ asset('storage/' . $comic->cover) }}" alt="">
    <div class="container">
        <img src="{{ asset('storage/' . $comic->cover) }}" alt="">
    </div>
    <div class="blue">
    
    </div>
</div>
<div>
    Titolo: {{$comic->title}}
    Prezzo: {{$comic->price}}$
    @if($comic->available == 'on')
    <h4>available</h4>
    @else
    <h4>not available</h4>
    @endif
    Descrizione: {{$comic->description}}
</div>
@include('partials.main.buy')
@endsection
@section('footer')
@include('partials.footer')
@endsection