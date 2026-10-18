<!DOCTYPE html>
<html lang="de-AT">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        (function () {
            try {
                var stored = localStorage.getItem('theme');
                var isDark = stored ? stored === 'dark' : window.matchMedia('(prefers-color-scheme: dark)').matches;
                document.documentElement.classList.toggle('dark', isDark);
            } catch (e) {}
        })();
    </script>

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="manifest" href="/manifest.webmanifest" />
    <meta name="theme-color" content="#00B3E9" />
    <meta name="color-scheme" content="light dark" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="FCG Villach" />

    <meta name="title" content="FCG Villach - Freie Christengemeinde Villach">
    <meta inertia="description" name="description"
        content="Willkommen bei der FCG Villach. Gottesdienste, Veranstaltungen, Predigten und Gemeinschaft in Villach.">
    <meta name="keywords"
        content="FCG Villach, Freie Christengemeinde, Kirche Villach, Gottesdienst Villach, Freikirche Kärnten, Jesus, Bibel">
    <meta name="author" content="FCG Villach">
    <meta inertia="robots" name="robots" content="index, follow">
    <meta name="language" content="de">
    <meta name="revisit-after" content="7 days">

    <!-- Canonical -->
    <link inertia="canonical" rel="canonical" href="https://fcg-villach.at">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="apple-touch-icon" href="/android-chrome-192x192.png">

    <!-- Open Graph / Facebook -->
    <meta inertia="og:type" property="og:type" content="website">
    <meta inertia="og:url" property="og:url" content="https://fcg-villach.at">
    <meta inertia="og:title" property="og:title" content="FCG Villach - Freie Christengemeinde Villach">
    <meta inertia="og:description" property="og:description"
        content="Gottesdienste, Gemeinschaft und Veranstaltungen der FCG Villach.">
    <meta inertia="og:image" property="og:image" content="https://fcg-villach.at/images/fcg-villach-logo-minimal.png">
    <meta property="og:locale" content="de_AT">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta inertia="twitter:url" property="twitter:url" content="https://fcg-villach.at">
    <meta inertia="twitter:title" property="twitter:title" content="FCG Villach - Freie Christengemeinde Villach">
    <meta inertia="twitter:description" property="twitter:description"
        content="Gottesdienste, Gemeinschaft und Veranstaltungen der FCG Villach.">
    <meta inertia="twitter:image" property="twitter:image" content="https://fcg-villach.at/images/fcg-villach-logo-minimal.png">

    <!-- Structured data -->
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Church',
            '@id' => 'https://fcg-villach.at/#church',
            'name' => 'Freie Christengemeinde Villach',
            'alternateName' => 'FCG Villach',
            'url' => 'https://fcg-villach.at',
            'logo' => 'https://fcg-villach.at/images/fcg-villach-logo-minimal.png',
            'image' => 'https://fcg-villach.at/images/fcg-villach-logo-minimal.png',
            'description' => 'Freie Christengemeinde (Pfingstgemeinde) in Villach mit Gottesdiensten, Predigten, Veranstaltungen und Gemeinschaft.',
            'email' => 'office@fcg-villach.at',
            'telephone' => '+436505893093',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Vassacher Straße 28',
                'postalCode' => '9500',
                'addressLocality' => 'Villach',
                'addressRegion' => 'Kärnten',
                'addressCountry' => 'AT',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 46.6260827,
                'longitude' => 13.8433933,
            ],
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) !!}
    </script>

    <!-- Microsoft -->
    <meta name="msapplication-TileColor" content="#0f172a">

    <!-- Android Chrome -->
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Scripts -->
    @routes

    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100">
    @inertia
</body>

</html>
