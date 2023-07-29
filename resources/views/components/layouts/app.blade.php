<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="h-full min-h-screen bg-gray-100">
    <div class="w-full p-8 mx-auto space-x-8 max-w-7xl">
        <a href="/kelahiran" rel="noopener noreferrer">Form Surat Kelahiran</a>
        <a href="/kematian" rel="noopener noreferrer">Form Surat Kematian</a>
    </div>

    {{ $slot }}
</body>

</html>