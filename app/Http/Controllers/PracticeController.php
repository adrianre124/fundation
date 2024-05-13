<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use App\Http\Requests\StorePracticeRequest;
use App\Http\Requests\UpdatePracticeRequest;
use Illuminate\Validation\Rule;

class PracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('praktyki.index', [
            'praktyki' => Practice::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('praktyki.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'description' => 'required',
            'duties' => 'required',
            'tools' => 'required'
        ]);

        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Practice::create($attributes);

        return redirect('/praktyki');
    }

    /**
     * Display the specified resource.
     */
    public function show(Practice $practice)
    {
        return view('praktyki.show', [
            'practice' => $practice
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $practice = Practice::find($id);
        return view('praktyki.edit', compact('practice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'description' => 'required',
            'duties' => 'required',
            'tools' => 'required'
        ]);

        $practice = Practice::find($id);

        if (!empty(request()->file())) {
            $path = public_path().'/storage/';

            if ($practice->thumbnail != '' && $practice->thumbnail != null) {
                $file_old = $path.$practice->thumbnail;
                unlink($file_old);
            }

            $attributes['thumbnail'] = request()->file('thumbnail')->store('storage/thumbnails');
        }
        else {
            $attributes['thumbnail'] = $practice->thumbnail;
        }

        $practice->update($attributes);
        return redirect()->route('practice.index')
            ->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Practice $practice)
    {
        $practice->delete();

        return redirect('/praktyki');
    }
}
