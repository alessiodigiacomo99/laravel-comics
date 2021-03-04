@extends('layouts.app')
@section('content')
<form  class="container" action="{{route('admin.comics.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="" value="{{$comic->title}}">
        </div>

        <div>
            <textarea name="description" id="" cols="30" rows="10">{{$comic->description}}</textarea>
        </div>
        
        <div class="form-group">
            <label for="cover">Cover</label>
            <input type="file" class="form-control-file" name="cover" id="" placeholder="Add a cover image" value="{{ asset('storage/' . $comic->cover) }}">
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control-number" name="price" id="" value="{{$comic->price}}">
        </div>
        
        <div class="form-group">
            <label for="available">Available:</label>
            @if($comic->available == 'on')
            <input type="checkbox" class="form-control-checkbix" name="available" id="" checked>
            @else
            <input type="checkbox" class="form-control-checkbix" name="available" id="">
            @endif
        </div>

        <button type="submit">Edit Comic</button>
    </form>
@endsection