<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostsResource;
use App\Posts;
class PostsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all the posts inform of an api as a collection
        $posts = Posts::take(4)->paginate(2);
        return PostsResource::collection($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //post a new post
        $post = $request->isMethod('PUT')? Posts::findOrFail($request->id) : new Posts;
        $post->id = $request->input('id');
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $user = auth()->user()->id;
        $post->user_id = $request->input('user_id');
        if($post->Save()){
            return new PostsResource($post);
        }
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get a single post usign its'id
        $post = Posts::findOrFail($id);
        return new PostsResource($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete a single post
        $post = Posts::findOrFail($id);
        if($post->delete()){
            return new PostsResource($post);
        }
    }
}
