<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="manifest" href="/manifest.webmanifest" />
    <meta name="theme-color" content="#00B3E9" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="FCG Villach" />

    <meta name="title" content="FCG Villach - Freie Christengemeinde Villach">
    <meta name="description"
        content="Willkommen bei der FCG Villach. Gottesdienste, Veranstaltungen, Predigten und Gemeinschaft in Villach.">
    <meta name="keywords"
        content="FCG Villach, Freie Christengemeinde, Kirche Villach, Gottesdienst Villach, Freikirche Kärnten, Jesus, Bibel">
    <meta name="author" content="FCG Villach">
    <meta name="robots" content="index, follow">
    <meta name="language" content="de">
    <meta name="revisit-after" content="7 days">

    <!-- Canonical -->
    <link rel="canonical" href="https://fcg-villach.at">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="apple-touch-icon" href="/android-chrome-192x192.png">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://fcg-villach.at">
    <meta property="og:title" content="FCG Villach - Freie Christengemeinde Villach">
    <meta property="og:description"
        content="Gottesdienste, Gemeinschaft und Veranstaltungen der FCG Villach.">
    <meta property="og:image" content="https://fcg-villach.at/images/fcg-villach-logo-minimal.png">
    <meta property="og:locale" content="de_AT">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://fcg-villach.at">
    <meta property="twitter:title" content="FCG Villach - Freie Christengemeinde Villach">
    <meta property="twitter:description"
        content="Gottesdienste, Gemeinschaft und Veranstaltungen der FCG Villach.">
    <meta property="twitter:image" content="https://fcg-villach.at/images/fcg-villach-logo-minimal.png">

    <!-- Microsoft -->
    <meta name="msapplication-TileColor" content="#0f172a">

    <!-- Android Chrome -->
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>
