<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rock paper scissors Game</title>

        <!-- Styles -->
        @vite('resources/css/app.css')

        <!-- Scripts -->
        @livewireStyles
    </head>
    <body class="antialiased">
        <livewire:game-field />

        @livewireScripts
    </body>
</html>
