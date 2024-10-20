<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agastra Events</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')
    </head>
    <body class="font-pops antialiased bg-gradient-to-b from-zinc-950 to-black text-white h-screen lg:overflow-y-clip">
        <h1 class="text-center text-3xl mt-14 mb-8 font-semibold font-mont lg:my-16 ">Upcoming Events</h1>

        <div class="grid gap-6 lg:grid-cols-[1fr_1fr] w-[90vW] mx-auto mb-6 lg:w-[60vw] lg:mx-auto lg:gap-24">
            <div class="">
                <img src="assets/snapit.jpg" alt="Snap IT Poster">
            </div>
            <div>
                <img src="assets/scarnival.jpg" alt="Scarnival Poster">
            </div>
        </div>
    </body>
</html>