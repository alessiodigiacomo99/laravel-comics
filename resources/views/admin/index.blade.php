@extends('layouts.app')

@section('header')
@include('partials.header')
@endsection

@section('content')
<div id="admin" class="container">
    Scegli cosa modificare:
    <ul>
        <li><a href="{{route('admin.comics.index')}}">Comics Must reads</a></li>
        <li><a href="#">Altro</a></li>
        <li><a href="#">Altro</a></li>
    </ul>
</div>
@endsection

@section('footer')
@include('partials.footer')
@endsection