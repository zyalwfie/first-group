<x-layout :isNecessary="true">
    <x-slot:title>
        Sign In
    </x-slot:title>

    <main class="max-w-[800px] lg:my-12 md:mx-auto">
        <div class="rounded-md p-4 bg-flashWhite shadow shadow-grey">
            <div class="bg-vanilla p-6 rounded-md">
                <div class="max-w-sm mx-auto flex flex-col md:items-center justify-center gap-14">
                    <header class="flex flex-col gap-14 text-center">
                        <h1 class="font-newsCycle font-bold text-5xl text-red">firstGroup.</h1>
                        <div>
                            <h3 class="font-cuprum text-3xl font-bold">Welcome to Our Blog!</h3>
                            <span class="font-ekMukta text-sm text-gray-600">Register your account</span>
                        </div>
                    </header>
                    <form action="{{ route('register') }}" method="post" class="flex flex-col gap-8">
                        @csrf
                        <div class="flex flex-col md:flex-row gap-6">
                            <div class="flex flex-col gap-1">
                                <div class="relative flex flex-col-reverse">
                                    <input type="text" name="first_name" id="first-name"
                                        class="border-b-2 px-2 pt-2 pb-3 bg-transparent border-black focus:outline-none cursor-pointer" value="{{ old('first_name') }}" required>
                                    <label for="first-name"
                                        class="absolute top-0 translate-y-2 font-cuprum transition-all">First
                                        Name</label>
                                </div>
                                @error('first_name')
                                    <div class="text-red text-sm font-cuprum">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-1">
                                <div class="relative flex flex-col-reverse">
                                    <input type="text" name="last_name" id="last-name"
                                        class="border-b-2 px-2 pt-2 pb-3 bg-transparent border-black focus:outline-none cursor-pointer" value="{{ old('last_name') }}" required>
                                    <label for="last-name"
                                        class="absolute top-0 translate-y-2 font-cuprum transition-all">Last
                                        Name</label>
                                </div>
                                @error('last_name')
                                    <div class="text-red text-sm font-cuprum">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row gap-6">
                            <div class="flex flex-col gap-1">
                                <div class="relative flex flex-col-reverse">
                                    <input type="text" name="username" id="username"
                                        class="border-b-2 px-2 pt-2 pb-3 bg-transparent border-black focus:outline-none cursor-pointer" value="{{ old('username') }}" required>
                                    <label for="username"
                                        class="absolute top-0 translate-y-2 font-cuprum transition-all">Username</label>
                                </div>
                                @error('username')
                                    <div class="text-red text-sm font-cuprum">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-1">
                                <div class="relative flex flex-col-reverse">
                                    <input type="email" name="email" id="email"
                                        class="border-b-2 px-2 pt-2 pb-3 bg-transparent border-black focus:outline-none cursor-pointer" value="{{ old('email') }}" required>
                                    <label for="email"
                                        class="absolute top-0 translate-y-2 font-cuprum transition-all">Email</label>
                                </div>
                                @error('email')
                                    <div class="text-red text-sm font-cuprum">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="relative flex flex-col-reverse">
                                <input type="password" name="password" id="password"
                                    class="border-b-2 px-2 pt-2 pb-3 bg-transparent border-black focus:outline-none cursor-pointer" required>
                                <label for="password"
                                    class="absolute top-0 translate-y-2 font-cuprum transition-all">Password</label>
                                <span class="absolute right-2 top-0 translate-y-2 cursor-pointer toggle-password"
                                    data-target="password"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                        <path
                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                    </svg></span>
                            </div>
                            @error('password')
                                <div class="text-red text-sm font-cuprum">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="relative flex flex-col-reverse">
                                <input type="password" name="confirm_password" id="confirm-password"
                                    class="border-b-2 px-2 pt-2 pb-3 bg-transparent border-black focus:outline-none cursor-pointer" required>
                                <label for="confirm-password"
                                    class="absolute top-0 translate-y-2 font-cuprum transition-all">Confirm
                                    Password</label>
                                <span
                                    class="absolute right-2 top-0 translate-y-2 cursor-pointer toggle-confirm-password"
                                    data-target="confirm-password"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="20" fill="currentColor" class="bi bi-eye"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                        <path
                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                    </svg></span>
                            </div>
                            @error('confirm_password')
                                <div class="text-red text-sm font-cuprum">{{ $message }}</div>
                            @enderror
                        </div>
                        <button
                            class="px-4 py-2 rounded-full bg-red transition cursor-pointer capitalize font-newsCycle text-lg font-bold text-flashWhite border border-transparent hover:bg-transparent hover:border-red hover:text-red"
                            type="submit">sign
                            up</button>
                    </form>
                    <div class="text-xs font-ekMukta text-center">
                        Already have an account? <a href="{{ route('signin') }}" class="font-semibold">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
