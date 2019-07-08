@extends('layouts.master')

@section('table')
  <table class="table table-striped">
    <tr>
      <th>Title</th>
      <th>COntent</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
      <td><a href="post/{{$post->id}}">{{$post->title}}</a></td>
      <td>{{$post->content}}</td>
    </tr>
    @endforeach
  </table>
  <a href="{{route('post.create')}}" class="btn btn-info">Create</a>
@endsection