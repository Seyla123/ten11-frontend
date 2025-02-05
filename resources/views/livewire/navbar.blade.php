<nav class="relative" x-data={open:false}>
    <div class="flex justify-between px-4 items-center h-20 max-w-screen-xl mx-auto">
        {{-- hamburger menu and logo --}}
        <div class="flex gap-4 w-full">
            <x-icons.hamberger-menu />
            <x-logo />
        </div>
        <div class="hidden sm:flex w-full justify-center" x-ref='search'>
            <x-big-logo />
        </div>
        {{-- other menu --}}
        <div class="flex justify-end gap-4 items-center w-full">
            <button @click="open = true">
                <x-icons.search />
            </button>
            <x-icons.ring />
            <x-icons.bag />
            <x-icons.watchlist />
            {{-- hide when big screen --}}
            <x-icons.arrow-down class="sm:hidden" />
            {{-- show when big screen --}}
            @if ($userName)
                <div class="uppercase hidden sm:flex justify-center items-center gap-1">
                    <p x-text="$wire.userName"></p>
                    <x-icons.arrow-down />
                </div>
            @endif
        </div>
    </div>
    {{-- search --}}
    <div x-data='{placeholder:"What is you searhing for ?"}' @click.outside="open = false" 
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="-translate-y-full"
        x-transition:enter-end="translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="translate-y-0"
        x-transition:leave-end="-translate-y-full"
        class="bg-white fixed h-[80%] w-full z-10 top-0 px-2">
        <div class="border-b border-black max-w-screen-xl mx-auto mt-4 py-2  flex">
            <input type="text" class="w-full focus:outline-none  focus:ring-0  text-xl" :placeholder="placeholder">
            <div class="flex gap-2 xl:gap-4">
                <x-icons.search />
                <button @click="open = false">
                    x
                </button>
            </div>
        </div>
    </div>
</nav>
