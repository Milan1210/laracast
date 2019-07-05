@extends('layouts.master')

@section('table')

<table class="table table-striped">
    <tr>
        <th>Title</th>
        <th>Content</th>
    </tr>
    @foreach ($tasks as $task)
        <tr>
        <td>{{$task->title}}</td>
        <td>{{$task->content}}</td>
        </tr>    
    @endforeach
</table>

@endsection


