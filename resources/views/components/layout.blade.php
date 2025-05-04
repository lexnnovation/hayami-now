<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hayami Now</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-black text-white font-sans">

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
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
            <a href="https://google.com"><x-section-heading class="text-sm">Post a Job</x-section-heading></a>

        </nav>
        <main class="mt-8 max-w-[986px] m-auto">
            {{ $slot }}
        </main>

    </div>

</body>

</html>
