@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="NewPostsController@store" method="post">
                @csrf
                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text"  name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description"  class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" style="width: 100%" value="Submit">
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection