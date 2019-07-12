@extends('layouts.master')

@section('content')
    <form method="POST" action="{{route('questinare.update',$questinare->id)}}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$questinare->title}}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$questinare->content}}</textarea>
        </div>
        <select name="task" id="" class="form-control">
            @foreach ($tasks as $task)
                <option value="{{$task->id}}" selected>{{$select->title}}</option>
            @endforeach
        </select>
        <input type="submit" value="Send" class="btn btn-success">
    </form>
    @include('layouts.errors')
@endsection