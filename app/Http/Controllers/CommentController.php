<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function create($task_id)
    {
        return view('taskset.coments',compact('task_id'));
    }

    public function store(Request $request,$id)
    {
        Comment::create([
            'body'=>$request->title,
            'taskset_id'=>$id,
        ]);

    }
}
