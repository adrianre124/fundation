<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::paginate(5)->withQueryString();

        return view('/reviews')->with('reviews', $reviews);
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'nickname' => 'required|max:40',
            'description' => 'required|max:255',
            'score' => 'required',
        ]);

        if (Session::has('reviewd_')) {
            return redirect()->back()->with('message', 'Nie możesz zostawić drugiej opinii.');
        }

        Review::create($attributes);

        Session::put('reviewd_', true);

        return redirect()->back();
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->back();
    }
}
