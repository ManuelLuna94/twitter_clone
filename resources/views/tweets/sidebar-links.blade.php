<nav class="">
    <ul class="py-4">
        <li class="text-xl text-white font-bold mb-4">
            <a href="/">Home</a>
        </li>
        <li class="text-xl text-white font-bold mb-4">
            <a href="/">Explore</a>
        </li>
        <li class="text-xl text-white font-bold mb-4">
            <a href="/">Notifications</a>
        </li>
        <li class="text-xl text-white font-bold mb-4">
            <a href="/">Messages</a>
        </li>
        <li class="text-xl text-white font-bold mb-4">
            <a href="/">Saved</a>
        </li>
        <li class="text-xl text-white font-bold mb-4">
            <a href="/">Lists</a>
        </li>
        <li class="text-xl text-white font-bold mb-4">
            <a href="{{ route('tweets.profile', Auth::id()) }}">Profile</a>
        </li>
        <li class="text-xl text-white font-bold mb-4">
            <a href="/">More</a>
        </li>
    </ul>
</nav>
