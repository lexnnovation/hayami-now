<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hayami Now</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-black text-white font-sans pb-20">

    <div class="px-10">

        <nav class="flex justify-between items-center py-4 border-b border-white/10 sticky top-0 z-50 bg-black shadow">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/hayami_logo.svg') }}" class="w-35" alt=""></a>
            </div>
            <div class=" space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            @auth
                {{-- <a href="jobs/create"><x-section-heading class="text-sm">Post a Job</x-section-heading></a> --}}
                <div class="space-x-6 font-bold">

                    <a href="/jobs/create">
                        <span class="w-2 h-2 bg-blue-500 inline-block px-1"></span>
                        Post a Job
                    </a>
                    <form class=" inline-block" action="{{ route('logout') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class=" cursor-pointer text-red-500 ml-4 px-1" type="submit">Logout</button>
                    </form>
                </div>
            @endauth
            @guest
                <div class=" space-x-6 font-bold">
                    <a class=" px-1" href="/register">Sign Up</a>
                    <a class=" px-1" href="/login">Log In</a>

                </div>
            @endguest
        </nav>
        <main class="mt-8 max-w-[986px] m-auto">
            {{ $slot }}
        </main>

    </div>

</body>

</html>
