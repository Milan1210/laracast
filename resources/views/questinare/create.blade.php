@extends('layouts.master')

@section('content')
    <form method="POST" action="/questinare/store">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Tasks</label>
            <select name="task" class="form-control">
                @foreach ($tasks as $task)
                    <option value="{{$task->id}}">{{$task->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <input type="submit" value="Send" class="btn btn-success">
    </form>
    @include('layouts.errors')
@endsection