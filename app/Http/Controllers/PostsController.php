<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = posts::all();
        return view('posts', ['posts'=> $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $infos = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
            'status' => 'required',
        ]);
        posts::create($infos);
    }

    /**
     * Display the specified resource.
     */
    public function show(posts $post)
    {
        return view('show', ['post'=> $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
    posts::find($id)->update($request->validate([
        'title' => 'required',
        'author' => 'required',
        'content' => 'required',
        'status' => 'required',
    ]));

    return redirect()->route('posts.show', $id);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(posts $posts)
    {
        //
    }
    public function apiIndex()
{
    $posts = Posts::all();
    return response()->json($posts);
}

public function apiShow($id)
{
    $post = Posts::find($id);
    return response()->json($post);
}


public function apiStore(Request $request)
{
    $post = Posts::create($request->validate([
        'user_id' => 'required|exists:users,id', // <-- ajouté
        'title' => 'required',
        'author' => 'required',
        'content' => 'required',
        'status' => 'required',
    ]));

    return response()->json($post, 201);
}


public function apiUpdate(Request $request, $id)
{
    $post = Posts::find($id);

    $post->update([
        'title' => $request->title,
        'author' => $request->author,
        'content' => $request->content,
        'status' => $request->status,
    ]);

    return response()->json($post);
}

public function apiDelete($id)
{
    $post = Posts::find($id);
    $post->delete();

    return response()->json(['message' => 'Post deleted successfully']);
}

}
