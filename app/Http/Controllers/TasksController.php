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
        
        return redirect('/tasks/create');
    }

    public function show(Task $tasks){
        return view('tasks.show')->with('tasks',$tasks);
    }
}
