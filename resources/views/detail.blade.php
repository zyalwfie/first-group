<x-layout>
    <x-slot:title>
        Blog Title
    </x-slot:title>


    <div class="my-10 p-4 lg:px-40 xl:px-72">
        <article class="flex flex-col gap-10 mb-10">
            <header class="flex flex-col items-center gap-3">
                <div class="flex items-center justify-center gap-3">
                    <span class="px-3 py-0.5 bg-vanilla rounded-full font-ekMukta">Author</span>
                    <span class="font-cuprum">October 23, 2024</span>   
                </div>
                <h1 class="text-6xl font-newsCycle font-bold">Title of the Blog</h1>
            </header>
            <main>
                <img src="{{ asset('img/dummy.jpg') }}" alt="Blog Image" class="h-[500px] w-full object-cover mb-4">
                <section class="flex flex-col gap-3">
                    <h2 class="text-3xl font-newsCycle font-semibold">Sub Header</h2>
                    <p class="font-ekMukta font-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus facilis expedita fugit, laborum ducimus quis illum voluptate aperiam a sequi velit itaque pariatur cumque porro magni ullam tempora qui eveniet tenetur beatae eligendi animi? Quis beatae tempore, ex, similique voluptatum odio laudantium officiis recusandae a modi obcaecati id ratione assumenda.</p>
                </section>
            </main>
        </article>

        <section>
            <h2 class="font-bold text-2xl font-newsCycle capitalize mb-4">Related Blogs</h2>
            <div class="grid grid-cols-4 gap-x-4">
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
</x-layout>