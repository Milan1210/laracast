@extends('layouts.master')

@section('content')
    <form action="{{route('addcoment',$id)}}" method="post">
    @csrf
    <label for="coment">Coment</label>
    <input type="text" name="coment" class="form-control" id="coment">
    <input type="submit" value="Add Coment">
    </form>
@endsection