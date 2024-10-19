<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scarnival - Agastra Events</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')

    </head>
    <body class="font-sans antialiased bg-gradient-to-b from-zinc-900 to-zinc-950 text-white/50">
        <div class="flex h-screen">
            <img src="assets/lantern.png" class="mx-auto w-20 my-auto lg:w-32">
            <audio src="assets/horror.mp3" autoplay></audio>
        </div>
    </body>
</html>