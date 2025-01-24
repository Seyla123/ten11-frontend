<section class="max-screen-2xl mx-auto p-2">
    <h2 class="text-2xl py-2 font-medium">This Week's Highlights</h2>
    <div class="grid grid-cols-2 gap-2 xl:grid-cols-4">
        @for ($i = 0; $i < 4; $i++)
            <div class="flex flex-col">
                <div>
                    <img src="{{ asset('assets/hightligt1.jpg') }}" alt="">
                </div>
                <div class="flex flex-col p-2">
                    <span class="flex justify-between">
                        <p>$9.59</p>
                        <x-icons.watchlist/>
                    </span>
                    <p>Lorem ipsum dolor</p>
                    <div class="flex gap-1">
                        <div class="bg-red-500 h-4 w-4 border-[1.8px] border-gray-300"></div>
                        <div class="bg-white h-4 w-4 border-[1.8px] border-gray-300"></div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</section>
