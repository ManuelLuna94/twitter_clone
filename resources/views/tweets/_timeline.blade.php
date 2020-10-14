@foreach($tweets as $tweet)
    <div>
        <div class="my-4 mt-8 pt-4 px-4 flex">
            <div class="flex-shrink-0">
                <a href="{{ route('tweets.profile', $tweet->user) }}">
                    <img
                        src="{{ $tweet->user->avatar ? asset($tweet->user->avatar) : asset('avatars/bot.png') }}"
                        alt="{{ $tweet->user->name }}"
                        class="w-10 h-10 rounded-full"
                    >
                </a>
            </div>

            <div class="ml-6 flex-1">
                <a href="{{ route('tweets.profile', $tweet->user) }}">
                    <h4 class="text-white">{{ $tweet->user->username }}</h4>
                </a>
                <div class="mt-2 mr-8">
                    <span class="text-gray-300 break-all">{{ $tweet->body }}</span>
                </div>
            </div>
        </div>
        <div class="m-auto w-4/5 bg-gray-600" style="height: 1px;"></div>
    </div>
@endforeach
