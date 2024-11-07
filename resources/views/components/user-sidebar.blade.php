<aside class="fixed top-4 bottom-4 left-4 bg-honeydew p-6 min-w-64 rounded-md flex">
    <div class="flex-1 flex flex-col gap-y-3">
        <div class="brand">
            <a href="{{ route('welcome') }}">
                <h1 class="font-bold font-newsCycle text-4xl text-red">firstGroup.</h1>
            </a>
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
</aside>