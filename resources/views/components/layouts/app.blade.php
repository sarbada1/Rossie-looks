<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Rossie Looks' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css','resources/css/style.css', 'resources/js/app.js','resources/js/particles-config.js'])
    @livewireStyles
</head>

<body class="bg-state-700 dark:bg-custom-bg-dark">
    @livewire('partials.navbar')
    <main>
        {{ $slot }}
    </main>
    @livewire('partials.footer')
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    @livewireScripts
</body>

</html>