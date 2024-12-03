<x-layout>
    <x-slot:title>
        Our Teams
    </x-slot:title>

    <x-header></x-header>

    <main class="mt-32 px-4 lg:px-40 xl:px-72">
        <div class="flex flex-col gap-6">
            <h1 class="text-5xl font-bold font-newsCycle text-center">Meet our beautiful team</h1>
            <p class="font-ekMukta text-center">Our philosophy is simple, hire great people and give them the<br
                    class="hidden sm:block" /> resources and support to do their best work.</p>
            <div class="flex items-center gap-3 justify-center">
                <a href="" class="border border-grey rounded-md px-3 py-1.5 shadow"><span><i
                            class='bx bx-news'></i></span> See blogs</a>
                <a href="" class="rounded-md px-3 py-1.5 bg-red text-flashWhite shadow">Get in touch</a>
            </div>
        </div>
        <div class="flex flex-col md:flex-row md:gap-8 justify-center items-center gap-10 mt-20">
            @for ($i = 0; $i < 3; $i++)
                <div class="flex flex-col max-w-52 gap-4">
                    <div class="rounded-full md:rounded-lg overflow-hidden shadow-md shadow-duskBlack">
                        <div class="flex-1 flex flex-col gap-6 items-center relative group">
                            <img src="{{ asset('img/dummy.jpg') }}" alt="Team Member"
                                class="w-full md:h-60 object-cover rounded-full md:rounded-lg">
                            <div
                                class="flex flex-col justify-center items-center gap-1.5 absolute bg-[rgba(0,0,0,0.5)] backdrop-blur-sm text-flashWhite left-1.5 right-1.5 h-max py-2 translate-y-60 group-hover:translate-y-36 transition ease-in-out duration-300 rounded-md">
                                <h2 class="text-2xl font-bold font-newsCycle">Ziyad Alwafie</h2>
                                <div class="flex gap-2 text-2xl">
                                    <span class="cursor-pointer"><i class='bx bxl-instagram-alt'></i></span>
                                    <span class="cursor-pointer"><i class='bx bxl-youtube'></i></span>
                                    <span class="cursor-pointer"><i class='bx bxl-tiktok'></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 justify-center items-center lg:hidden">
                        <h2 class="text-3xl font-bold font-newsCycle">Ziyad Alwafie</h2>
                        <div class="flex gap-2 text-2xl">
                            <span><i class='bx bxl-instagram-alt'></i></span>
                            <span><i class='bx bxl-tiktok'></i></span>
                            <span><i class='bx bxl-youtube'></i></span>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </main>

</x-layout>