@extends('layouts.master')

@section('content')
    <h1>Create new form</h1>
    <form method="post" action="/posts">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Content</label>
         <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
        </div>
        
        <div class="checkbox">
          <label>
            <input type="checkbox"> Check me out
          </label>
        </div>

        <button type="submit" class="btn btn-info">Publish</button>
      </form>

      @include('layouts.errors')
      
@endsection