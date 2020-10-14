<div class="border border-solid border-gray-500 rounded my-2 mx-4">
    <form method="POST" action="/tweets" class="py-2 px-4">
        @csrf
        <div class="flex px-10 py-4 items-center">
            <img
                src="{{ Auth::user()->get_avatar() }}"
                alt="user"
                class="h-14 w-14 rounded-full"
            >
            <textarea 
                name="body" 
                {{-- required --}} 
                class="w-full text-2xl text-gray-500 ml-4 bg-transparent" 
                placeholder="What's happening?"
            ></textarea>
        </div>
        <div class="flex justify-end">
            @error('body')
            <span class="text-red-600 mr-6">
                {{ $message }}
            </span>
            @enderror
            <button class="text-white font-bold bg-blue-400 px-4 py-2 rounded-full mr-10">Tweet</button>
        </div>
    </form>
</div>
