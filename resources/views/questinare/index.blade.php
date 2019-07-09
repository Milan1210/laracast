@extends('layouts.master')

@section('table')
    <table class="table table-striped">
        <tr>
            <th>Title</th>
            <th>Content</th>
        </tr>
        @foreach ($questinare as $q)
        <tr>
            <td><a href="{{route('questinare.show',$q->id)}}">{{$q->title}}</a></td>
            <td>{{$q->content}}</td>
        </tr>
        @endforeach
    </table>
<a href="{{Route('questinare.create')}}" class="btn btn-info">Create questinare</a>
@endsection