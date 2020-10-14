<?php


namespace App\Models;


trait Followable {
    public function isFollowing($user) {
        return $this->follows()->where('follow_id', $user->id)->exists();
    }

    public function follow($user) {
        return $this->follows()->save($user);
    }

    public function unfollow($user) {
       return $this->follows()->detach($user);
    }

    public function follows() {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'follow_id');
    }
}
