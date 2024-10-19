<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scarnival - Agastra Events</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')

    </head>
    <body class="font-pops antialiased bg-gradient-to-b from-zinc-900 to-zinc-950 text-white">
        <div id="loader" class="flex h-screen">
            {{-- <img src="assets/lantern.png" class="mx-auto w-20 my-auto lg:w-32"> --}}
            <video class="mx-auto w-32 my-auto lg:w-48" autoplay loop muted>
                <source src="assets/lantern.webm" type="video/webm">
                <source src="assets/lantern.hevc.mov" type="video/quicktime">
            </video>
        </div>
        <div id="layout" class="grid grid-rows-5 h-screen hidden">
            <div class="mt-8 flex flex-col">
                <p class="font-mont mx-auto text-xs"><span class="font-bold">AGASTRA EVENTS</span> PRESENTS</p>
                <img class="w-96 mx-auto mt-2" src="assets/scarnival.png" alt="SCARNIVAL Logo">
                <p class="mx-auto text-xs font-normal">THE SCARIEST PARTY TO GO TO</p>
            </div>
            <div class="row-span-3">
                Image
            </div>
            <div class="flex flex-col">
                <p class="mx-auto text-2xl font-light"><span class="font-semibold">1st NOV</span>EMBER | <span class="font-semibold">8PM</span> ONWARDS</p>
                <p class="mx-auto text-2xl font-light">AT <span class="font-semibold">WATERS EDGE</span></p>
                <p class="mx-auto text-xs font-light mt-5">Contact <span class="font-semibold">0776928857</span> for reservations or more information!</p>
            </div>
        </div>
    <script>
        setTimeout(() => {
            document.getElementById('loader').classList.add('hidden');
            document.getElementById('layout').classList.remove('hidden');
        }, 5000);
    </script>
    </body>
</html>