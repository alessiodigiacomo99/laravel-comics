@extends('layouts.app')
@section('content')
<form  class="container" action="{{route('admin.comics.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="">
        </div>

        <div>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        
        <div class="form-group">
            <label for="cover">Cover</label>
            <input type="file" class="form-control-file" name="cover" id="" placeholder="Add a cover image">
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control-number" name="price" id="">
        </div>
        
        <div class="form-group">
            <label for="available">Available:</label>
            <input type="checkbox" class="form-control-checkbix" name="available" id="">
        </div>

        <div class="form-group">
            <label for="writers">writers</label>
            <select name="writers[]" id="writers" multiple>
                @foreach($writers as $writer)
                    <option value="{{ $writer->id }}">{{ $writer->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Add a Comic</button>
    </form>
@endsection