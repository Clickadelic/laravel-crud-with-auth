<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;

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
    public function create(Request $request)
    {
        return view('posts.create');
    }

    /**
     * Store a newly created director in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\RedirectResponse $response
     */
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();

        $post = Post::create([
            'title'   => $validated['title'],
            'content' => $validated['content'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('posts.index')->with('success', 'Post erfolgreich erstellt!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {   
        $post = Post::find($post->id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(StorePostRequest $request, Post $post): RedirectResponse
    {   
        $validated = $request->validated();

        // Beim Update user_id nicht überschreiben lassen
        unset($validated['user_id']);

        $post->update($validated);

        return redirect()->route('posts.index')->with('success', 'Post wurde aktualisiert!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        try {
            $post->delete();
            return redirect()->route('posts.index')->with('success', 'Post wurde gelöscht.');
            // Wir beschreiben den auftretenden Fehler mit der entsprechenden Fehlerklasse in PHP als Typ der Übergabe der Variable $e.
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('posts.index')->with('error', 'Dieser Post kann nicht gelöscht werden');
        }
    }
}
