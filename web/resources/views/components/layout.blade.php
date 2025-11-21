<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="drawer">
            <input id="side-drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                <x-navbar />
                {{ $slot  }}
            </div>
            <div class="drawer-side">
                <label for="side-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu bg-base-200 min-h-full w-80 p-4">
                    <li><a href="/">Home</a></li>
                </ul>
            </div>
        </div>

    </body>
</html>
