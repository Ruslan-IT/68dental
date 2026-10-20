<!DOCTYPE html>
<html data-wf-domain="www.dentalux.net" data-wf-page="@yield('wf-page', '67ea68f011b0fd6e4b26caea')" data-wf-site="67ea68f011b0fd6e4b26caf8" lang="ru" class=" w-mod-js w-mod-ix">
<head>
    <meta charset="utf-8">
    <link href="https://cdn.prod.website-files.com" rel="preconnect" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net" rel="preconnect" crossorigin>
    <link href="https://cdnjs.cloudflare.com" rel="preconnect" crossorigin>
    <link href="https://d3e54v103j8qbb.cloudfront.net" rel="preconnect" crossorigin>
    <title>@yield('title', 'Евростом — стоматологическая клиника')</title>
    <meta name="description" content="@yield('description', 'Евростом — стоматологическая клиника. Алексеевка, Уфимский район, Центральная улица, 58/1. Телефон +7 (347) 246-85-68. Пн–Пт: 09:00–21:00, суббота и воскресенье — выходные.')">
    <meta name="keywords" content="Евростом, стоматологическая клиника, Алексеевка, Уфимский район">
    <meta property="og:title" content="@yield('title', 'Евростом — стоматологическая клиника')">
    <meta property="og:description" content="@yield('description', 'Стоматологическая клиника Евростом. Алексеевка, Центральная улица, 58/1. Телефон +7 (347) 246-85-68.')">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/css/dentalux-project.webflow.shared.7f4e53650.min.css" rel="stylesheet" type="text/css">
    @stack('page-css')
    <script>
        !function (o, c) {
            var n = c.documentElement, t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal-default-theme.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=5">
    <link rel="canonical" href="@yield('canonical', 'http://68dental.local/')">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@type": "Dentist",
            "name": "Евростом",
            "url": "http://68dental.local/",
            "telephone": "+73472468568",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Центральная улица, 58/1",
                "addressLocality": "Алексеевка",
                "addressRegion": "Уфимский район, Республика Башкортостан",
                "addressCountry": "RU"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 54.832217,
                "longitude": 55.999982
            },
            "openingHoursSpecification": [
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                    "opens": "09:00",
                    "closes": "21:00"
                }
            ],
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.3",
                "bestRating": "5",
                "ratingCount": "22",
                "reviewCount": "5"
            }
        }
    </script>
    @stack('head-scripts')
</head>
<body class="body">
<div class="page-wrapper">
    <img
        src="{{ asset('images/67f23bdcc2541e7ba0ef93d5_cursor__hover-img.svg') }}"
        loading="lazy" alt="" class="custom-cursor" style="opacity: 0;">
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
</div>
<script defer src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=67ea68f011b0fd6e4b26caf8" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script defer src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/js/webflow.0b7b440a.c8529c73f2ebfdf8.js" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" type="text/javascript"></script>
<script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-scrolldisable@1/scrolldisable.js"></script>
<script defer src="{{ asset('js/remodal-defaults.js') }}"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js" type="text/javascript"></script>
<script defer src="{{ asset('js/main.js') }}"></script>
@stack('scripts')
@include('partials.contact-modal')
</body>
</html>