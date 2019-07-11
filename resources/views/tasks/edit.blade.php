@extends('layouts.master')

@section('content')
    <form action="{{route('task.update',$task->id)}}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$task->title}}" class="form-control">
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$task->content}}</textarea>
        </div>
        <br>
        <input type="submit" name="" id="" value="Update" class="btn btn-success">
    </form>
@endsection