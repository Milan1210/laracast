@extends('layouts.master')

@section('content')
   <h1>{{$post->title}}</h1> 
   <h3>{{$post->content}}</h3> 
   <small>{{$post->created_at->toFormattedDateString()}}</small>

   @foreach ($post->comments as $coment)
       <article>
       {{$coment->body}}
       </article>
   @endforeach
@endsection