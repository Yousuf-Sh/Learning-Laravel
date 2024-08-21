<?php
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class Task
{
  public function __construct(
    public int $id,
    public string $title,
    public string $description,
    public ?string $long_description,
    public bool $completed,
    public string $created_at,
    public string $updated_at
  ) {
  }
}

$tasks = [
  new Task(
    1,
    'Buy groceries',
    'Task 1 description',
    'Task 1 long description',
    false,
    '2023-03-01 12:00:00',
    '2023-03-01 12:00:00'
  ),
  new Task(
    2,
    'Sell old stuff',
    'Task 2 description',
    null,
    false,
    '2023-03-02 12:00:00',
    '2023-03-02 12:00:00'
  ),
  new Task(
    3,
    'Learn programming',
    'Task 3 description',
    'Task 3 long description',
    true,
    '2023-03-03 12:00:00',
    '2023-03-03 12:00:00'
  ),
  new Task(
    4,
    'Take dogs for a walk',
    'Task 4 description',
    null,
    false,
    '2023-03-04 12:00:00',
    '2023-03-04 12:00:00'
  ),
];

Route::get('/tasks', function () use($tasks) {
    return view('index',[
        'tasks'=> \App\Models\Task::latest()->get()
    ]);    
})->name('tasks.index');

Route::view('/tasks/create', 'create');

Route::get('/tasks/{id}', function($id) {
    
    return view('show', ['task'=> \App\Models\Task::findOrFail($id)]);
})->name('tasks.show');


Route::get('/', function () {
    return redirect()->route('tasks.index');  
});

Route::post('/tasks', function (Request $request) {
    dd($request->all());
})->name('tasks.store');

// Route::get('/hello',function(){
//     return "Hello World";
// })->name('helloW');
// Route::get('/greet/{id}', function($id){
//     return 'Hello, ' . $id . ' User!';
// });
// Route::get('/greet', function(){
//     return redirect() ->route('Welcome');
// });
// Route::fallback(function(){
//     return redirect()->route('helloW');
// });