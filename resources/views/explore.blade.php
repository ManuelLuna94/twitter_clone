@extends('layouts.layout')

@section('content')
<div class="flex flex-wrap">
    @foreach($users as $user)
        <div class="flex items-center my-4 w-1/2">
            <div class="ml-8 overflow-hidden rounded-full">
                <a href="{{ route('tweets.profile', $user) }}">
                    <img class="w-20 h-20" src="{{ $user->get_avatar() }}" alt="{{ $user->name }} profile picture">
                </a>
            </div>
            <div class="ml-8 ">
                <h1 class="text-xl text-white">
                    <a href="{{ route('tweets.profile', $user) }}">
                        {{ $user->name }}
                    </a>
                </h1>
                <h3 class="text-gray-500">{{ "@$user->username" }}</h3>
            </div>
        </div>
    @endforeach
</div>
@endsection
