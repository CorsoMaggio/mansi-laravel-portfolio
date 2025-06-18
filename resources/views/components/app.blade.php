<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Homepage' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{ $css ?? '' }}
</head>

<body>
    <x-navbar></x-navbar>
    <main>
        {{ $slot }}
    </main>
    {{ $js ?? '' }}
</body>

</html>
