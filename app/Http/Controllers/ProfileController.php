<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user) {
       return view('tweets.profile', compact('user'));
    }

    public function edit(User $user) {
        return view('profile.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request) {
        $data = $request->validate(
            [
                'username' => [
                    'required',
                    Rule::unique('users')->ignore($user),
                    'max:255',
                    'alpha_dash'
                ],
                'email' => [
                    'required',
                    Rule::unique('users')->ignore($user),
                    'max:255'
                ],
                'password' => [
                    'required',
                    'min:8',
                    'max:255',
                    'confirmed'
                ],
                'name' => [
                    'max:255',
                    'required'
                ],
                'avatar' => [
                    'file',
                ]
            ]
        );

        if($request->file('avatar'))
            $data['avatar'] = $request->file('avatar')->store('avatars');

        $user->update($data);

        return redirect(route('tweets.profile', Auth::user()->username));
    }
}
