<x-user-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>

    <div class="bg-honeydew p-6 rounded-md flex flex-col gap-y-6">
        <div class="table-title flex flex-col gap-y-5">
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
            <table class="w-full text-left bg-white table-auto">
                <thead class="text-md font-newsCycle border-b border-vanilla">
                    <tr>
                        <th scope="col" class="px-6 py-4">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-4 hidden">
                            Created At
                        </th>
                        <th scope="col" class="px-6 py-4 hidden">
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
                        <td class="px-6 py-4 hidden">
                            12 November 2024
                        </td>
                        <td class="px-6 py-4 hidden">
                            30 Desember 2024
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" class="px-6 py-4">
                            Liverpool hammer Leeds for first
                            win in five games
                        </td>
                        <td class="px-6 py-4 hidden">
                            12 November 2024
                        </td>
                        <td class="px-6 py-4 hidden">
                            30 Desember 2024
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" class="px-6 py-4">
                            Liverpool hammer Leeds for first
                            win in five games
                        </td>
                        <td class="px-6 py-4 hidden">
                            12 November 2024
                        </td>
                        <td class="px-6 py-4 hidden">
                            30 Desember 2024
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" class="px-6 py-4">
                            Liverpool hammer Leeds for first
                            win in five games
                        </td>
                        <td class="px-6 py-4 hidden">
                            12 November 2024
                        </td>
                        <td class="px-6 py-4 hidden">
                            30 Desember 2024
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" class="px-6 py-4">
                            Liverpool hammer Leeds for first
                            win in five games
                        </td>
                        <td class="px-6 py-4 hidden">
                            12 November 2024
                        </td>
                        <td class="px-6 py-4 hidden">
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

    <div class="flex gap-6">
        <div class="bg-honeydew px-6 py-4 rounded-md flex flex-col gap-y-2">
            <span class="font-semibold font-newsCycle text-lg capitalize">profile picture</span>
            <div class="flex flex-col md:flex-row md:items-center gap-4">
                <img src="{{ asset('img/dummy.jpg') }}" alt="Profile Picture" class="w-16 h-16 rounded-full">
                <div class="flex gap-3">
                    <a href="" class="px-4 py-1 rounded-md capitalize font-cuprum bg-vanilla border-2 border-transparent transition hover:bg-honeydew hover:border-vanilla">change
                        picture</a>
                    <a href=""
                        class="px-4 py-1 rounded-md capitalize font-cuprum border border-red text-red transition hover:bg-red hover:text-honeydew">delete
                        picture</a>
                </div>
            </div>
        </div>
        <div class="flex-1 p-4 bg-honeydew rounded-md hidden lg:block">
            <a href="">
                <textarea placeholder="Write a blog" class="rounded-md w-full h-full cursor-pointer" disabled></textarea>
            </a>
        </div>
    </div>
</x-user-layout>