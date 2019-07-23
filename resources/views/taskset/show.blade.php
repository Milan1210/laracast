@extends('layouts.master')

@section('content')
    <h1>{{$taskset->title}}</h1>
    @foreach ($taskset->coment as $com)
        {{$com->body}}<br>
    @endforeach
@endsection

@section('table')
   
@endsection