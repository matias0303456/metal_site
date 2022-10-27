<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    @vite('resources/css/app.css')
</head>

<body class="bg-zinc-900 text-zinc-900 font-mono p-2">

    <header class="bg-slate-50 rounded-sm p-3 px-8 flex justify-between">
        <h1 class="p-1">
            The Portal of Metal
        </h1>
        <nav>
            <ul class="flex gap-3">
                <a href="{{ route('home') }}">
                    <li class="p-1 duration-75 hover:rounded-sm hover:bg-zinc-500 hover:text-slate-50">
                        Home
                    </li>
                </a>
                <li class="p-1 duration-75 hover:rounded-sm hover:bg-zinc-500 hover:text-slate-50">
                    <a href="">
                        Genres
                    </a>
                </li>
                <a href="">
                    <li class="p-1 duration-75 hover:rounded-sm hover:bg-zinc-500 hover:text-slate-50">
                        Bands
                    </li>
                </a>
                <a href="">
                    <li class="p-1 duration-75 hover:rounded-sm hover:bg-zinc-500 hover:text-slate-50">
                        Albums
                    </li>
                </a>
                <a href="">
                    <li class="p-1 duration-75 hover:rounded-sm hover:bg-zinc-500 hover:text-slate-50">
                        Songs
                    </li>
                </a>
                <a href="">
                    <li class="p-1 duration-75 hover:rounded-sm hover:bg-zinc-500 hover:text-slate-50">
                        Members
                    </li>
                </a>
                <a href="{{ route('get_countries') }}">
                    <li class="p-1 duration-75 hover:rounded-sm hover:bg-zinc-500 hover:text-slate-50">
                        Countries
                    </li>
                </a>
            </ul>
        </nav>
    </header>

    <main class="bg-slate-50 my-1 rounded-sm p-3">
        @yield('content')
    </main>

    <footer class="bg-slate-50 rounded-sm p-1 absolute bottom-0 right-0 text-xs ">
        The Portal of Metal | All rights reserved &copy; <?= date('Y') ?>
    </footer>

</body>

</html>