@extends('layouts.master')

@section('content')
    <h1>Create Tasksket</h1>
@endsection

@section('table')
    <form action="{{route('taskset.store')}}" method="post">
        @csrf
        <input type="text" name="title" placeholder="TItle" class="form-control">
        <input type="submit" value="Press" class="btn btn-primary">
    </form>
@endsection