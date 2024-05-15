<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();

        return view('workers.index')->with('workers', $workers);
    }

    public function create()
    {
        return view('workers.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'position' => 'required',
            'picture' => 'image',
            'description' => 'required'
        ]);

        $attributes['picture'] = request()->file('picture')->store('pictures');

        Worker::create($attributes);

        return redirect('/pracownicy');
    }

    public function edit(Worker $worker)
    {
        return view('workers.edit')->with('worker', $worker);
    }

    public function update($id)
    {
        $attributes = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'position' => 'required',
            'picture' => 'image',
            'description' => 'required'
        ]);

        $worker = Worker::find($id);

        if (!empty(request()->file())) {
            $path = public_path().'/storage/';

            if ($worker->picture != '' && $worker->picture != null) {
                $file_old = $path.$worker->picture;
                unlink($file_old);
            }

            $attributes['picture'] = request()->file('picture')->store('storage/pictures');
        }
        else {
            $attributes['picture'] = $worker->picture;
        }

        $worker->update($attributes);
        return redirect()->route('workers.index')
            ->with('success', 'Worker updated successfully.');
    }

    public function destroy(Worker $worker)
    {
        $worker->delete();

        return redirect()->back();
    }
}
