@extends('layouts.master')

@section('content')
    <form action="{{route('comment.store',$id)}}" method="post">
        @csrf
        <input type="text" name="comment" id="" placeholder="Comment for post ID = {{$id}}" class="form-control">
        <input type="submit" value="Comment" class="btn btn-info">
    </form>
@endsection