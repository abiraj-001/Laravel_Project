<?php

namespace App\Http\Controllers\tweety;

use App\Models\User;
use App\Http\Controllers\Controller;

class TweetLikesController extends Controller
{
    public function store(User $tweet)
    {
        $tweet->like(auth()->user());

        return back();
    }

    public function destroy(User $tweet)
    {
        $tweet->dislike(auth()->user());

        return back();
    }
}
