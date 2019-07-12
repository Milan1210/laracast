@extends('layouts.master')

@section('content')
<h1>{{$task->title}}</h1>
    <h3>{{$task->content}}</h3>
    <hr>
    @foreach ($task->coment as $c)
        <small>{{$c['comment']}}</small><br>
    @endforeach
@endsection