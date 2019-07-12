<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Coment;

class CommentController extends Controller
{
    public function create($id)
    {
        //return $id;
        return view('comment.create')->with('id',$id);
    }

    public function store(Request $request,$id)
    {
        Coment::create(['comment'=>$request->comment,'post_id'=>$id]);
        
        return redirect()->route('post');
    }

    public function addComentTask(Request $request,$idTask)
    {
        Coment::create(['comment'=>$request->coment,'task_id'=>$idTask]);
        
        return redirect()->route('tasks');
    }
   
}
