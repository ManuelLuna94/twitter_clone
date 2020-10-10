@include('new-tweet')

@foreach($tweets as $tweet)
<div>
    <div class="my-4 mt-8 pt-4 px-4 flex">
        <div class="flex-shrink-0">
            <img
                src="https://picsum.photos/seed/{{ $tweet->user->name }}/40"
                alt=""
                class="w-10 h-10 rounded-full"
            >
        </div>

        <div class="ml-6 flex-1">
            <h4 class="text-white">{{ $tweet->user->name }}</h4>
            <div class="mt-2 mr-8">
                <span class="text-gray-300 break-all">{{ $tweet->body }}</span>
            </div>
        </div>
    </div>
    <div class="m-auto w-4/5 bg-gray-600" style="height: 1px;"></div>
</div>
@endforeach
