<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('tasks.index')->with('tasks',$tasks);
    }

    public function create(){
        return view('tasks.create');
    }

    public function coment($idTask)
    {
         return view('tasks.coment')->with('id',$idTask);
    }

    public function store(Request $request){
        // Task::create(
        //     [
        //         'title'=>$request->title,
        //         'content'=>$request->content,
        //     ]
        // );

        $tasks = new Task;
        $tasks->title = $request->title;
        $tasks->content = $request->content;
        $tasks->save();
        
        return redirect(route('tasks'));
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit')->with('task',$task);
    }

    public function update($id)
    {
        Task::find($id)->update(request()->all());
        // $task = Task::find($id);
        return redirect()->route('tasks');
        
    }

    public function show(Task $task){
        
        return view('tasks.show',compact('task'));
    }

    public function test($task){
        // return view('tasks.show')->with('tasks',$tasks);
         echo $task;
    }
}
