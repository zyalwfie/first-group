<x-user-layout>
    <x-slot:title>
        Write
    </x-slot:title>

    <div class="bg-honeydew px-6 py-4 rounded-md flex flex-col gap-y-6">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-span-full">
                <label for="cover-photo" class="block font-cuprum capitalize">image</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-vanilla px-6 py-10">
                    <div class="text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="mt-4 flex gap-2 items-center text-sm/6 text-grey">
                            <label for="image"
                                class="px-2 py-1 relative cursor-pointer rounded-md bg-white font-semibold text-red focus-within:outline-none focus-within:ring-2 focus-within:ring-red focus-within:ring-offset-2">
                                <span>Upload a file</span>
                                <input id="image" name="image" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        {{-- <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p> --}}
                    </div>
                </div>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm/6 font-cuprum">First name</label>
                    <div class="mt-2">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                            class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-grey placeholder:text-grey focus:ring-2 focus:ring-inset focus:ring-red sm:text-sm/6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="last-name" class="block text-sm/6 font-cuprum">Last name</label>
                    <div class="mt-2">
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                            class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-grey placeholder:text-grey focus:ring-2 focus:ring-inset focus:ring-red sm:text-sm/6">
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="street-address" class="block text-sm/6 font-cuprum">Title</label>
                    <div class="mt-2">
                        <input type="text" name="street-address" id="street-address" autocomplete="street-address"
                            class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-grey placeholder:text-grey focus:ring-2 focus:ring-inset focus:ring-red sm:text-sm/6">
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="about" class="block text-sm/6 font-cuprum">Content</label>
                    <div class="mt-2">
                        <textarea id="about" name="about" rows="3"
                            class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-grey placeholder:text-grey focus:ring-2 focus:ring-inset focus:ring-red sm:text-sm/6"></textarea>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="teg" class="block text-sm/6 font-cuprum">Tag</label>
                    <div class="mt-2">
                        <input type="text" name="teg" id="teg" autocomplete="given-name"
                            class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-grey placeholder:text-grey focus:ring-2 focus:ring-inset focus:ring-red sm:text-sm/6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="time" class="block text-sm/6 font-cuprum">Time</label>
                    <div class="mt-2">
                        <input type="number" name="time" id="time" autocomplete="family-name"
                            class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-grey placeholder:text-grey focus:ring-2 focus:ring-inset focus:ring-red sm:text-sm/6">
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-user-layout>
