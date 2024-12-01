<x-layout>
    <x-slot:title>
        All Blogs
    </x-slot:title>

    <x-header></x-header>

    <main class="my-10">
        {{-- Slider --}}
        <section class="px-4 lg:px-40 xl:px-72">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @for ($i = 0; $i < 5; $i++)
                        <div class="swiper-slide">
                        <div
                            class="relative after:content-[''] after:absolute after:w-full after:h-full after:inset-0 after:bg-gradient-to-b after:from-transparent after:to-[rgba(0,0,0,0.6)]">
                            <img src="{{ asset('img/dummy.jpg') }}" alt="Dummy Image" class="w-full h-96 object-cover">
                            <div class="absolute left-6 bottom-6 z-10 text-flashWhite">
                                <h1 class="font-newsCycle text-4xl font-medium capitalize mb-2">title</h1>
                                <p class="font-ekMukta font-light text-sm">Lorem ipsum dolor, sit amet consectetur
                                    adipisicing elit. Consequatur, corrupti!</p>
                            </div>
                        </div>
                </div>
                @endfor
            </div>
            <div class="swiper-scrollbar"></div>
            </div>
        </section>

        {{-- Latest News --}}
        <section class="mt-16 px-4 lg:px-40 xl:px-72">
            <div class="flex flex-col gap-y-4">
                <div class="latest-news-header flex justify-between items-center">
                    <div class="head-title">
                        <a href="{{ route('welcome') }}">
                            <h2 class="font-bold text-2xl font-newsCycle capitalize">animal</h2>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    {{-- Card --}}
                    @for ($i = 0; $i < 4; $i++)
                        <div class="card">
                        <div class="card-head flex flex-col gap-y-2">
                            <a href=""><img src="{{ asset('img/dummy.jpg') }}"
                                    alt="Card Thumbnail" class="rounded"></a>
                            <div class="author font-cuprum text-sm flex gap-x-2 items-center">
                                <h3 class="capitalize">author</h3>
                                <span class="text-lg font-bold self-center">.</span>
                                <div class="created-at">12 minutes ago</div>
                            </div>
                        </div>
                        <div class="card-body flex flex-col gap-y-2">
                            <a href="">
                                <h4 class="text-lg leading-5 font-newsCycle font-semibold">Liverpool hammer Leeds
                                    for
                                    first
                                    win in five games</h4>
                            </a>
                            <p class="text-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
                                sapiente nostrum possimus id dolor magnam fuga accusamus iure rerum in?</p>
                            <div class="category text-sm font-cuprum">
                                <span class="capitalize text-red">movies</span>
                                <span>.</span>
                                <span>4 min to read</span>
                            </div>
                        </div>
                </div>
                @endfor
            </div>
            </div>
        </section>
        {{-- Latest News End --}}

        {{-- Latest News --}}
        <section class="mt-16 px-4 lg:px-40 xl:px-72">
            <div class="flex flex-col gap-y-4">
                <div class="latest-news-header flex justify-between items-center">
                    <div class="head-title">
                        <a href="{{ route('welcome') }}">
                            <h2 class="font-bold text-2xl font-newsCycle capitalize">criminal</h2>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    {{-- Card --}}
                    @for ($i = 0; $i < 4; $i++)
                        <div class="card">
                        <div class="card-head flex flex-col gap-y-2">
                            <a href=""><img src="{{ asset('img/dummy.jpg') }}"
                                    alt="Card Thumbnail" class="rounded"></a>
                            <div class="author font-cuprum text-sm flex gap-x-2 items-center">
                                <h3 class="capitalize">author</h3>
                                <span class="text-lg font-bold self-center">.</span>
                                <div class="created-at">12 minutes ago</div>
                            </div>
                        </div>
                        <div class="card-body flex flex-col gap-y-2">
                            <a href="">
                                <h4 class="text-lg leading-5 font-newsCycle font-semibold">Liverpool hammer Leeds
                                    for
                                    first
                                    win in five games</h4>
                            </a>
                            <p class="text-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat
                                sapiente nostrum possimus id dolor magnam fuga accusamus iure rerum in?</p>
                            <div class="category text-sm font-cuprum">
                                <span class="capitalize text-red">movies</span>
                                <span>.</span>
                                <span>4 min to read</span>
                            </div>
                        </div>
                </div>
                @endfor
            </div>
            </div>
        </section>
        {{-- Latest News End --}}
    </main>

    <x-footer></x-footer>
</x-layout>