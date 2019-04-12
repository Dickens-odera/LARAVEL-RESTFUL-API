@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
           <h4>{{$post->title}}</h4>
           <h3>{{$post->decription}}</h3>

           <small>Written on {{$post->created_at}} by {{ $post->user->name}}</small>
           <a href="/posts" class="btn btn-danger">Back</a>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection