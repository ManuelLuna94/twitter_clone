<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function index() {
        $tweets = Auth::user()->timeline();
        return view('tweets.timeline', ['tweets' => $tweets]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'body' => 'required|max:140'
        ]);
        $data['user_id'] = Auth::id();
        Tweet::create($data);
        return back();
    }
}
