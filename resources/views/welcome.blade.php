@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="jumbotron text-center">
            <h4 class="jumbotron-header">
                LARAVEL BLOG
        </h4>
                <small>Building a RESTFUL api powered blog with laravel</small><br>
                @if(@!Auth::user())
                     <a href="{{ route('register')}}" class="btn btn-success btn-lg">Get Started</a>
                @else
                    <a href="{{  url('posts')  }}" class="btn btn-primary">Continue</a>
                @endif
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
@endsection