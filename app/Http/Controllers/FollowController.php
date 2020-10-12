<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function store(User $user) {
       Auth::user()->follow($user);
       return back();
    }

    public function destroy(User $user) {
        Auth::user()->unfollow($user);
        return back();
    }
}
