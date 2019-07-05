@extends('layouts.master')

@section('table')
  <table class="table table-striped">
    <tr>
      <th>Title</th>
      <th>COntent</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
      <td>{{$post->title}}</td>
      <td>{{$post->content}}</td>
    </tr>
    @endforeach
  </table>
@endsection