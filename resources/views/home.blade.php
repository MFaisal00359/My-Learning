<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')

        @livewireStyles
    </head>
    <body class="antialiased px-12 py-12 bg-slate-50">
        @livewire('layouts.navbars')

        @livewire('home-page')


        @livewireScripts
    </body>
</html>
