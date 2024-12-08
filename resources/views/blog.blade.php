<x-layout>
    <x-slot:title>
        Blog Title
    </x-slot:title>

    <x-header></x-header>

    <div class="mt-20 mb-10 p-4 lg:px-40 xl:px-72">
        <article class="flex flex-col gap-7 mb-10">
            <header class="flex flex-col items-center gap-2">
                <div class="flex items-center justify-center gap-3">
                    <span class="px-3 py-0.5 bg-vanilla rounded-full font-ekMukta">{{ $blog->author->full_name }}</span>
                    <span class="font-cuprum">{{ $blog->created_at->format('F j, Y') }}</span>   
                </div>
                <h1 class="text-3xl font-newsCycle font-bold">{{ $blog->title }}</h1>
            </header>
            <main class="flex flex-col gap-2">
                <img src="{{ $blog->image }}" alt="Blog Image" class="h-48 md:h-80 lg:h-[500px] w-full object-cover">
                <section class="flex flex-col gap-1">
                    <p class="text-sm font-ekMukta">{{ $blog->content }}</p>
                </section>
            </main>
        </article>

        <section>
            <h2 class="font-bold text-2xl font-newsCycle capitalize mb-4">Related Blogs</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @for ($i = 0; $i < 4; $i++)
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
                @endfor
            </div>
        </section>
    </div>

    <x-footer></x-footer>
    
</x-layout>