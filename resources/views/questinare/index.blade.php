@extends('layouts.master')

@section('table')
    <table class="table table-striped">
        <tr>
            <th>Title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($questinare as $q)
        <tr>
            <td><a href="{{route('questinare.show',$q->id)}}">{{$q->title}}</a></td>
            <td><a href="{{route('questinare.edit',$q->id)}}" class="btn btn-success">Edit</a></td>
            <td><a href="{{route('questinare.delete',$q->id)}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </table>
<a href="{{Route('questinare.create')}}" class="btn btn-info">Create questinare</a>
@endsection