<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <x-header></x-header>

    <main class="mb-10 mt-24">
        {{-- Slider --}}
        <section class="px-4 lg:px-40 xl:px-72">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @for ($i = 0; $i < $blogs->count(); $i++)
                        <div class="swiper-slide">
                            <a href="{{ route('blogs.show', $blogs[$i]->slug) }}">
                                <div
                                    class="relative after:content-[''] after:absolute after:w-full after:h-full after:inset-0 after:bg-gradient-to-b after:from-transparent after:to-[rgba(0,0,0,0.6)]">
                                    <img src="{{ $blogs[$i]->image }}" alt="{{ $blogs[$i]->title }}"
                                        class="w-full h-96 object-cover">
                                    <div class="absolute left-6 bottom-6 z-10 text-flashWhite">
                                        <h1 class="font-newsCycle text-4xl font-medium capitalize mb-2">
                                            {{ $blogs[$i]->title }}
                                        </h1>
                                        <p class="font-ekMukta font-light text-sm">{{ $blogs[$i]->content }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </section>

        {{-- All News by Category --}}
        <section class="mt-16 px-4 lg:px-40 xl:px-72">
            <div class="flex flex-col gap-y-4">
                <div class="latest-news-header flex justify-between items-center">
                    <div class="head-title">
                        <h2 class="font-bold text-2xl font-newsCycle capitalize">Blogs by <a
                                href="{{ route('blogs.authors.index', $user->username) }}"
                                class="text-red transition hover:text-vanilla">{{ $user->full_name }}</a></h2>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    {{-- Card --}}
                    @foreach ($blogs->skip($blogs->count() - 4) as $blog)
                        <div class="card">
                            <div class="card-head flex flex-col gap-y-2">
                                <a href="{{ route('blogs.show', $blog->slug) }}"><img src="{{ $blog->image }}"
                                        alt="{{ $blog->title }}" class="rounded"></a>
                                <div class="author font-cuprum text-sm flex gap-x-2 items-center">
                                    <a href="{{ route('blogs.authors.index', $blog->author->username) }}">
                                        <h3 class="capitalize hover:text-vanilla transition">
                                            {{ $blog->author->first_name }}</h3>
                                    </a>
                                    <span class="text-lg font-bold self-center">.</span>
                                    <div class="created-at">{{ $blog->created_at->diffForHumans() }}</div>
                                </div>
                            </div>
                            <div class="card-body flex flex-col gap-y-2">
                                <a href="{{ route('blogs.show', $blog->slug) }}" class="group">
                                    <h4
                                        class="text-lg leading-5 font-newsCycle font-semibold group-hover:text-red line-clamp-1 transition">
                                        {{ $blog->title }}</h4>
                                </a>
                                <p class="text-xs line-clamp-3">{{ $blog->content }}</p>
                                <div class="category text-sm font-cuprum">
                                    <a href="{{ route('blogs.tags.index', $blog->tag->slug) }}" class="group"><span
                                            class="capitalize text-red group-hover:text-vanilla transition">{{ $blog->tag->name }}</span></a>
                                    <span>.</span>
                                    <span>{{ $blog->time }} min to read</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- All News by Category End --}}
    </main>

    <x-footer></x-footer>
</x-layout>
