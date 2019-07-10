@extends('layouts.master')

@section('table')
  <table class="table table-striped">
    <tr>
      <th>Title</th>
      <th>COntent</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
      <td><a href="post/{{$post->id}}">{{$post->title}}</a></td>
      <td>{{$post->content}}</td>
      <td><a href="{{route('posts.edit',$post->id)}}" class="btn btn-success">Edit</a></td>
      <td><a href="{{route('posts.delete',$post->id)}}" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
  </table>
  <a href="{{route('post.create')}}" class="btn btn-info">Create</a>
@endsection