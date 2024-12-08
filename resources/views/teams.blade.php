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
            <div class="flex items-center gap-5 justify-center">
                <a href="{{ route('blogs.index') }}"
                    class="border border-grey rounded-md px-3 py-1.5 transition hover:shadow-[0_0_6px_#E5E3D4] hover:shadow-grey"><span><i
                            class='bx bx-news'></i></span> See blogs</a>
                <a href="{{ route('contact') }}"
                    class="rounded-md px-3 py-1.5 bg-red text-flashWhite transition hover:shadow-[0_0_6px_#e40510]">Get
                    in touch</a>
            </div>
        </div>

        <div class="flex flex-col md:flex-row md:gap-8 justify-center items-center gap-10 mt-20">
            @foreach ($teams as $key => $team)
                <div class="flex flex-col gap-4">
                    <div class="rounded-full md:rounded-lg overflow-hidden shadow-md shadow-duskBlack">
                        <div class="flex-1 flex flex-col gap-6 items-center relative group">
                            <img src="{{ asset('img/teams/obi.jpg') }}" alt="Team Member"
                                class="w-full md:h-60 object-cover rounded-full md:rounded-lg">
                            <div
                                class="hidden lg:flex flex-col justify-center items-center gap-1.5 absolute bg-[rgba(0,0,0,0.5)] backdrop-blur-sm text-flashWhite left-1.5 right-1.5 h-max py-2 translate-y-60 group-hover:translate-y-[9.25rem] transition ease-in-out duration-300 rounded-md">
                                <h2 class="text-2xl font-bold font-newsCycle capitalize">{{ $team->name }}</h2>
                                <div class="flex gap-2 text-2xl">
                                    @foreach ($team->social_media as $platform => $details)
                                        <span class="cursor-pointer"><i
                                                class='bx bxl-{{ $details['icon'] }}'></i></span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 justify-center items-center lg:hidden">
                        <h2 class="text-3xl font-bold font-newsCycle capitalize">{{ $team->name }}</h2>
                        <div class="flex gap-2 text-2xl">
                            @foreach ($team->social_media as $platform => $details)
                                <span><i class='bx bxl-{{ $details['icon'] }}'></i></span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </main>

</x-layout>
