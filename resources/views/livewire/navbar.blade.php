<nav>
    <div class="flex justify-between px-4 items-center h-20 max-w-screen-2xl mx-auto">
        {{-- hamburger menu and logo --}}
        <div class="flex gap-4 w-full">
            <x-icons.hamberger-menu />
            <x-logo />
        </div>
        <div class="hidden sm:flex w-full justify-center">
            <x-big-logo />
        </div>
        {{-- other menu --}}
        <div class="flex justify-end gap-4 items-center w-full">
            <x-icons.search />
            <x-icons.ring />
            <x-icons.bag />
            <x-icons.watchlist />
            {{-- hide when big screen --}}
            <x-icons.arrow-down class="sm:hidden" />

            {{-- show when big screen --}}
            @if ($userName)
                <div class="uppercase  sm:flex justify-center items-center gap-1">
                    <p x-text="$wire.userName"></p>
                    <x-icons.arrow-down />
                </div>
            @endif
        </div>
    </div>
</nav>
