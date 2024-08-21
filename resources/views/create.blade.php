@extends('layouts.app') 

@section('styles')
<style>
    .error-message{
        color: red;
        font-size: 0.8rem;
    }
</style>
@endsection
@section('title','Add Tasks')

@section('content') 
<form method="POST" action="{{route('tasks.store')}}" >
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="text" value="{{old('title')}}">
        
        @error('title')
        <p class="error-message">{{$message}}</p>            
        @enderror
    </div>

    <div>
        <label for="title">Description</label>
        <textarea name="description" id="description]" rows="5">{{old('description')}}</textarea>
        
        @error('description')
        <p class="error-message">{{$message}}</p>            
        @enderror
    </div>

    <div>
        <label for="title">Long Description</label>
        <textarea name="long_description" id="long_description]" rows="10">{{old('long_description')}}</textarea>

        @error('long_description')
        <p class="error-message">{{$message}}</p>            
        @enderror
    </div>

    <div>
        <button type="submit">ADD +</button>
    </div>
</form>

@endsection