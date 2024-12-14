<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>

    @vite('resources/css/app.css')
</head>

<body class="font-poppins w-screen min-h-screen overflow-x-hidden">
    @include('partial.header')
    <main class="flex w-screen min-h-screen">
        @include('partial.sidebar')
        <article id="main-content" class="w-full transition-all duration-300 @if (!Route::is('users.test')) mt-24 p-16 ml-64 @endif">
            @yield('content')
        </article>
    </main>
    @yield('footer')
    @yield('script')
    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const mainContent = document.getElementById('main-content');

        var sidebarStatus = localStorage.getItem('sidebarStatus');
        if (sidebarStatus === 'closed') {
            sidebar.classList.add('-translate-x-full');
            mainContent.classList.add('!ml-0');
        } else {
            localStorage.setItem('sidebarStatus', 'opened');
        }
        
        sidebarToggle.addEventListener('click', () => {
            localStorage.setItem('sidebarStatus', sidebar.classList.contains('-translate-x-full') ? 'opened' : 'closed');
            sidebar.classList.toggle('-translate-x-full');
            mainContent.classList.toggle('!ml-0');
        });
    </script>
</body>

</html>
