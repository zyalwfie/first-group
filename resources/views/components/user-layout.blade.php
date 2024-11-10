<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/css/base.css'])
    <title>{{ $title }}</title>
</head>

<body>
    <main>
        <x-user-sidebar></x-user-sidebar>

        <section class="m-4 md:ml-72 flex flex-col gap-y-4">

            <x-user-header></x-user-header>

            {{ $slot }}

        </section>
    </main>

    <script>
        const overlay = document.querySelector('.overlay');
        const sidebar = document.querySelector('aside');
        const showSidebarBtn = document.querySelector('#show-sidebar-btn');
        const closeSidebarBtn = document.querySelector('#close-sidebar-btn');

        function toggleSidebar() {
            sidebar.classList.toggle('show');
            overlay.classList.toggle('show');
        }

        showSidebarBtn.addEventListener('click', toggleSidebar);
        closeSidebarBtn.addEventListener('click', toggleSidebar);

        document.addEventListener('click', (e) => {
            if (e.target == sidebar) {
                sidebar.classList.remove('show');
                overlay.classList.remove('show');
            }
        })
    </script>
</body>

</html>
