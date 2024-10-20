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
        <div id="layout" class="grid grid-flow-row auto-rows-max min-h-screen hidden">
            <div class="row-span-1 mt-8 mb-4 flex flex-col">
                <p class="font-mont mx-auto text-xs"><span class="font-bold">AGASTRA EVENTS</span> PRESENTS</p>
                <img class="w-64 mx-auto mt-2 lg:w-96" src="assets/scarnival.png" alt="SCARNIVAL Logo">
                <p class="mx-auto text-xs font-normal">THE SCARIEST PARTY TO GO TO</p>
            </div>
            <div class="row-span-1 flex">
                <img src="assets/layoutimg.png" alt="3D Layout" class="w-screen px-3 py-3 my-auto">
            </div>
            <div class="row-span-1 flex flex-col flex-grow">
                <div class="flex flex-col my-auto pt-5 mb-8">
                    <p class="mx-auto text-2xl font-light"><span class="font-semibold">1st NOV</span>EMBER | <span class="font-semibold">8PM</span> ONWARDS</p>
                    <p class="mx-auto text-2xl font-light">AT <span class="font-semibold">WATERS EDGE</span></p>
                    <p class="mx-auto text-xs font-light mt-5">Contact <span class="font-semibold">0776928857</span> for reservations or more information!</p>
                </div>
            </div>
        </div>
    <script>
        setTimeout(() => {
            document.getElementById('loader').classList.add('hidden');
            document.getElementById('layout').classList.remove('hidden');
        }, 1);
    </script>
    </body>
</html>