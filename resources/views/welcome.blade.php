<x-layout>
    <x-slot:title>
        First Group
    </x-slot:title>

    <x-header></x-header>

    @if (session()->has('logout'))
        <div class="fixed bg-vanilla px-4 pt-2 pb-3 rounded-md shadow shadow-celadon right-4 top-4 transition overflow-hidden z-30"
            id="flash-message-container">
            <div class="flex items-center gap-2">
                <p class="font-newsCycle text-sm font-semibold">{{ session('logout') }}</p>
                <i class='bx bx-message-square-x'></i>
            </div>
            <div class="w-full h-1 bg-red absolute bottom-0 left-0 animate-shrink"></div>
        </div>
    @endif

    @if (session()->has('login'))
        <div class="fixed bg-vanilla px-4 pt-2 pb-3 rounded-md shadow shadow-celadon right-4 top-4 transition overflow-hidden z-30"
            id="flash-message-container">
            <div class="flex items-center gap-2">
                <p class="font-newsCycle text-sm font-semibold">{{ session('login') }}</p>
                <i class='bx bx-message-square-x'></i>
            </div>
            <div class="w-full h-1 bg-red absolute bottom-0 left-0 animate-shrink"></div>
        </div>
    @endif

    <main class="mb-10 mt-24">
        {{-- Greetings --}}
        <section class="mb-16 bg-honeydew">
            <div class="px-4 py-6 rounded-md text-center flex flex-col gap-y-2 items-center">
                <h1 class="uppercase font-newsCycle tracking-widest">welcome to firstGroup</h1>
                <p class="font-cuprum font-bold text-xl">Craft naratives ✍️ that ignite <span class="text-red">inspiration
                        💡</span>,<br /> <span class="text-red">knowledge 📕</span> and
                    <span class="text-red">entertainment 🎬</span>
                </p>
            </div>
        </section>
        {{-- Greetings End --}}

        {{-- Hero --}}
        <section class="px-4 lg:px-40 xl:px-72">
            @foreach ($headBlog as $blog)
                <div class="content flex flex-col md:flex-row md:items-center md:gap-x-8 gap-y-8">
                    <img src="{{ $blog->image }}" alt="{{ $blog->title }}"
                        class="w-[100%] h-auto md:h-64 lg:h-60 rounded object-cover">
                    <div class="details flex flex-col gap-y-3">
                        <div class="author font-cuprum text-lg flex gap-x-2 items-center">
                            <a href="{{ route('blogs.authors.index', $blog->author->username) }}" class="group">
                                <h3 class="capitalize group-hover:text-vanilla transition">
                                    {{ $blog->author->first_name }}</h3>
                            </a>
                            <span class="text-lg font-bold self-center">.</span>
                            <div class="created-at">
                                {{ $blog->created_at->diffForHumans() }}
                            </div>
                        </div>
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="group">
                            <h1
                                class="text-2xl md:text-3xl capitalize font-bold font-newsCycle group-hover:text-red transition">
                                {{ $blog->title }}
                            </h1>
                        </a>
                        <div class="text-base font-ekMukta font-light">
                            <p>{{ $blog->content }}</p>
                        </div>
                        <div class="category font-cuprum">
                            <a href="{{ route('blogs.tags.index', $blog->tag->slug) }}" class="group"><span
                                    class="capitalize text-red group-hover:text-vanilla transition">{{ $blog->tag->name }}</span></a>
                            <span>.</span>
                            <span>{{ $blog->time }} min to read</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
        {{-- Hero End --}}

        {{-- Latest News --}}
        <section class="mt-16 px-4 lg:px-40 xl:px-72">
            <div class="flex flex-col gap-y-4">
                <div class="latest-news-header flex justify-between items-center">
                    <div class="head-title">
                        <a href="{{ route('blogs.index') }}">
                            <h2 class="font-bold text-2xl font-newsCycle capitalize">latest news</h2>
                        </a>
                    </div>
                    <a href="{{ route('blogs.index') }}"
                        class="group hover:animate-pulse font-semibold text-red capitalize flex gap-x-1">
                        see all
                        <span class="self-center group-hover:animate-wiggle transition"><i
                                class='bx bx-right-arrow-alt bx-sm'></i></span>
                    </a>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    {{-- Card --}}
                    @foreach ($previewBlogs as $blog)
                        <div class="card">
                            <div class="card-head flex flex-col gap-y-2">
                                <a href="{{ route('blogs.show', $blog->slug) }}"><img src="{{ $blog->image }}"
                                        alt="{{ $blog->title }}" class="rounded"></a>
                                <div class="author font-cuprum text-sm flex gap-x-2 items-center">
                                    <a href="{{ route('blogs.authors.index', $blog->author->username) }}" class="group">
                                        <h3 class="capitalize group-hover:text-vanilla transition">
                                            {{ $blog->author->first_name }}</h3>
                                    </a>
                                    <span class="text-lg font-bold self-center">.</span>
                                    <div class="created-at">{{ $blog->created_at->diffForHumans() }}</div>
                                </div>
                            </div>
                            <div class="card-body flex flex-col gap-y-2">
                                <a href="{{ route('blogs.show', $blog->slug) }}" class="group">
                                    <h4
                                        class="text-lg group-hover:text-red leading-5 font-newsCycle font-semibold line-clamp-1 transition">
                                        {{ $blog->title }}</h4>
                                </a>
                                <p class="text-sm line-clamp-3">
                                    {{ $blog->content }}
                                </p>
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
        {{-- Latest News End --}}
    </main>

    <x-footer></x-footer>
</x-layout>
