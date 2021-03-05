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
<div class="container info">
    <h2>{{$comic->title}}</h2>
    <div class="d-flex">
       <div> U.S. Price: <span>{{$comic->price}}$</span></div>
        @if($comic->available == 'on')
        <h4>available</h4>
        @else
        <h4>not available</h4>
        @endif
    </div>
    <div class="descrizione">
    {{$comic->description}}
    </div>
</div>
<div class="specifiche">
    <div class="container d-flex">
        <div>
            <h2>Talent</h2>
            <ul>
                <li>
                    <span>Written by:</span>
                </li>
            </ul>
        </div>
        <div>
            <h2>Specs</h2>
            <ul>
                
                <li>
                    <span>Title:</span> {{$comic->title}}
                </li>
                <li>
                    <span>U.S. Price:</span> {{$comic->price}}
                </li>
                <li>
                    <span>Available:</span>
                    @if($comic->available == 'on')
                    Available
                    @else
                    Not Available
                    @endif
                </li>
            </ul>
        </div>
    </div>
</div>
@include('partials.main.buy')
@endsection
@section('footer')
@include('partials.footer')
@endsection
