<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\StorePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post = Post::find($post->id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(StorePostRequest $request, Post $post): RedirectResponse
    // {   
    //     $validated = $request->validated();
    //     $post->update($validated);
    //     return redirect()->route('posts.index')
    //                      ->with('success', 'Direktor wurde aktualisiert!');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        try {
            $post->delete();
            return redirect()->route('post.index')->with('success', 'post wurde gelöscht.');
            // Wir beschreiben den auftretenden Fehler mit der entsprechenden Fehlerklasse in PHP als Typ der Übergabe der Variab $e.
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('post.index')->with('error', 'Dieser Post kann nicht gelöscht werden');
        }
    }
}
