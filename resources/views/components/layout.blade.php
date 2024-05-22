<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased text-white font-hanken-grotesk ">
    <div class="relative min-h-screen px-10 py-10 bg-gray-100 bg-center sm:justify-center sm:items-center bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="text-center sm:fixed sm:top-0 sm:right-10 sm:left-10">
            <nav class="flex items-center justify-between py-2 font-semibold text-gray-600 border-b border-white/20 dark:text-gray-400">   
                <div>
                    <a href="/">
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
                    </a>
                </div>

                <div class="space-x-6 font-bold">
                    <x-nav-link href="#">Jobs</x-nav-link>
                    <x-nav-link href="#">Careers</x-nav-link>
                    <x-nav-link href="#">Salaries</x-nav-link>
                    <x-nav-link href="#">Companies</x-nav-link>
                </div>

                @auth
                    <div class="flex space-x-6 font-bold">
                        <a href="/jobs/create">Post a Job</a>
                    
                        <form method="POST" action="/logout">
                            @csrf
                            @method('DELETE')
                            <button>Log Out</button>
                        </form>
                    </div>
                @endauth

                @guest
                    <div class="space-x-2 font-bold">
                        <x-nav-link href="{{ route('register') }}">Sign up</x-nav-link>
                        <x-nav-link href="{{ route('login') }}">Log in</x-nav-link> 
                    </div>
                @endguest

            </nav>
        </div>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>