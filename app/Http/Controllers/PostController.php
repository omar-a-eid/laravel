<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePosts;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view("index", ['posts' => $posts]);
    }

    public function trash()
    {
        $posts = Post::onlyTrashed()->get();

        return view("trash", ['posts' => $posts]);
    }

    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    //StoreBlogPost
    public function store(StorePosts $request)
    {
        $data = $request->validated();

        $imagePath;
        if($request->has('image') && $request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('posts', ['disk' => 'public']);
        }

        $data['image'] = $imagePath;
        
        $post = auth()->user()->posts()->create($data);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('edit')->with(['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePosts $request, string $id)
    {
        $post = Post::find($id);

        if($post->user_id !== auth()->id()) {
            return redirect()->route('posts.index');
        }
        $post->update($request->all());
        // return view('edit', ['post' => $post,"success" => "The post has been updated successfully."]);
        return redirect()->route('posts.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return  redirect()->route('posts.trash');;
    }
}