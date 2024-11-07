<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <main>
        <x-user-sidebar></x-user-sidebar>

        <section class="ml-[18rem] mt-4 mr-4 flex flex-col gap-y-4">

            <x-user-header></x-user-header>
            
            {{ $slot }}
        </section>
    </main>
</x-layout>