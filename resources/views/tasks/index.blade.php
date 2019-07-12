@extends('layouts.master')

@section('table')

<table class="table table-striped">
    <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Comments</th>
    </tr>
    @foreach ($tasks as $task)
        <tr>
        <td><a href="{{route('task.show',$task->id)}}">{{$task->title}}</a></td>
        <td>{{$task->content}}</td>
        <td><a href="{{route('task.edit',$task->id)}}" class="btn btn-success">Edit</a></td>
        <td><a href="{{route('task.create')}}" class="btn btn-danger">Delete</a></td>
        <td><a href="{{route('task.coment',$task->id)}}" class="btn btn-primary">Coment</a></td>
        </tr>    
    @endforeach
</table>
<a href="{{route('task.create')}}" class="btn btn-primary">Create tasks</a>

@endsection
