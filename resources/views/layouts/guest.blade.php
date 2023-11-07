<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    {{-- @livewireStyles --}}
</head>

<body>
    <main class="py-5">
        <div class="container">
            <div class="row">
                {{ $slot }}
            </div>
        </div>
    </main>
    {{-- @livewireScripts --}}
</body>

</html>
