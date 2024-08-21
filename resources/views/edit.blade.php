@extends('layouts.app') 

@section('styles')
<style>
    .error-message{
        color: red;
        font-size: 0.8rem;
    }
</style>
@endsection
@section('title','Update Tasks')

@section('content') 
<form method="POST" action="{{route('tasks.update',['task'=>$task->id])}}" >
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="text" value="{{$task->title}}">
        
        @error('title')
        <p class="error-message">{{$message}}</p>            
        @enderror
    </div>

    <div>
        <label for="title">Description</label>
        <textarea name="description" id="description]" rows="5">{{$task->description}}</textarea>
        
        @error('description')
        <p class="error-message">{{$message}}</p>            
        @enderror
    </div>

    <div>
        <label for="title">Long Description</label>
        <textarea name="long_description" id="long_description]" rows="10">{{$task->long_description}}</textarea>

        @error('long_description')
        <p class="error-message">{{$message}}</p>            
        @enderror
    </div>

    <div>
        <button type="submit">EDIT</button>
    </div>
</form>

@endsection