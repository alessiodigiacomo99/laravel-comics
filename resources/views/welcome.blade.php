@extends('layouts.app')
@section('header')
@include('partials.header')
@endsection

@section('content')

<div class="card_wrapper d-flex">
    <div class="series">comics & graphic novel</div>
    <div class="card">
        <img src="{{asset('img/fumetto_batman.jpg')}}" alt="">
        <h6>batman #104</h6>
        <h4>Avalable now</h4>
    </div>
    <div class="card">
        <img src="{{asset('img/fumetto_infinite_frontier.jpg')}}" alt="">
        <h6>batman #104</h6>
        <h4>Avalable now</h4>
    </div>
    <div class="card">
        <img src="{{asset('img/fumetto_suicide_squad.jpg')}}" alt="">
        <h6>batman #104</h6>
        <h4>Avalable now</h4>
    </div>
    <div class="card">
        <img src="{{asset('img/fumetto_supergirl.jpg')}}" alt="">
        <h6>batman #104</h6>
        <h4>Avalable now</h4>
    </div>
    <div class="card">
        <img src="{{asset('img/fumetto_swap_thing.jpg')}}" alt="">
        <h6>batman #104</h6>
        <h4>Avalable now</h4>
    </div>
</div>
<!-- /card_wrapper -->

<section class="must_reads container">
    <h2>must reads</h2>
    <div class="card_wrapper">
    @if(count($comics) != 0)
    @foreach($comics as $comic)
        <a href="{{ route('comics.show', ['comic' => $comic->id ]) }}">
            <div class="card">
                <img src="{{ asset('storage/' . $comic->cover) }}" alt="">
                <h6>{{ $comic->title}}</h6>
                @if( $comic->available == 'on' )
                <h4>Avalable now</h4>
                @else
                <h4>Not Avalable now</h4>
                @endif
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, consequuntur vel aliquam similique aut earum.</p>
            </div>
        </a>
    @endforeach
    @endif
    </div>
    <!-- /.card_wrapper -->
</section>
<!-- /must_reads -->

<section class="current_series">
    <div class="series">current series</div>
    <div class="card_wrapper d-flex">
        <div class="card">
            <img src="{{asset('img/fumetto_batman.jpg')}}" alt="">
            <h6>Avalable now</h6>
        </div>
        <div class="card">
            <img src="{{asset('img/fumetto_infinite_frontier.jpg')}}" alt="">
            <h6>Avalable now</h6>
        </div>
        <div class="card">
            <img src="{{asset('img/fumetto_suicide_squad.jpg')}}" alt="">
            <h6>Avalable now</h6>
        </div>
        <div class="card">
            <img src="{{asset('img/fumetto_supergirl.jpg')}}" alt="">
            <h6>Avalable now</h6>
        </div>
        <div class="card">
            <img src="{{asset('img/fumetto_swap_thing.jpg')}}" alt="">
            <h6>Avalable now</h6>
        </div>
        <div class="card">
            <img src="{{asset('img/fumetto_batman.jpg')}}" alt="">
            <h6>Avalable now</h6>
        </div>
        <div class="card">
            <img src="{{asset('img/fumetto_infinite_frontier.jpg')}}" alt="">
            <h6>Avalable now</h6>
        </div>
        <div class="card">
            <img src="{{asset('img/fumetto_suicide_squad.jpg')}}" alt="">
            <h6>Avalable now</h6>
        </div>
        <div class="card">
            <img src="{{asset('img/fumetto_supergirl.jpg')}}" alt="">
            <h6>Avalable now</h6>
        </div>
        <div class="card">
            <img src="{{asset('img/fumetto_swap_thing.jpg')}}" alt="">
            <h6>Avalable now</h6>
        </div>
        
    </div>
</section>
<!-- /.current_series -->
@include('partials.main.buy')

@endsection

@section('footer')
@include('partials.footer')

@endsection