<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Tailwind Flowbite</title>
    @include('layout.partial.link')
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @include('layout.local.nav')
    <h1>Selamat Datang di Lara-Tail-Flowb</h1>
    @include('layout.partial.script')
</body>

</html>