<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\individualDelegates;
use App\delegations;
use App\delegationsDelegates;

class PressController extends BaseController {
 
    // /**
    //  * Post Repository
    //  *
    //  * @var Post
    //  */
    // protected $post;
 
    // public function __construct(Post $post)
    // {
    //     $this-&gt;post = $post;
    // }
 
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return Response
    //  */
    // public function index()
    // {
    //     $posts = $this-&gt;post-&gt;all();
 
    //     return View::make('posts.index', compact('posts'));
    // }
 
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return Response
    //  */
    // public function create()
    // {
    //     return View::make('posts.create');
    // }
 
    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @return Response
    //  */
    // public function store()
    // {
    //     $input = Input::all();
    //     $validation = Validator::make($input, Post::$rules);
 
    //     if ($validation-&gt;passes())
    //     {
    //         $this-&gt;post-&gt;create($input);
    //         return Response::json(array('success' =&gt; true, 'errors' =&gt; '', 'message' =&gt; 'Post created successfully.'));
    //     }
    //     return Response::json(array('success' =&gt; false, 'errors' =&gt; $validation, 'message' =&gt; 'All fields are required.'));
    // }
 
    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
    // public function show($id)
    // {
    //     $post = $this-&gt;post-&gt;findOrFail($id);
 
    //     return View::make('posts.show', compact('post'));
    // }
 
    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
    // public function edit($id)
    // {
    //     $post = $this-&gt;post-&gt;find($id);
 
    //     if (is_null($post))
    //     {
    //         return Redirect::route('posts.index');
    //     }
 
    //     return View::make('posts.edit', compact('post'));
    // }
 
    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
    // public function update($id)
    // {
    //     $input = array_except(Input::all(), '_method');
    //     $validation = Validator::make($input, Post::$rules);
 
    //     if ($validation-&gt;passes())
    //     {
    //         $post = Post::find($id);
    //         $post-&gt;update($input);
 
    //         return Response::json(array('success' =&gt; true, 'errors' =&gt; '', 'message' =&gt; 'Post updated successfully.'));
    //     }
 
    //     return Response::json(array('success' =&gt; false, 'errors' =&gt; $validation, 'message' =&gt; 'All fields are required.'));
    // }
 
    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
    // public function destroy($id)
    // {
    //     $this-&gt;post-&gt;find($id)-&gt;delete();
 
    //     return Redirect::route('posts.index');
    // }
 
    // public function upload()
    // {
    //     $file = Input::file('file');
    //     $input = array('image' =&gt; $file);
    //     $rules = array(
    //         'image' =&gt; 'image'
    //     );
    //     $validator = Validator::make($input, $rules);
    //     if ( $validator-&gt;fails()) {
    //         return Response::json(array('success' =&gt; false, 'errors' =&gt; $validator-&gt;getMessageBag()-&gt;toArray()));
    //     }
 
    //     $fileName = time() . '-' . $file-&gt;getClientOriginalName();
    //     $destination = public_path() . '/uploads/';
    //     $file-&gt;move($destination, $fileName);
 
    //     echo url('/uploads/'. $fileName);
    // }
}