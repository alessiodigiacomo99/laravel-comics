@extends('layouts.app')
@section('header')
<nav id="navbar-first" class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="first d-flex">
        <ul class="d-flex">
            <li>
                <img src="{{ asset('img/logo.png')}}" alt="">
            </li>
            <li>
                <img src="{{ asset('img/logo.png')}}" alt="">
            </li>
            <li>
                <img src="{{ asset('img/logo.png')}}" alt="">
            </li>
            <li>
                <img src="{{ asset('img/logo.png')}}" alt="">
            </li>
            <li>
                <img src="{{ asset('img/logo.png')}}" alt="">
            </li>
        </ul>
    </div>
    
</nav>
<!-- /first nav -->
<nav id="navbar-second">
    <div class="second d-flex">
        <div class="logo">
            <img src="{{ asset('img/logo.png')}}" alt="">
        </div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="#">characters</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">comics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">tv</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">games</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">news</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">shop</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#tab2Id">Action</a>
                    <a class="dropdown-item" href="#tab3Id">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#tab4Id">Action</a>
                </div>
            </li>
        </ul>
        <!-- Nav tabs -->
        
        <div class="search">
            Search
        </div>
        <!-- /.search -->
    </div>
</nav>
<!-- /second nav -->
@endsection

@section('main')

@endsection