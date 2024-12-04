<header
    class="px-4 lg:px-40 xl:px-72 py-5 gap-x-10 items-center font-newsCycle flex fixed left-0 right-0 top-0 bg-white z-20">

    <div class="brand">
        <h1 class="text-red text-3xl font-semibold">firstGroup.</h1>
    </div>

    <div class="hidden md:block border-r border-duskBlack h-8"></div>

    <nav class="flex gap-x-3 flex-1 justify-end md:justify-between items-center">
        <button class="text-xl md:hidden" id="menu-button"><i class='bx bx-menu-alt-right'></i></button>

        <div class="hidden md:flex gap-3">
            <a href="{{ route('welcome') }}" class="font-newsCycle text-lg font-semibold hover:text-red transition {{ request()->is('/') ? 'text-red' : '' }}">Home</a>
            <a href="{{ route('blogs') }}" class="font-newsCycle text-lg font-semibold hover:text-red transition {{ request()->is('blogs') ? 'text-red' : '' }}">Blogs</a>
            <a href="{{ route('teams') }}" class="font-newsCycle text-lg font-semibold hover:text-red transition {{ request()->is('teams') ? 'text-red' : '' }}">Teams</a>
            <a href="{{ route('contact') }}" class="font-newsCycle text-lg font-semibold hover:text-red transition {{ request()->is('contact') ? 'text-red' : '' }}">Contact</a>
        </div>

        <div class="fixed inset-0 bg-[rgba(0,0,0,0.5)] backdrop-blur-sm hidden" id="overlay">
            <div class="flex flex-col justify-between bg-vanilla w-[60%] h-full p-4 absolute -translate-x-full transition" id="sidebar">
                <div class="flex flex-col gap-3">
                    <a href="{{ route('welcome') }}" class="flex items-center rounded-md gap-3 p-2 font-newsCycle text-lg font-semibold hover:text-red transition {{ request()->is('/') ? 'bg-red text-flashWhite' : '' }}"><span><i class='bx bxs-home'></i></span>Home</a>
                    <a href="{{ route('blogs') }}" class="flex items-center rounded-md gap-3 p-2 font-newsCycle text-lg font-semibold hover:text-red transition {{ request()->is('blogs') ? 'bg-red text-flashWhite' : '' }}"><span><i class='bx bxs-news'></i></span>Blogs</a>
                    <a href="{{ route('teams') }}" class="flex items-center rounded-md gap-3 p-2 font-newsCycle text-lg font-semibold hover:text-red transition {{ request()->is('teams') ? 'bg-red text-flashWhite' : '' }}"><span><i class='bx bxl-microsoft-teams'></i></span>Teams</a>
                    <a href="{{ route('contact') }}" class="flex items-center rounded-md gap-3 p-2 font-newsCycle text-lg font-semibold hover:text-red transition {{ request()->is('contact') ? 'bg-red text-flashWhite' : '' }}"><span><i class='bx bxs-phone'></i></span>Contact</a>
                </div>
                <button
                class="p-2 rounded-md text-duskBlack cursor-pointer font-semibold font-newsCycle transition flex gap-3"><span><i class='bx bx-log-in-circle'></i></span>Sign
                In</button>
            </div>
        </div>

        <div class="signin">
            <button
                class="px-4 py-1 rounded bg-red text-honeydew cursor-pointer font-semibold font-newsCycle transition hover:bg-honeydew hover:text-red hover:scale-95 shadow shadow-vanilla">Sign
                In</button>
        </div>
    </nav>

</header>
