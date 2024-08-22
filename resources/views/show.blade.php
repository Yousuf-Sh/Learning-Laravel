@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <p>{{$task->description}}</p>
    @isset($task->long_description)
        <p>{{$task->long_description}}</p>
    @endisset
    <p>{{$task->updated_at}}</p>
    <p>{{$task->created_at}}</p>
    
    <div>
        <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger mb-3">Delete</button>
        </form>
      </div>
      
@endsection