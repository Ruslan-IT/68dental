<!DOCTYPE html>
<html data-wf-page="@yield('wf-page', '67ea68f011b0fd6e4b26caea')" data-wf-site="67ea68f011b0fd6e4b26caf8" lang="ru">
<head>
    <meta charset="utf-8">
    <link href="https://cdn.prod.website-files.com" rel="preconnect" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net" rel="preconnect" crossorigin>
    <link href="https://cdnjs.cloudflare.com" rel="preconnect" crossorigin>
    <link href="https://d3e54v103j8qbb.cloudfront.net" rel="preconnect" crossorigin>
    @php
        // Метаданные читаются только из config/seo.php и не зависят от названия клиники.
        $seoKey = trim(request()->path(), '/');
        $seoKey = $seoKey === '' ? 'home' : $seoKey;
        $seoPage = config('seo.pages.'.$seoKey) ?: config('seo.pages.home');
        $pageTitle = $seoPage['title'];
        $pageDescription = $seoPage['description'];
        $canonicalUrl = url()->current();
    @endphp
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">
    <meta name="keywords" content="{{ config('seo.keywords') }}">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <link rel="canonical" href="{{ $canonicalUrl }}">
    <meta property="og:site_name" content="{{ config('seo.site_name') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $pageDescription }}">
    <meta content="width=device-width, initial-scale=1" name="viewport">
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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=6">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@type": "WebSite",
            "name": @json(config('seo.pages.home.title')),
            "url": "{{ url('/') }}",
            "description": @json(config('seo.pages.home.description')),
            "inLanguage": "ru",
            "about": {
                "@type": "Thing",
                "name": @json(config('seo.category'))
            },
            "creator": {
                "@type": "Organization",
                "name": @json(config('seo.brand')),
                "url": @json(config('seo.url'))
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