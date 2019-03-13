<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post.index', [
            'posts' => Post::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('post.create', [
            'post' => new Post(),
            'posts' => Post::all(),
            'delimiter' => '',
            'categories' => Category::all(),

        ]);
        $post->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // var_dump($request->input('text'));
        // die;

        $post = new Post();
        $post->title = $request->input('title');
        $post->text = $request->input('text');
        $post->category_id = $request->input('category_id ');
        $file = $request->file('image');
        if ($file) {
            // $destinationPath = 'uploads';
            // $result = $file->move($destinationPath, $file->getClientOriginalName());
            Storage::put('', $file);

        }
        $post->timestamps = $request->input('timestamps');

        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, Request $request)
    {

        return view('post.edit', [
            'post' => $post,
            'delimiter' => '',
            'categories' => Category::all(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->text = $request->input('text');
        $post->category_id = $request->input('category_id');
        $post->save();
        return redirect()->route('post.index');
        // $post->title = $request->input('title');
        // $post->text = $request->input('text');
        // $post->name = $request->input('name');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
