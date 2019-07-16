@extends('layouts.master')

@section('content')
    <h1>Create Tasksket</h1>
@endsection

@section('table')
    <form action="{{route('taskset.update',$taskset->id)}}" method="post">
        @csrf
        <input type="text" name="title" class="form-control" value="{{$taskset->title}}">
        <input type="submit" value="Update" class="btn btn-primary">
    </form>
@endsection