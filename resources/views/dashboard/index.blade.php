<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.css'])
    <title>Dashboard</title>
</head>

<body>

    <main>
        <aside class="fixed top-4 bottom-4 left-4 bg-honeydew p-6 min-w-64 rounded-md flex">
            <div class="flex-1 flex flex-col gap-y-3">
                <div class="brand">
                    <a href="{{ route('welcome') }}">
                        <h1 class="font-bold font-newsCycle text-4xl text-red">firstGroup.</h1>
                    </a>
                </div>
                <div class="border-t border-celadon my-4"></div>
                <div class="flex-1 flex flex-col justify-between">
                    <div class="flex flex-col gap-y-2">
                        <a href=""
                            class="p-2 text-lg bg-vanilla rounded shadow-sm shadow-black font-cuprum capitalize transition hover:bg-vanilla hover:shadow-sm  hover:shadow-black cursor-pointer"><span><i
                                    class='bx bxs-grid-alt'></i></span> dashboard</a>
                        <a href=""
                            class="p-2 text-lg rounded font-cuprum capitalize transition hover:bg-vanilla hover:shadow-sm  hover:shadow-black cursor-pointer"><span><i
                                    class='bx bxl-blogger'></i></span> blogs</a>
                        <a href=""
                            class="p-2 text-lg rounded font-cuprum capitalize transition hover:bg-vanilla hover:shadow-sm  hover:shadow-black cursor-pointer"><span><i
                                    class='bx bxs-edit'></i></span> write</a>
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <a href="{{ route('profile.index') }}"
                            class="p-2 text-lg rounded font-cuprum capitalize transition hover:bg-vanilla hover:shadow-sm  hover:shadow-black cursor-pointer"><span><i
                                    class='bx bx-male'></i></span> profile</a>
                        <a href=""
                            class="p-2 text-lg rounded font-cuprum capitalize transition hover:bg-vanilla hover:shadow-sm  hover:shadow-black cursor-pointer"><span><i
                                    class='bx bx-log-out-circle'></i></span> sign out</a>
                    </div>
                </div>
            </div>
        </aside>

        <section class="ml-[18rem] mt-4 mr-4 flex flex-col gap-y-4">

            <header class="bg-honeydew rounded-md px-6 py-4 flex gap-x-10 items-center">
                <form action="" class="flex-1">
                    <div class="relative">
                        <input type="search" class="w-full px-4 py-2 rounded-md font-newsCycle" placeholder="Search">
                        <span class="absolute top-[50%] right-4 translate-y-[-50%]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: #000100;transform: ;msFilter:;">
                                <path
                                    d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                                </path>
                            </svg>
                        </span>
                    </div>
                </form>
                <div class="flex-1">
                    <p class="capitalize flex items-center gap-x-1 font-newsCycle">monday, 12th march <span><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                style="fill: #000100;transform: ;msFilter:;">
                                <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z">
                                </path>
                            </svg></span></p>
                </div>
                <div class="flex-1 flex gap-x-2 justify-end items-center">
                    <img src="{{ asset('img/dummy.jpg') }}" alt="Avatar" class="rounded-full w-12 shadow">
                    <span class="capitalize font-cuprum text-lg">ziyad alwafie</span>
                </div>
            </header>

            <div class="bg-honeydew px-6 py-4 rounded-md flex flex-col gap-y-6">
                <div class="table-title flex justify-between items-center">
                    <h1 class="text-4xl font-semibold font-newsCycle">Blogs you've been posted</h1>
                    <div class="flex items-center gap-x-8">
                        <div class="flex flex-col gap-y-2">
                            <h2 class="text-4xl font-semibold font-newsCycle">94</h2>
                            <span class="text-base text-grey font-ekMukta capitalize">posted</span>
                        </div>
                        <div class="border-r border-grey h-12"></div>
                        <div class="flex flex-col gap-y-2">
                            <h2 class="text-4xl font-semibold font-newsCycle">23</h2>
                            <span class="text-base text-grey font-ekMukta capitalize">draft</span>
                        </div>
                    </div>
                </div>
                {{-- Table --}}
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-left bg-white">
                        <thead class="text-md font-newsCycle border-b border-vanilla">
                            <tr>
                                <th scope="col" class="px-6 py-4">
                                    Title
                                </th>
                                <th scope="col" class="px-6 py-4">
                                    Created At
                                </th>
                                <th scope="col" class="px-6 py-4">
                                    Updated At
                                </th>
                            </tr>
                        </thead>
                        <tbody class="font-cuprum">
                            <tr>
                                <td scope="row" class="px-6 py-4">
                                    Liverpool hammer Leeds for first
                                    win in five games
                                </td>
                                <td class="px-6 py-4">
                                    12 November 2024
                                </td>
                                <td class="px-6 py-4">
                                    30 Desember 2024
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="px-6 py-4">
                                    Liverpool hammer Leeds for first
                                    win in five games
                                </td>
                                <td class="px-6 py-4">
                                    12 November 2024
                                </td>
                                <td class="px-6 py-4">
                                    30 Desember 2024
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="px-6 py-4">
                                    Liverpool hammer Leeds for first
                                    win in five games
                                </td>
                                <td class="px-6 py-4">
                                    12 November 2024
                                </td>
                                <td class="px-6 py-4">
                                    30 Desember 2024
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="px-6 py-4">
                                    Liverpool hammer Leeds for first
                                    win in five games
                                </td>
                                <td class="px-6 py-4">
                                    12 November 2024
                                </td>
                                <td class="px-6 py-4">
                                    30 Desember 2024
                                </td>
                            </tr>
                        </tbody>
                        <tfoot class="border-t border-vanilla">
                            <tr>
                                <td colspan="3" class="text-end px-6 py-4">
                                    <a href=""
                                        class="px-6 py-1 rounded-md inline-block bg-vanilla font-semibold font-newsCycle capitalize transition hover:scale-95">see
                                        all</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    {{-- Table End --}}
                </div>
            </div>

            <div class="flex gap-x-4">
                <div class="bg-honeydew px-6 py-4 rounded-md flex flex-col gap-y-2">
                    <span class="font-semibold font-newsCycle text-lg capitalize">profile picture</span>
                    <div class="flex gap-7 items-center">
                        <img src="{{ asset('img/dummy.jpg') }}" alt="Profile Picture" class="w-16 h-16 rounded-full">
                        <div class="flex gap-3">
                            <a href="" class="px-4 py-1 rounded-md capitalize font-cuprum bg-vanilla">change
                                picture</a>
                            <a href=""
                                class="px-4 py-1 rounded-md capitalize font-cuprum border border-red text-red transition hover:bg-red hover:text-honeydew">delete
                                picture</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 p-4 bg-honeydew rounded-md">
                    <a href="">
                        <textarea placeholder="Write a blog" class="w-full h-full rounded-md cursor-pointer" disabled></textarea>
                    </a>
                </div>
            </div>
        </section>
    </main>

</body>

</html>
