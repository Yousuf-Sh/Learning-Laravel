@extends('layouts.app')
@section('title','List of available tasks')

@section('content')
        @forelse ($tasks as $task )
            <div><a href="{{ route('tasks.show',['id'=>$task->id])}}">{{$task->title}}</a></div>
        @empty
            <li>List is Empty</li> 
        @endforelse    
@endsection