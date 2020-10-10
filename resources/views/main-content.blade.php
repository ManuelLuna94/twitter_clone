@include('timeline')

@foreach(range(1, 10) as $tweet)
<div>
    <div class="my-4 mt-8 pt-4 px-4 flex">
        <div class="flex-shrink-0">
            <img
                src="https://static.wikia.nocookie.net/sailormooncrystal/images/1/19/Act23_89.jpg/revision/latest/top-crop/width/360/height/450?cb=20170722080641"
                alt=""
                class="w-10 h-10 rounded-full"
            >
        </div>

        <div class="ml-6 flex-1">
            <h4 class="text-white">Jonh Doe</h4>
            <div class="mt-2 mr-8">
                <span class="text-gray-300 break-all">Me gusta la verga jjjajajajajajajajajajajajajajajajajajajajaajajjajajajajajajajajajajajajajajajajajajajaajajajajajajajajajajajajajajajajajajajajajaaja</span>
            </div>
        </div>
    </div>
    <div class="m-auto w-4/5 bg-gray-600" style="height: 1px;"></div>
</div>
@endforeach
