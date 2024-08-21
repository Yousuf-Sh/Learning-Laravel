<?php
use \App\Models\Task;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Descriptor\Descriptor;





Route::get('/tasks', function () {
    return view('index',[
        'tasks'=> Task::latest()->get()
    ]);    
})->name('tasks.index');


Route::view('/tasks/create', 'create');


Route::get('/tasks/{id}/edit', function($id) {
    
    return view('edit', [
      'task'=> Task::findOrFail($id)
    ]);
})->name('tasks.show');


Route::get('/tasks/{id}', function($id) {
    
    return view('show', [
      'task'=> Task::findOrFail($id)
    ]);
})->name('tasks.show');


Route::get('/', function () {
    return redirect()->route('tasks.index');  
});

Route::post('/tasks', function (Request $request) {
  //dd($request->all());
  
  $data = $request->validate([
      'title' => 'required|string|max:255',
      'description' =>  'required',
      'long_description' => 'required'
    ]);

    $task = new Task;
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id])->with('success','Task created successfully!');

  })  ->name('tasks.store');

  Route::put('/tasks/{id}', function ($id,Request $request) {
  //dd($request->all());
  
  $data = $request->validate([
      'title' => 'required|string|max:255',
      'description' =>  'required',
      'long_description' => 'required'
    ]);

    $task = Task::findOrFail($id);
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id])->with('success','Task updated successfully!');

  })  ->name('tasks.update');

  