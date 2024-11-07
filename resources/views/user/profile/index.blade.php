<x-user-layout>
    <x-slot:title>
        Profile
    </x-slot:title>

    <div class="bg-honeydew px-6 py-4 rounded-md flex flex-col gap-y-6">
        <div class="bg-honeydew flex flex-col gap-y-2">
            <span class="font-semibold font-newsCycle text-lg capitalize">profile picture</span>
            <div class="flex gap-7 items-center">
                <img src="{{ asset('img/dummy.jpg') }}" alt="Profile Picture" class="w-24 h-24 rounded-full">
                <div class="flex gap-3">
                    <a href="" class="px-4 py-1 rounded-md capitalize font-cuprum bg-vanilla">change
                        picture</a>
                    <a href=""
                        class="px-4 py-1 rounded-md capitalize font-cuprum border border-red text-red transition hover:bg-red hover:text-honeydew">delete
                        picture</a>
                </div>
            </div>
        </div>

        <form action="" class="flex flex-col gap-4">
            <div class="flex flex-col gap-2">
                <label for="profile-name" class="font-newsCycle font-semibold first-letter:capitalize">profile name</label>
                <input type="text" value="first group" class="px-4 py-1 rounded-md capitalize">
            </div>
            <div class="flex flex-col gap-2">
                <label for="username" class="font-newsCycle font-semibold first-letter:capitalize">username</label>
                <input type="text" value="firstGroup." class="px-4 py-1 rounded-md capitalize text-grey">
                <div class="font-cuprum text-sm first-letter:capitalize">
                    available change in 21/04/3032
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <label for="status" class="font-newsCycle font-semibold first-letter:capitalize">status recently</label>
                <input type="text" value="On duty" class="px-4 py-1 rounded-md">
            </div>
            <div class="flex flex-col gap-2">
                <label for="status" class="font-newsCycle font-semibold first-letter:capitalize">about me</label>
                <textarea type="text" class="p-4 rounded-md" rows="5">Discuss only on work our, unless you wanna discuss about me 🤘</textarea>
            </div>
        </form>
    </div>
</x-user-layout>