@extends('layouts.master')

@section('content')
    <h1>Coments</h1>
@endsection

@section('table')
    <form action="{{route('coment.store',$task_id)}}" method="post">
        @csrf
        <input type="text" name="title" placeholder="TItle" class="form-control">
        <input type="submit" value="Press Coment" class="btn btn-primary">
    </form>
@endsection