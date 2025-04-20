<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hayami Now</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="bg-black">
        <nav class="flex justify-between items-center py-4">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/hayami_logo.svg') }}" class="w-16 h-16"
                        alt=""></a>
            </div>
            <div>
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            <div>Post a Job</div>
        </nav>
        <main>
            {{ $slot }}
        </main>

    </div>

</body>

</html>
