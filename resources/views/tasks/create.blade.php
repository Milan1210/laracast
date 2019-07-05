@extends('layouts.master')

@section('content')
    <form action="/tasks/store" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="title" class="form-control">
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <br>
        <input type="submit" name="" id="" value="Create" class="btn btn-success">
    </form>
@endsection