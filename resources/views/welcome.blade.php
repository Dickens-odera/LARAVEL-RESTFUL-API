@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="jumbotron text-center">
            <h4 class="jumbtron-header">
                LARAVEL BLOG
        </h4>
                <small>Building a RESTFUL api powered blog with laravel</small><br>
            <a href="{{ route('register')}}" class="btn btn-success btn-lg">Get Started</a>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
@endsection