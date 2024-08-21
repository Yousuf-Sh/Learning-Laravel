@extends('layouts.app')

@section('title','Add Tasks')

@section('content')
{{ $errors }}
<form method="POST" action="{{route('tasks.store')}}" >
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="text">
    </div>

    <div>
        <label for="title">Description</label>
        <textarea name="description" id="description]" rows="5"></textarea>
    </div>

    <div>
        <label for="title">Long Description</label>
        <textarea name="long_description" id="long_description]" rows="10"></textarea>
    </div>

    <div>
        <button type="submit">+ ADD</button>
    </div>
</form>

@endsection