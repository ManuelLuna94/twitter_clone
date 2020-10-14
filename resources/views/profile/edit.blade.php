@extends('layouts.layout')

@section('content')
<h1 class="text-white text-3xl text-center my-6">Hello, {{ $user->name }}</h1>

<form class="flex flex-col px-16" method="POST" action="{{ route('profile.update', $user) }}" enctype="multipart/form-data">
    @csrf
    @method("PATCH")
    <div class="my-4">
        @error('username')
            <p class="text-md text-red-600">{{ $message }}</p>
        @enderror
        <label for="username" class="text-white text-xl mr-4">Username</label>
        <input class="rounded py-2 px-4" type="text" value="{{ $user->username }}" name="username" id="username">
    </div>
    <div class="my-4">
        @error('name')
            <p class="text-md text-red-600">{{ $message }}</p>
        @enderror
        <label for="name" class="text-white text-xl mr-4">Name</label>
        <input class="rounded py-2 px-4" type="text" value="{{ $user->name }}" name="name" id="name">
    </div>
    <div class="my-4">
        @error('email')
            <p class="text-md text-red-600">{{ $message }}</p>
        @enderror
        <label for="email" class="text-white text-xl mr-4">Email</label>
        <input class="rounded py-2 px-4" type="text" value="{{ $user->email }}" name="email" id="email">
    </div>
    <div class="my-4">
        @error('password')
            <p class="text-md text-red-600">{{ $message }}</p>
        @enderror
        <label for="password" class="text-white text-xl mr-4">Password</label>
        <input class="rounded py-2 px-4" type="password" name="password" id="password">
    </div>
    <div class="my-4">
        @error('password_confirmation')
            <p class="text-md text-red-600">{{ $message }}</p>
        @enderror
        <label for="password_confirmation" class="text-white text-xl mr-4">Confirm password</label>
        <input class="rounded py-2 px-4" type="password" name="password_confirmation" id="password_confirmation">
    </div>
    <div class="my-4">
        @error('avatar')
            <p class="text-md text-red-600">{{ $message }}</p>
        @enderror
        <label for="avatar" class="text-white text-xl mr-4">Avatar</label>
        <input class="rounded py-2 px-4" type="file" name="avatar" id="avatar">
    </div>
    <button type="submit" class="bg-blue-500 py-2 px-4 rounded-full text-white">Send</button>
</form>
@endsection


