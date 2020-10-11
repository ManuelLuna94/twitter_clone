<div class="pt-4 pb-10 px-4 bg-gray-600 m-l-4 rounded">
    <h3 class="text-xl text-white">Following</h3>
    <ul>
        @foreach(Auth::user()->follows as $user)
        <li>
            <div class="flex m-2 items-center">
                <a href="/profile/{{ $user->id }}">
                    <img
                        src="https://picsum.photos/40"
                        alt="{{ $user->name }}"
                        class="h-10 w-10 rounded-full"
                    >
                </a>
                <p class="mx-4 text-white">
                    <a href="/profile/{{ $user->id }}">
                        {{ $user->name }}
                    </a>
                </p>
            </div>
        </li>
        @endforeach
    </ul>
</div>
