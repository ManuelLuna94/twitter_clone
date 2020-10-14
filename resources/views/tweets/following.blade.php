<div class="pt-4 pb-10 px-4 bg-gray-600 m-l-4 rounded">
    <h3 class="text-xl text-white">Following</h3>
    <ul>
        @foreach(Auth::user()->follows as $user)
        <li>
            <div class="flex m-2 items-center">
                <a href="{{ route('tweets.profile', $user) }}">
                    <img
                        src="{{ $user->get_avatar() }}"
                        alt="{{ $user->name }}"
                        class="h-10 w-10 rounded-full"
                    >
                </a>
                <p class="mx-4 text-white">
                    <a href="{{ route('tweets.profile', $user) }}">
                        {{ $user->name }}
                    </a>
                </p>
            </div>
        </li>
        @endforeach
    </ul>
</div>
