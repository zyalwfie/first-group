    <aside class="fixed top-0 right-0 bottom-0 left-0 -translate-x-[120%] md:translate-x-0 transition p-4 z-10">

        <div class="bg-honeydew p-6 rounded-md z-20 h-full w-3/4">

            <div class="flex-1 flex flex-col gap-y-3">
                <div class="flex items-center justify-between">
                    <a href="{{ route('welcome') }}">
                        <h1 class="font-bold font-newsCycle text-4xl text-red">firstGroup.</h1>
                    </a>
                    <span id="close-sidebar-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 19V7h6v12H4zm8 0V7h8V5l.002 14H12z">
                            </path>
                            <path d="M6 10h2v2H6zm0 4h2v2H6z"></path>
                        </svg>
                    </span>
                </div>
                <div class="border-t border-celadon my-4"></div>
                <div class="flex-1 flex flex-col justify-between">
                    <div class="flex flex-col gap-y-2">
                        <a href="{{ route('dashboard.index') }}"
                            class="p-2 text-lg rounded font-cuprum capitalize transition hover:bg-vanilla hover:shadow-sm hover:shadow-black cursor-pointer {{ Request::routeIs('dashboard.index') ? 'bg-vanilla shadow-sm shadow-black' : '' }}"><span><i
                                    class='bx bxs-grid-alt'></i></span> dashboard</a>
                        <a href="{{ route('blogs.index') }}"
                            class="p-2 text-lg rounded font-cuprum capitalize transition hover:bg-vanilla hover:shadow-sm hover:shadow-black cursor-pointer {{ Request::routeIs('blogs.index') ? 'bg-vanilla shadow-sm shadow-black' : '' }}"><span><i
                                    class='bx bxl-blogger'></i></span> blogs</a>
                        <a href="{{ route('write.index') }}"
                            class="p-2 text-lg rounded font-cuprum capitalize transition hover:bg-vanilla hover:shadow-sm hover:shadow-black cursor-pointer {{ Request::routeIs('write.index') ? 'bg-vanilla shadow-sm shadow-black' : '' }}"><span><i
                                    class='bx bxs-edit'></i></span> write</a>
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <a href="{{ route('profile.index') }}"
                            class="p-2 text-lg rounded font-cuprum capitalize transition hover:bg-vanilla hover:shadow-sm hover:shadow-black cursor-pointer {{ Request::routeIs('profile.index') ? 'bg-vanilla shadow-sm shadow-black' : '' }}"><span><i
                                    class='bx bx-male'></i></span> profile</a>
                        <a href="{{ route('welcome') }}"
                            class="p-2 text-lg rounded font-cuprum capitalize transition hover:bg-vanilla hover:shadow-sm hover:shadow-black cursor-pointer"><span><i
                                    class='bx bx-log-out-circle'></i></span> sign out</a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </aside>

    <div class="overlay fixed bg-[rgba(0,0,0,.2)] backdrop-blur-sm top-0 right-0 bottom-0 left-0 transition opacity-0 none"></div>