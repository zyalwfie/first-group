<header
    class="px-4 lg:px-40 xl:px-72 py-5 gap-x-10 items-center font-newsCycle flex fixed left-0 right-0 top-0 bg-white z-20">

    <div class="brand">
        <a href="{{ route('welcome') }}">
            <h1 class="text-red text-3xl font-semibold">firstGroup.</h1>
        </a>
    </div>

    <div class="hidden md:block border-r border-duskBlack h-8"></div>

    <nav class="flex gap-x-3 flex-1 justify-end md:justify-between items-center">
        <button class="text-xl md:hidden" id="menu-button"><i class='bx bx-menu-alt-right'></i></button>

        <div class="hidden md:flex gap-3">
            <a href="{{ route('welcome') }}"
                class="font-newsCycle text-lg font-semibold hover:text-red transition {{ Request::is('/') ? 'text-red' : '' }}">Home</a>
            <a href="{{ route('blogs.index') }}"
                class="font-newsCycle text-lg font-semibold hover:text-red transition {{ Request::is('blogs*') ? 'text-red' : '' }}">Blogs</a>
            <a href="{{ route('teams') }}"
                class="font-newsCycle text-lg font-semibold hover:text-red transition {{ Request::is('teams') ? 'text-red' : '' }}">Teams</a>
            <a href="{{ route('contact') }}"
                class="font-newsCycle text-lg font-semibold hover:text-red transition {{ Request::is('contact') ? 'text-red' : '' }}">Contact</a>
        </div>

        <div class="fixed inset-0 bg-[rgba(0,0,0,0.5)] backdrop-blur-sm hidden" id="overlay">
            <div class="flex flex-col justify-between bg-vanilla w-[60%] h-full p-4 absolute -translate-x-full transition"
                id="sidebar">
                <div class="flex flex-col gap-3">
                    <a href="{{ route('welcome') }}"
                        class="flex items-center rounded-md gap-3 p-2 font-newsCycle text-lg font-semibold hover:text-red transition {{ Request::is('/') ? 'bg-red text-flashWhite' : '' }}"><span><i
                                class='bx bxs-home'></i></span>Home</a>
                    <a href="{{ route('blogs.index') }}"
                        class="flex items-center rounded-md gap-3 p-2 font-newsCycle text-lg font-semibold hover:text-red transition {{ Request::is('blogs*') ? 'bg-red text-flashWhite' : '' }}"><span><i
                                class='bx bxs-news'></i></span>Blogs</a>
                    <a href="{{ route('teams') }}"
                        class="flex items-center rounded-md gap-3 p-2 font-newsCycle text-lg font-semibold hover:text-red transition {{ Request::is('teams') ? 'bg-red text-flashWhite' : '' }}"><span><i
                                class='bx bxl-microsoft-teams'></i></span>Teams</a>
                    <a href="{{ route('contact') }}"
                        class="flex items-center rounded-md gap-3 p-2 font-newsCycle text-lg font-semibold hover:text-red transition {{ Request::is('contact') ? 'bg-red text-flashWhite' : '' }}"><span><i
                                class='bx bxs-phone'></i></span>Contact</a>
                </div>
                <a href="{{ route('signin') }}"
                    class="p-2 rounded-md text-duskBlack cursor-pointer font-semibold font-newsCycle transition flex gap-3"><span><i
                            class='bx bx-log-in-circle'></i></span>Sign
                    In</a>
            </div>
        </div>

        @auth
            <div x-data="{ open: false }">
                <div class="relative">
                    <button x-on:click="open = !open" type="button"
                        class="inline-flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900"
                        aria-expanded="false">
                        <span class="capitalize text-red">{{ auth()->user()->full_name }}</span>
                        <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <!--
                                      Flyout menu, show/hide based on flyout menu state.
                                      Entering: "transition ease-out duration-200"
                                        From: "opacity-0 translate-y-1"
                                        To: "opacity-100 translate-y-0"
                                      Leaving: "transition ease-in duration-150"
                                        From: "opacity-100 translate-y-0"
                                        To: "opacity-0 translate-y-1"
                                    -->
                    <div class="absolute left-1/2 z-10 mt-5 flex w-screen max-w-max -translate-x-1/2 px-4" x-show="open">
                        <div
                            class="w-screen max-w-max flex-auto overflow-hidden rounded-md bg-vanilla px-3 py-1 text-sm/6">
                            <div>
                                <div class="relative flex items-center gap-x-2 rounded-lg hover:text-red">
                                    <div class="text-lg">
                                        <i class='bx bx-log-out-circle'></i>
                                    </div>
                                    <div>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="font-semibold font-newsCycle">Logout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <a href="{{ route('signin') }}"
                class="px-4 py-1 rounded bg-red text-honeydew cursor-pointer font-semibold font-newsCycle transition hover:bg-honeydew hover:text-red hover:scale-95 shadow shadow-vanilla">Sign
                In</a>
        @endauth

    </nav>

</header>
