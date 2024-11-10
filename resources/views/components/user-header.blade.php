<header class="bg-honeydew rounded-md px-6 py-4 flex gap-x-6 items-center">
    <form action="" class="flex-1">
        <div class="relative">
            <input type="search" class="w-full px-4 py-2 rounded-md font-newsCycle" placeholder="Search">
            <span class="absolute top-[50%] right-4 translate-y-[-50%]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: #000100;transform: ;msFilter:;">
                    <path
                        d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                    </path>
                </svg>
            </span>
        </div>
    </form>
    <div class="flex gap-x-3 justify-end items-center">
        <span class="capitalize font-cuprum text-lg hidden md:inline">first group</span>
        <span id="show-sidebar-btn" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 19V7h6v12H4zm8 0V7h8V5l.002 14H12z">
                </path>
                <path d="M6 10h2v2H6zm0 4h2v2H6z"></path>
            </svg>
        </span>
        <img src="{{ asset('img/dummy.jpg') }}" alt="Avatar" class="rounded-full w-12 shadow">
    </div>
</header>
