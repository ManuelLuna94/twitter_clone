@extends('layouts.layout')
@section('content')
    <header class="relative mb-8">
        <div
            style="background-image: url('https://c4.wallpaperflare.com/wallpaper/494/697/154/singers-iu-wallpaper-preview.jpg')"
            class="h-48 w-full bg-center"
        ></div>

        <img
            class="w-40 h-40 absolute rounded-full overflow-hidden"
            style="top: 60%; left: 50%; transform: translate(-50%, -50%)"
            src="https://c4.wallpaperflare.com/wallpaper/494/697/154/singers-iu-wallpaper-preview.jpg"
            alt="user picture"
        >
        <div class="my-8 mx-4 flex justify-between items-center">
            <h1 class="text-white text-2xl">
                {{ $user->name }}
            </h1>
            <div>
                @if(Auth::id() === $user->id)
                <a
                    href="/"
                    class="m-2 text-xl py-2 px-4 font-thin text-white rounded-full border border-gray-300"
                >
                    Edit profile
                </a>
                @else
                    @if(Auth::user()->isFollowing($user))
                        <form method="POST" action="{{ route('follow.destroy', $user->id) }}">
                            @csrf
                            @method("DELETE")
                            <button
                                class="m-2 text-xl py-2 px-4 font-thin text-white rounded-full bg-blue-600"
                            >
                                Unfollow
                            </button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('follow.store', $user->id) }}">
                            @csrf
                            <button
                                class="m-2 text-xl py-2 px-4 font-thin text-white rounded-full bg-blue-600"
                            >
                                Follow
                            </button>
                        </form>
                    @endif
                @endif
            </div>
        </div>
        <div class="text-center">
            <p class="text-sm text-gray-500 break-all m-auto w-1/2">
                Fear is not mediocre in shangri-la, the state of art, or hell, but everywhere.
            </p>
        </div>
    </header>

    @include('tweets._timeline', ['tweets' => $user->tweets()])
@endsection

<script>
    import Button from "../../js/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>
