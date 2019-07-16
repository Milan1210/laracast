@extends('layouts.master')

@section('content')
    <h1>This is index page</h1>
@endsection

@section('table')
    <table class="table table-striped">
        <tr>
            <th>Title</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Comments</th>
        </tr>
        @foreach ($tasksets as $set)
        <tr>
            <td><a href="{{route('taskset.show',$set->id)}}">{{$set->title}}</a></td>
            <td><a href="{{route('taskset.edit',$set->id)}}" class="btn btn-warning">Edit</a></td>
            <td><a href="{{route('taskset.destroy',$set->id)}}" class="btn btn-danger">Delete</a></td>
            <td><a href="{{route('coment.create',$set->id)}}" class="btn btn-success">Coment</a></td>
        </tr>
        @endforeach
    </table>
    <a href="{{route('taskset.create')}}" class="btn btn-primary">Create Taskset</a>
@endsection