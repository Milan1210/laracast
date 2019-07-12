@extends('layouts.master')

@section('content')
    <h1>{{$questinare->title}}</h1>
    <small>{{$questinare->content}}</small><br>
    <small>{{$questinare->task['title']}}</small>
@endsection