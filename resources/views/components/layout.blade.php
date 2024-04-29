<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/images/site.webmanifest') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/styles.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#f56f16",
                    },
                },
            },
        };
    </script>
    <title>Cadenza | Find Music Gigs & Events</title>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center">
        <a href="/"><img class="w-32" src="{{ asset('images/cadenza.png') }}" alt="Cadenza logo"
                class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
                <li>
                    <span class="font-bold uppercase">
                        Hello, {{ auth()->user()->firstname }}
                    </span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage
                        Gigs</a>
                </li>
                <li>
                    <form method="POST" class="inline" action="/logout">
                        @csrf
                        <button type="submit" class="hover:text-laravel"><i class="fa-solid fa-sign-out hover:text-laravel"></i> Logout</button>
                    </form>
                </li>
            @else
                <li>
                    <a href="/signup" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Signup</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>
            @endauth
        </ul>
    </nav>

    <main>

        @yield('content')

    </main>

    <footer
        class="z-999 fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
    
        <p class="ml-2">Copyright &copy; 2024, All Rights reserved</p>

        <a href="/listings/create" class="absolute top-1/3 right-10 rounded-lg bg-black text-white py-2 px-5 border-2 border-black hover:border-white hover:no-underline">Post Gigs</a>

    </footer>

    <x-flash-message />

</body>

</html>
