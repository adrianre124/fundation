<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->is('sprawozdania')) {
            $posts = Post::whereHas('category', function($q) {
                $q->where('name','like', 'Sprawozdania');
            })->paginate(6)->withQueryString();

            return view('sprawozdania', ['posts' => $posts]);
        }

        return view('posts.index', [
            'posts' => Post::latest()->paginate(6)->withQueryString(),
        ]);
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
    public function store()
    {
        $attributes = request()->validate([
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'title' => 'required',
            'body' => 'required',
            'thumbnail' => 'required|image',
        ]);

        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/aktualnosci');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $next_record = Post::where('id', '>', $post->id)->orderBy('id')->first();
        $previous_record = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();

        return view('posts.show', [
            'post' => $post,
            'next_record' => $next_record,
            'previous_record' => $previous_record
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/aktualnosci');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('storage/media'), $fileName);

            $url = asset('storage/media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
