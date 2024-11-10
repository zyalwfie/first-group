<header class="px-4 lg:px-40 xl:px-72 pt-8 flex gap-x-10 items-center font-newsCycle">

    <div class="brand">
        <h1 class="text-red text-3xl font-semibold">firstGroup.</h1>
    </div>

    <div class="border-r border-x-black self-stretch hidden md:block"></div>

    <nav class="flex gap-x-3 flex-1 justify-end md:justify-between items-center">

        <div class="nav-items gap-x-6 hidden md:flex">
            <a href="" class="font-semibold capitalize text-black">home</a>
            <a href="" class="font-semibold capitalize text-black">blog</a>
            <a href="" class="font-semibold capitalize text-black">about</a>
            <a href="" class="font-semibold capitalize text-black">gallery</a>
        </div>

        <div class="menu-sm-display" x-data="{ open: false }">
            <div class="fixed top-0 right-0 bottom-0 left-0 z-10 backdrop-blur bg-[rgba(0,0,0,.5)] flex justify-end"
                @click="open = false" x-show="open" x-transition>
                <div class="nav-items flex flex-col gap-y-4 p-4 bg-celadon h-[100%] w-44">
                    <a href="" class="font-semibold capitalize text-black">home</a>
                    <a href="" class="font-semibold capitalize text-black">blog</a>
                    <a href="" class="font-semibold capitalize text-black">about</a>
                    <a href="" class="font-semibold capitalize text-black">gallery</a>
                    <div class="divider border-t border-celadon"></div>
                    <a href="" class="capitalize text-base flex gap-x-2"><span><i
                                class='bx bx-male'></i></span> profile</a>
                    <a href="" class="capitalize text-base flex gap-x-2"><span><i
                                class='bx bx-edit'></i></span> write</a>
                    <a href="" class="capitalize text-base flex gap-x-2"><span><i
                                class='bx bx-log-out-circle'></i></span> logout</a>
                </div>
            </div>
            <button class="text-2xl md:hidden" @click="open = !open">
                <i class='bx bx-menu-alt-right'></i>
            </button>
        </div>

        {{-- <div class="profile flex gap-x-8 items-center">
            <a href="" class="capitalize font-semibold hidden md:flex gap-2 text-black"><span
                    class="flex items-center"><i class='bx bx-edit'></i></span> write</a>
            <div class="avatar relative" x-data="{ open: false }">
                <img src="{{ asset('img/dummy.jpg') }}" alt="Avatar" class="rounded-full w-10"
                    @click="open = !open">
                <div class="dropdown absolute right-0 top-12 shadow-lg shadow-honeydew rounded px-4 py-2 flex flex-col gap-y-2 transition-all bg-vanilla"
                    x-show="open" @click.outside="open = false" x-transition>
                    <a href="" class="capitalize text-base flex gap-x-2"><span><i
                                class='bx bx-male'></i></span> profile</a>
                    <a href="" class="capitalize text-base flex gap-x-2"><span><i
                                class='bx bx-edit'></i></span> write</a>
                    <div class="divider border-t border-black"></div>
                    <a href="" class="capitalize text-base flex gap-x-2"><span><i
                                class='bx bx-log-out-circle'></i></span> logout</a>
                </div>
            </div>
        </div> --}}

        <div class="signin">
            <button
                class="px-4 py-1 rounded bg-red text-honeydew cursor-pointer font-semibold font-newsCycle transition hover:bg-honeydew hover:text-red hover:scale-95 shadow shadow-vanilla">Sign
                In</button>
        </div>
    </nav>

</header>