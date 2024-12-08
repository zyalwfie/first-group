<x-layout>
    <x-slot:title>
        Contact Information
    </x-slot:title>

    <x-header></x-header>

    <main class="mt-24 md:mt-28 my-10 px-4 lg:px-40 xl:px-72 flex flex-col gap-10 md:flex-row">
        <section class="flex flex-col gap-8 flex-1">
            <div class="flex flex-col gap-3">
                <h1 class="font-newsCycle text-5xl font-bold">Contact Us</h1>
                <p class="font-ekMukta text-sm font-light">Email, call, or complete the form to learn how firstGroup can solve your messaging problem</p>
                <address class="font-ekMukta text-sm font-light">
                    <div class="mb-1">fristgroup@gmail.com</div>
                    <div>+62 82233344</div>
                </address>
            </div>
            <div class="flex flex-col gap-4">
                @foreach ($contacts as $contact)
                <div class="flex flex-col gap-1">
                    <h3 class="text-lg font-newsCycle font-semibold">{{ $contact->section_title }}</h3>
                    <p class="font-ekMukta font-light text-sm">{{ $contact->description }}</p>
                </div>
                @endforeach
            </div>
        </section>
        <section class="flex-1">
            <div class="flex flex-col gap-7">
                <div class="flex flex-col gap-1">
                    <h2 class="text-3xl font-newsCycle font-semibold">Get in touch</h2>
                    <p class="font-ekMukta font-light">You can reach us anytime</p>
                </div>
                <form action="" class="flex flex-col gap-4">
                    <div class="flex flex-col xl:flex-row gap-4">
                        <input type="text" class="flex-1 p-3 rounded-md border border-grey focus:outline-none focus:border-duskBlack transition" placeholder="First name">
                        <input type="text" class="flex-1 p-3 rounded-md border border-grey focus:outline-none focus:border-duskBlack transition" placeholder="Last name">
                    </div>
                    <div class="relative">
                        <input type="email" class="w-full py-3 pr-3 pl-11 rounded-md border border-grey focus:outline-none focus:border-duskBlack transition" placeholder="Your email">
                        <span class="absolute top-1/2 -translate-y-1/2 left-3 text-grey text-2xl"><i class='bx bx-envelope'></i></span>
                    </div>
                    <div class="flex">
                        <div class="p-3 w-14 border border-grey border-e-0 rounded-s-md font-cuprum font-semibold flex justify-center items-center">+62</div>
                        <input type="tel" class="w-full p-3 rounded-e-md border border-grey focus:outline-none focus:border-duskBlack transition"class="p-3 rounded-md border border-grey focus:outline-none focus:border-duskBlack transition">
                    </div>
                    <textarea rows="5" placeholder="How can we help?" class="p-3 rounded-md border border-grey focus:outline-none focus:border-duskBlack transition"></textarea>
                    <div class="flex flex-col gap-1">
                        <button type="submit" class="font-cuprum text-lg font-semibold rounded-full p-2 bg-red text-flashWhite">Submit</button>
                        <p class="text-grey font-ekMukta font-light text-center">By contacting us, you agree to our <span class="text-duskBlack font-semibold">Terms<br/> of service</span> and <span class="text-duskBlack font-semibold">Privacy Policy</span></p>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <x-footer></x-footer>
</x-layout>
