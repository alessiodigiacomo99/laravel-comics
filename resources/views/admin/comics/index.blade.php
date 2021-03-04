@extends('layouts.app')
@section('header')
@include('partials.header')
@endsection
@section('content')
<div class="admin_comics">
    <div>
        <a class="btn btn-primary text-capitalize" href="{{route('admin.comics.create')}}">crea nuovi comic</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>COVER</th>
                <th>AVAILABLE</th>
                <th>PRICE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
                <tr>
                    <td scope="row">{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td><img src="{{ asset('storage/' . $comic->cover) }}" alt=""></td>
                    <td>{{ $comic->available }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.comics.show', ['comic' => $comic->id ]) }}"><i class="fas fa-eye fa-lg fa-fw"></i></a>
                        <a class="btn btn-warning" href="{{ route('admin.comics.edit', ['comic' => $comic->id ]) }}"><i class="fas fa-pencil-ruler fa-lg fa-fw"></i></a>
                        <div class="form-group">
                            <form action="{{route('admin.comics.destroy', ['comic' => $comic->id ] )}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt fa-lg fa-fw"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('footer')
@include('partials.footer')
@endsection