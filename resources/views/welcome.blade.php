<x-layout>
    <x-slot:title>
        First Group
    </x-slot:title>
    
    {{-- Header --}}
    <x-header></x-header>
    {{-- Header End --}}

    {{-- Main --}}
    <main class="my-10">
        {{-- Greetings --}}
        <section class="mb-16 bg-honeydew">
            <div class="px-4 lg:px-40">
                <div class="p-4 rounded-md text-center flex flex-col gap-y-2 items-center">
                    <h1 class="uppercase font-newsCycle tracking-widest">welcome to firstGroup</h1>
                    <p class="font-cuprum font-bold text-xl">Craft naratives ✍️ that ignite <span
                            class="text-red">inspiration 💡</span>,<br /> <span class="text-red">knowledge 📕</span> and
                        <span class="text-red">entertainment 🎬</span>
                    </p>
                </div>
            </div>
        </section>
        {{-- Greetings End --}}

        {{-- Hero --}}
        <section class="hero px-4 lg:px-40 xl:px-72">
            <div class="content flex flex-col md:flex-row md:items-center md:gap-x-8 gap-y-8">
                <img src="{{ asset('img/dummy.jpg') }}" alt="Thumbnail" class="w-[100%] h-60 rounded object-cover">
                <div class="details flex flex-col gap-y-3">
                    <div class="author font-cuprum text-lg flex gap-x-2 items-center">
                        <h3 class="capitalize">author</h3>
                        <span class="text-lg font-bold self-center">.</span>
                        <div class="created-at">
                            12 minutes ago
                        </div>
                    </div>
                    <div class="title text-2xl md:text-3xl capitalize font-bold font-newsCycle">
                        <h1>where to watch 'john wick: chapter 4'</h1>
                    </div>
                    <div class="desc text-base font-ekMukta font-light">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae atque minus, recusandae
                            quis aliquam facilis?</p>
                    </div>
                    <div class="category font-cuprum">
                        <span class="capitalize text-red">movies</span>
                        <span>.</span>
                        <span>4 min to read</span>
                    </div>
                </div>
            </div>
        </section>
        {{-- Hero End --}}

        {{-- Latest News --}}
        <section class="latest-news px-4 mt-16 lg:px-40 xl:px-72">
            <div class="flex flex-col gap-y-4">
                <div class="latest-news-header flex justify-between items-center">
                    <div class="head-title">
                        <h2 class="font-bold text-2xl font-newsCycle capitalize">latest news</h2>
                    </div>
                    <div class="all">
                        <a href="" class="font-semibold text-red capitalize flex gap-x-1">
                            see all
                            <span class="self-center"><i class='bx bx-right-arrow-alt bx-sm'></i></span>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    {{-- Card --}}
                    <div class="card">
                        <div class="card-head flex flex-col gap-y-2">
                            <img src="{{ asset('img/dummy.jpg') }}" alt="Card Thumbnail" class="rounded">
                            <div class="author font-cuprum text-sm flex gap-x-2 items-center">
                                <h3 class="capitalize">author</h3>
                                <span class="text-lg font-bold self-center">.</span>
                                <div class="created-at">12 minutes ago</div>
                            </div>
                        </div>
                        <div class="card-body flex flex-col gap-y-2">
                            <h4 class="text-lg leading-5 font-newsCycle font-semibold">Liverpool hammer Leeds for first
                                win in five games</h4>
                            <p class="text-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
                                sapiente nostrum possimus id dolor magnam fuga accusamus iure rerum in?</p>
                            <div class="category text-sm font-cuprum">
                                <span class="capitalize text-red">movies</span>
                                <span>.</span>
                                <span>4 min to read</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-head flex flex-col gap-y-2">
                            <img src="{{ asset('img/dummy.jpg') }}" alt="Card Thumbnail" class="rounded">
                            <div class="author font-cuprum text-sm flex gap-x-2 items-center">
                                <h3 class="capitalize">author</h3>
                                <span class="text-lg font-bold self-center">.</span>
                                <div class="created-at">
                                    12 minutes ago
                                </div>
                            </div>
                        </div>
                        <div class="card-body flex flex-col gap-y-2">
                            <h4 class="text-lg leading-5 font-newsCycle font-semibold">Liverpool hammer Leeds for first
                                win in five games</h4>
                            <p class="text-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
                                sapiente nostrum possimus id dolor magnam fuga accusamus iure rerum in?</p>
                            <div class="category text-sm font-cuprum">
                                <span class="capitalize text-red">movies</span>
                                <span>.</span>
                                <span>4 min to read</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-head flex flex-col gap-y-2">
                            <img src="{{ asset('img/dummy.jpg') }}" alt="Card Thumbnail" class="rounded">
                            <div class="author font-cuprum text-sm flex gap-x-2 items-center">
                                <h3 class="capitalize">author</h3>
                                <span class="text-lg font-bold self-center">.</span>
                                <div class="created-at">
                                    12 minutes ago
                                </div>
                            </div>
                        </div>
                        <div class="card-body flex flex-col gap-y-2">
                            <h4 class="text-lg leading-5 font-newsCycle font-semibold">Liverpool hammer Leeds for first
                                win in five games</h4>
                            <p class="text-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
                                sapiente nostrum possimus id dolor magnam fuga accusamus iure rerum in?</p>
                            <div class="category text-sm font-cuprum">
                                <span class="capitalize text-red">movies</span>
                                <span>.</span>
                                <span>4 min to read</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-head flex flex-col gap-y-2">
                            <img src="{{ asset('img/dummy.jpg') }}" alt="Card Thumbnail" class="rounded">
                            <div class="author font-cuprum text-sm flex gap-x-2 items-center">
                                <h3 class="capitalize">author</h3>
                                <span class="text-lg font-bold self-center">.</span>
                                <div class="created-at">
                                    12 minutes ago
                                </div>
                            </div>
                        </div>
                        <div class="card-body flex flex-col gap-y-2">
                            <h4 class="text-lg leading-5 font-newsCycle font-semibold">Liverpool hammer Leeds for first
                                win in five games</h4>
                            <p class="text-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
                                sapiente nostrum possimus id dolor magnam fuga accusamus iure rerum in?</p>
                            <div class="category text-sm font-cuprum">
                                <span class="capitalize text-red">movies</span>
                                <span>.</span>
                                <span>4 min to read</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Latest News End --}}
    </main>
    {{-- Main End --}}

    {{-- Footer --}}
    <x-footer></x-footer>
    {{-- Footer End --}}
</x-layout>