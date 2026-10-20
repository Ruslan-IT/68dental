@extends('layouts.app')

@section('title', 'Евростом — стоматологическая клиника')
@section('description', 'Евростом — стоматологическая клиника в деревне Алексеевка, Центральная улица, 58/1. Телефон +7 (347) 246-85-68. Пн–Пт: 09:00–21:00.')
@section('canonical', 'http://68dental.local/')
@section('wf-page', '67ea68f011b0fd6e4b26caea')

@push('page-css')
    <link rel="stylesheet" href="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/css/dentalux-project.webflow.67ea68f011b0fd6e4b26caea-d8ecbb3e3.min.css" type="text/css">
@endpush

@push('head-scripts')
    <link rel="preconnect" href="https://unpkg.com" crossorigin>
    <script type="module" src="https://unpkg.com/@google/model-viewer@3.4.0/dist/model-viewer.min.js"></script>
@endpush

@section('content')
<main class="main">
        <section class="section mod--hero">
            <div class="container">
                <div id="model-trigger" data-w-id="19740c42-a62c-0795-9957-3a25d04526e6" style="opacity: 0;" class="hero__illustr-wrap">
                    <div class="hero__illustr is1">
                        <div class="hero__illustr-img w-embed"><!-- 3D-model tooth in viewer (GLB format) -->
                            <model-viewer id="myModel-2" class="sync-rotation" src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/68484398c7a330af50c136ee_teeth_1_new_1.gltf.txt" alt="3D модель" disable-zoom="" disable-pan="" camera-orbit="30deg 120deg 2.5m" exposure="0.45" tone-mapping="commerce" style="width: 100%; height: 100%; touch-action: none; opacity: 1; filter: brightness(1.3);" ar-status="not-presenting" auto-rotate="">
                            </model-viewer>
                        </div>
                    </div>
                    <div class="hero__illustr is2">
                        <div class="hero__illustr-img w-embed">
                            <style>
                                #model-trigger {
                                    cursor: none !important;
                                    touch-action: none;
                                }

                                #model-trigger:active {
                                    cursor: none !important;
                                }

                                model-viewer {
                                    pointer-events: auto !important;
                                    width: 100%;
                                    height: 100%;
                                    transform: scale(0.9);
                                    touch-action: none;
                                    opacity: 0.6;
                                    filter: brightness(1.3);
                                    --progress-bar-color: transparent;
                                    --progress-bar-height: 0px;
                                }

                                @@media screen and (max-width: 767px) {
                                    model-viewer {
                                        transform: scale(1);
                                    }
                                }

                                .hero__illustr.is1 {
                                    mask: radial-gradient(
                                        circle at 50% 50%,
                                        rgba(0, 0, 0, 0) 0%,
                                        rgba(0, 0, 0, 0) 100%
                                    );
                                    -webkit-mask: radial-gradient(
                                        circle at 50% 50%,
                                        rgba(0, 0, 0, 0) 0%,
                                        rgba(0, 0, 0, 0) 100%
                                    );
                                    transition: -webkit-mask 0.2s ease-out,
                                    mask 0.2s ease-out;
                                    z-index: 2;
                                }
                            </style>

                            <!-- 3D-model tooth in viewer (GLB format) -->
                            <model-viewer id="myModel" class="sync-rotation" src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6848451d34b1d130979b10ac_teeth_1_new_2.gltf.txt" alt="3D модель" disable-zoom="" disable-pan="" camera-orbit="30deg 120deg 2.5m" exposure="0.45" tone-mapping="commerce" style="width: 100%; height: 100%; touch-action: none; opacity: 0.8; filter: brightness(1.3);" ar-status="not-presenting" auto-rotate="">
                            </model-viewer>
                        </div>
                    </div>
                    <div class="hero__illustr-cursor" style="will-change: transform; transform: translate3d(0rem, 0rem, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <img src="{{ asset('images/684c36a54df4d5e656c3f142_icon_hero-text-rotate.svg') }}" loading="lazy" alt="icon_hero-text-rotate" class="hero__illustr-cursor-text">
                        <div class="hero__illustr-cursor-blur hide"><img src="{{ asset('images/684c36ae12503609b3fe1867_icon-cursor.svg') }}" loading="lazy" alt="icon-cursor" class="hero__illustr-cursor-ico"></div>
                    </div>
                    <img src="{{ asset('images/684c3512dfce8ae39559d4a5_icon_hero-360.svg') }}" loading="lazy" mobile-hide="" alt="icon_hero-360" class="hero__illustr-icon"><img src="{{ asset('images/684c40ea56921e1966b94f5b_icon_hero-360-mob.svg') }}" loading="lazy" desktop-hide="" alt="icon_hero-360" class="hero__illustr-icon"></div>
                <div class="hero__content-wrap">
                    <div data-w-id="111a76b8-88a4-5909-45b6-da2035208866" style="opacity: 0;" class="hero__contact"><a href="tel:+73472468568" class="hero__contact-link w-inline-block"><img src="{{ asset('images/67ebbb567bce72eb183c4505_e688b3fe043bd601ac4105febbd08b79_icon__email.svg') }}" loading="lazy" alt="icon__email" class="hero__contact-icon">
                            <div class="alt-for-link"></div>
                        </a><a href="https://wa.me/79174172079" target="_blank" class="hero__contact-link w-inline-block"><img src="{{ asset('images/67ebbb56cb5367c248461185_0394cd0c07207f0b2fbb0e873b11d494_icon__facebook.svg') }}" loading="lazy" alt="icon__facebook" class="hero__contact-icon">
                            <div class="alt-for-link"></div>
                        </a><a href="https://yandex.ru/maps/org/yevrostom/27380149446/" target="_blank" class="hero__contact-link w-inline-block"><img src="{{ asset('images/67ebbb564b3e0808bc7282eb_61f01bffa8e806bfb83e6084e80e82d6_icon__instagram.svg') }}" loading="lazy" alt="icon__instagram" class="hero__contact-icon">
                            <div class="alt-for-link"></div>
                        </a></div>
                    <div data-w-id="88aae577-de30-5b11-5650-7807387ad5ff" style="opacity: 0;" class="hero__swiper-wrap">
                        <div data-swiper="hero" class="swiper mod--hero">
                            <div class="swiper-wrapper" id="swiper-wrapper-b595c35e0ee15821" aria-live="off">
                                
                                <div class="swiper-slide mod--hero" data-swiper-slide-index="0" role="group" aria-label="1 / 3"><img src="{{ asset('images/68774d2c4ec1eb0373f4e281_hero__slider-img-1.png') }}" loading="eager" fetchpriority="high" alt="" class="hero__swiper-img">
                                    <div class="hero__swiper-text"><p class="heading-6">Эстетическая стоматология<br>и восстановление улыбки</p>
                                        <p class="text-size-regular">Евростом – ваш <span class="text-weight-semibold mod--mobile-none">ориентир</span>, если нужно понять, с чего начать.</p></div>
                                </div>
                                <div class="swiper-slide mod--hero" data-swiper-slide-index="1" role="group" aria-label="2 / 3"><img src="{{ asset('images/68774d2c12303c717d57546b_hero__slider-img-2.png') }}" loading="lazy" alt="" class="hero__swiper-img">
                                    <div class="hero__swiper-text"><p class="heading-6">Оборудование на приёме</p>
                                        <p class="text-size-regular text-color-neutral_gray">Евростом – <span class="text-weight-semibold">подход</span>, при котором ход лечения объясняют заранее.</p></div>
                                </div>
                                <div class="swiper-slide mod--hero" data-swiper-slide-index="2" role="group" aria-label="3 / 3"><img src="{{ asset('images/68774d2c2a9981ca95c15f3b_hero__slider-img-3.png') }}" loading="lazy" alt="" class="hero__swiper-img">
                                    <div class="hero__swiper-text"><p class="heading-6">Забота и внимание каждый день</p>
                                        <p class="text-size-regular text-color-neutral_gray">Евростом – <span class="text-weight-semibold">врачи клиники</span>, к которым пациенты приходят на приём.</p></div>
                                </div>
                                
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="hero__pagination">
                            <div class="hero__swiper-num">
                                <div data-swiper="current-hero" class="text-color-violet">2</div>
                                <div class="text-color-violet opacity50">/3</div>
                            </div>
                            <div class="hero__swiper-nav">
                                <div data-swiper="hero-bullet" class="hero__pagination-bullet">
                                    <div data-swiper="hero-bullet-active" class="hero__pagination-bullet-active" style="width: 66.6667%;"></div>
                                </div>
                                <div data-swiper="next-hero" class="swiper-nav__arrow" tabindex="0" role="button" aria-label="Следующий слайд" aria-controls="swiper-wrapper-b595c35e0ee15821"><img src="{{ asset('images/67eb9cee3cbf463f1a626321_icon__arrow-right.svg') }}" loading="lazy" alt="icon__arrow-right" class="icon width-24"></div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="a2e232d7-403d-42b7-b030-87db3d6674c6" style="opacity: 0;" class="hero__heading-wrap"><h1>ЕВРОСТОМ</h1>
                        <div class="hero__text-wrap"><p class="text-size-medium">Стоматологическая клиника Евростом в деревне Алексеевка, Центральная улица, 58/1. Телефон +7 (347) 246-85-68. Пн–Пт: 09:00–21:00, суббота и воскресенье — выходные.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section overflow-hidden">
            <div class="container">
                <div class="services__content-wrap">
                    <div data-w-id="f2014b47-4e0f-25ac-d1cb-9c1be0cfe1ee" class="heading__wrap" style="opacity: 0;"><h2 class="heading-4">Услуги стоматологии Евростом</h2>
                        <div class="text__wrap max-width-22"><p class="text-size-regular text-color-graphite">На странице собраны направления, которые показаны в галерее шаблона. Запись — по телефону клиники.</p></div>
                    </div>
                    <div class="collection__list-wrap mod--services w-dyn-list">
                        <div role="list" class="collection__list mod--services w-dyn-items">
                            <div data-w-id="f2014b47-4e0f-25ac-d1cb-9c1be0cfe1f6" role="listitem" class="collection__item mod--services w-dyn-item" style="opacity: 0;">
                                <div class="collection__item-wrap mod--services"><img src="{{ asset('images/688658850a6dfb673a9bb954_cilnokeramichni-koronki-sc.webp') }}" loading="lazy" mobile-hide="" alt="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px" srcset="{{ asset('images/688658850a6dfb673a9bb954_cilnokeramichni-koronki-sc-p-500.webp') }} 500w, {{ asset('images/688658850a6dfb673a9bb954_cilnokeramichni-koronki-sc-p-800.webp') }} 800w, {{ asset('images/688658850a6dfb673a9bb954_cilnokeramichni-koronki-sc.webp') }} 1024w" class="services__img"><img src="{{ asset('images/6886587459c4754926019a75_cilnokeramichni-koronki-m.webp') }}" loading="lazy" desktop-hide="" alt="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px" srcset="{{ asset('images/6886587459c4754926019a75_cilnokeramichni-koronki-m-p-500.webp') }} 500w, {{ asset('images/6886587459c4754926019a75_cilnokeramichni-koronki-m.webp') }} 780w" class="services__img"><a href="/services" class="services__link w-inline-block">
                                        <div class="services__heading-wrap"><h3 class="heading-5 mobile-size-14 text-style-2lines text-weight-normal font-style-worksans">
                                                Ортопедические конструкции</h3>
                                            <div class="button is-icon mod--services">
                                                <div class="button__icon w-embed">
                                                    <svg width="100%" height="100%" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="services__text-anim">
                                            <div class="services__text-wrap"><p class="text-size-regular">
                                                    Цельнокерамические коронки повторяют прозрачность эмали и используются, когда нужно восстановить передние зубы и другие заметные участки.</p></div>
                                        </div>
                                    </a></div>
                            </div>
                            <div data-w-id="f2014b47-4e0f-25ac-d1cb-9c1be0cfe1f6" role="listitem" class="collection__item mod--services w-dyn-item" style="opacity: 0;">
                                <div class="collection__item-wrap mod--services"><img src="{{ asset('images/6886595c2a63a1885027d203_implantaciya-zubiv-sc.webp') }}" loading="lazy" mobile-hide="" alt="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px" srcset="{{ asset('images/6886595c2a63a1885027d203_implantaciya-zubiv-sc-p-500.webp') }} 500w, {{ asset('images/6886595c2a63a1885027d203_implantaciya-zubiv-sc-p-800.webp') }} 800w, {{ asset('images/6886595c2a63a1885027d203_implantaciya-zubiv-sc.webp') }} 1024w" class="services__img"><img src="{{ asset('images/6886595f1edcf2430c483c64_implantaciya-zubiv-m.webp') }}" loading="lazy" desktop-hide="" alt="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px" srcset="{{ asset('images/6886595f1edcf2430c483c64_implantaciya-zubiv-m-p-500.webp') }} 500w, {{ asset('images/6886595f1edcf2430c483c64_implantaciya-zubiv-m.webp') }} 780w" class="services__img"><a href="/services" class="services__link w-inline-block">
                                        <div class="services__heading-wrap"><h3 class="heading-5 mobile-size-14 text-style-2lines text-weight-normal font-style-worksans">
                                                Имплантация зубов</h3>
                                            <div class="button is-icon mod--services">
                                                <div class="button__icon w-embed">
                                                    <svg width="100%" height="100%" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="services__text-anim">
                                            <div class="services__text-wrap"><p class="text-size-regular">Восстанавливаем поражённые ткани внутри зуба: канал очищают и пломбируют.</p></div>
                                        </div>
                                    </a></div>
                            </div>
                            <div data-w-id="f2014b47-4e0f-25ac-d1cb-9c1be0cfe1f6" role="listitem" class="collection__item mod--services w-dyn-item" style="opacity: 0;">
                                <div class="collection__item-wrap mod--services"><img src="{{ asset('images/68bbfb443fcdc7b4987010d4_likuvannya-kariiesu-sc.webp') }}" loading="lazy" mobile-hide="" alt="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px" srcset="{{ asset('images/68bbfb443fcdc7b4987010d4_likuvannya-kariiesu-sc-p-500.webp') }} 500w, {{ asset('images/68bbfb443fcdc7b4987010d4_likuvannya-kariiesu-sc-p-800.webp') }} 800w, {{ asset('images/68bbfb443fcdc7b4987010d4_likuvannya-kariiesu-sc.webp') }} 1024w" class="services__img"><img src="{{ asset('images/6884f9274d456b2ded12a551_likuvannya-kariiesu-mh.webp') }}" loading="lazy" desktop-hide="" alt="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px" srcset="{{ asset('images/6884f9274d456b2ded12a551_likuvannya-kariiesu-mh-p-500.webp') }} 500w, {{ asset('images/6884f9274d456b2ded12a551_likuvannya-kariiesu-mh.webp') }} 780w" class="services__img"><a href="/services" class="services__link w-inline-block">
                                        <div class="services__heading-wrap"><h3 class="heading-5 mobile-size-14 text-style-2lines text-weight-normal font-style-worksans">
                                                Лечение кариеса</h3>
                                            <div class="button is-icon mod--services">
                                                <div class="button__icon w-embed">
                                                    <svg width="100%" height="100%" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="services__text-anim">
                                            <div class="services__text-wrap"><p class="text-size-regular">Восстанавливаем поражённые ткани внутри зуба: канал очищают и пломбируют.</p></div>
                                        </div>
                                    </a></div>
                            </div>
                            <div data-w-id="f2014b47-4e0f-25ac-d1cb-9c1be0cfe1f6" role="listitem" class="collection__item mod--services w-dyn-item" style="opacity: 0;">
                                <div class="collection__item-wrap mod--services"><img src="{{ asset('images/68866294d424958970b93a1f_likuvannya-zubnykh-kanaliv-sc.webp') }}" loading="lazy" mobile-hide="" alt="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px" srcset="{{ asset('images/68866294d424958970b93a1f_likuvannya-zubnykh-kanaliv-sc-p-500.webp') }} 500w, {{ asset('images/68866294d424958970b93a1f_likuvannya-zubnykh-kanaliv-sc-p-800.webp') }} 800w, {{ asset('images/68866294d424958970b93a1f_likuvannya-zubnykh-kanaliv-sc.webp') }} 1024w" class="services__img"><img src="{{ asset('images/6886628d40ff0915c95027f1_likuvannya-zubnykh-kanaliv-m.webp') }}" loading="lazy" desktop-hide="" alt="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px" srcset="{{ asset('images/6886628d40ff0915c95027f1_likuvannya-zubnykh-kanaliv-m-p-500.webp') }} 500w, {{ asset('images/6886628d40ff0915c95027f1_likuvannya-zubnykh-kanaliv-m.webp') }} 780w" class="services__img"><a href="/services" class="services__link w-inline-block">
                                        <div class="services__heading-wrap"><h3 class="heading-5 mobile-size-14 text-style-2lines text-weight-normal font-style-worksans">
                                                Лечение зубных каналов</h3>
                                            <div class="button is-icon mod--services">
                                                <div class="button__icon w-embed">
                                                    <svg width="100%" height="100%" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="services__text-anim">
                                            <div class="services__text-wrap"><p class="text-size-regular">Восстанавливаем поражённые ткани внутри зуба: канал очищают и пломбируют.</p></div>
                                        </div>
                                    </a></div>
                            </div>
                            <div data-w-id="f2014b47-4e0f-25ac-d1cb-9c1be0cfe1f6" role="listitem" class="collection__item mod--services w-dyn-item" style="opacity: 0;">
                                <div class="collection__item-wrap mod--services"><img src="{{ asset('images/68865bfb72116e4c8a53cc44_pfofesiyna-hihiena-rota-sc.webp') }}" loading="lazy" mobile-hide="" alt="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px" srcset="{{ asset('images/68865bfb72116e4c8a53cc44_pfofesiyna-hihiena-rota-sc-p-500.webp') }} 500w, {{ asset('images/68865bfb72116e4c8a53cc44_pfofesiyna-hihiena-rota-sc-p-800.webp') }} 800w, {{ asset('images/68865bfb72116e4c8a53cc44_pfofesiyna-hihiena-rota-sc.webp') }} 1024w" class="services__img"><img src="{{ asset('images/68865bef45dc217b1076df8c_pfofesiyna-hihiena-rota-m.webp') }}" loading="lazy" desktop-hide="" alt="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px" srcset="{{ asset('images/68865bef45dc217b1076df8c_pfofesiyna-hihiena-rota-m-p-500.webp') }} 500w, {{ asset('images/68865bef45dc217b1076df8c_pfofesiyna-hihiena-rota-m.webp') }} 780w" class="services__img"><a href="/services" class="services__link w-inline-block">
                                        <div class="services__heading-wrap"><h3 class="heading-5 mobile-size-14 text-style-2lines text-weight-normal font-style-worksans">
                                                Профессиональная гигиена</h3>
                                            <div class="button is-icon mod--services">
                                                <div class="button__icon w-embed">
                                                    <svg width="100%" height="100%" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="services__text-anim">
                                            <div class="services__text-wrap"><p class="text-size-regular">Восстанавливаем поражённые ткани внутри зуба: канал очищают и пломбируют.</p></div>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="f2014b47-4e0f-25ac-d1cb-9c1be0cfe204" class="button-wrap" style="opacity: 0;"><a href="/services" class="button is-large gray w-inline-block">
                            <div>Смотреть все услуги</div>
                            <img src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}" loading="lazy" alt="icon__arrow-up" class="button__icon-arrow"></a></div>
                </div>
            </div>
        </section>
        <div class="styles w-embed">
            <style>
                /*Fluid responsive */
                html {
                    font-size: 1rem;
                }

                @@media screen and (min-width: 992px) {
                    html {
                        font-size: 1vw;
                    }
                }

                @@media screen and (max-width: 991px) and (min-width: 768px) {
                    html {
                        font-size: 1.2vw;
                    }
                }

                @@media screen and (max-width: 479px) {
                    html {
                        font-size: 4.1vw;
                    }
                }

                *:focus {
                    outline: 0;
                }

                /* Animation of input when focus */
                input::placeholder,
                textarea::placeholder {
                    transition: .2s;
                }

                input:focus::placeholder,
                textarea:focus::placeholder {
                    opacity: 0;
                }

                /* Make text look crisper and more legible in all browsers */
                body {
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                    font-smoothing: antialiased;
                    text-rendering: optimizeLegibility;
                }

                /* Focus state style for keyboard navigation for the focusable elements */
                *[tabindex]:focus-visible,
                input[type="file"]:focus-visible {
                    outline: none;
                }

                /* Set color style to inherit */
                .inherit-color * {
                    color: inherit;
                }

                /* Get rid of top margin on first element in any rich text element */
                .w-richtext > :not(div):first-child, .w-richtext > div:first-child > :first-child {
                    margin-top: 0 !important;
                }

                /* Get rid of bottom margin on last element in any rich text element */
                .w-richtext > :last-child, .w-richtext ol li:last-child, .w-richtext ul li:last-child {
                    margin-bottom: 0 !important;
                }

                /* Prevent all click and hover interaction with an element */
                .pointer-events-off {
                    pointer-events: none;
                }

                /* Enables all click and hover interaction with an element */
                .pointer-events-on {
                    pointer-events: auto;
                }

                /**
                a,
                .w-input,
                .w-select,
                .w-tab-link,
                .w-nav-link,
                .w-dropdown-btn,
                .w-dropdown-toggle,
                .w-dropdown-link {
                color: inherit;
                text-decoration: inherit;
                font-size: inherit;
                }
                **/

                /* Apply "..." after 3 lines of text */
                .text-style-3lines {
                    display: -webkit-box;
                    overflow: hidden;
                    -webkit-line-clamp: 3;
                    -webkit-box-orient: vertical;
                }

                /* Apply "..." after 2 lines of text */
                .text-style-2lines {
                    display: -webkit-box;
                    overflow: hidden;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                }

                @@media screen and (min-width: 768px) {
                    [desktop-hide] {
                        display: none !important;
                    }
                }

                @@media screen and (max-width: 767px) {
                    [mobile-hide] {
                        display: none !important;
                    }
                }

                [data-scrollbar-transparent]::-webkit-scrollbar {
                    width: 0rem;
                    height: 0rem;
                }

                [data-scrollbar-transparent]::-webkit-scrollbar-track {
                    background: transparent;
                }

                [data-scrollbar-transparent]::-webkit-scrollbar-thumb {
                    background-color: transparent;
                }

                .header__contact-link:hover .header__contact-popup {
                    display: block;
                    opacity: 1;
                }

                .hide {
                    display: none !important;
                }

                .footer__text-wrap.is1 .icon {
                    margin-bottom: 0.125rem;
                }

                .button.is-text:hover {
                    color: #595959;
                }

                .button.is-icon:hover {
                    background-color: #413D57;
                    color: #FFFFFF;
                }

                [data-hover=cursor]:hover {
                    cursor: none;
                }

                .custom-cursor {
                    position: fixed;
                    top: -1.75rem;
                    left: -1.75rem;
                    width: 3.5rem;
                    height: 4rem;
                    border-radius: 1.5rem;
                    border: 1px solid var(--Primary, #413D57);
                    background: linear-gradient(180deg, rgba(255, 255, 255, 0.12) 0%, rgba(255, 255, 255, 0.03) 100%);
                    box-shadow: 0 0.25rem 1.5rem -0.0625rem rgba(0, 0, 0, 0.08);
                    backdrop-filter: blur(0.375rem);
                    -webkit-backdrop-filter: blur(0.5rem);
                    pointer-events: none;
                    z-index: 9999;
                    transform: translate(-50%, -50%);
                    transition: transform 0.05s ease-out, opacity 0.2s ease;
                    opacity: 0;
                }

                .swiper-pagination-bullets.swiper-pagination-horizontal {
                    bottom: 0px !important;
                    left: 0;
                    width: auto !important;
                }

                .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
                    margin: 0px !important;
                }

            </style>
        </div>
        <section class="section">
            <div class="container">
                <div class="section__content-wrap">
                    <div data-w-id="cb7b6991-d13d-d801-fdbb-9d5e871e5346" style="opacity: 0;" class="heading__wrap"><h2 class="heading-4">Как устроен приём</h2>
                        <div class="text__wrap max-width-25"><p class="text-size-regular text-color-graphite">На приёме объясняют, что будут делать, и подбирают следующий шаг под ситуацию пациента.</p></div>
                    </div>
                    <div data-swiper="benefits" data-w-id="a8933547-e8e6-73c2-c183-8cc8ef95d117" style="opacity: 0;" class="swiper mod--benefits">
                        <div class="swiper-wrapper mod--benefits">
                            <div class="swiper-slide mod--benefits">
                                <div class="swiper__slide-wrap mod--benefits"><img src="{{ asset('images/67ebe50845130aba938d8aaf_benefits__icon-1.svg') }}" loading="lazy" alt="card icon" class="icon width-64">
                                    <div class="benefits__text-wrap"><h3 class="heading-6 mobile-size-20 font-style-worksans">Оборудование</h3>
                                        <p class="text-size-regular text-color-neutral_gray">В описании шаблона речь об оборудовании для диагностики и лечения. Точный список техники Евростом отдельно не опубликован.</p></div>
                                </div>
                            </div>
                            <div class="swiper-slide mod--benefits">
                                <div class="swiper__slide-wrap mod--benefits"><img src="{{ asset('images/67ebe508a97dcabcb091dd6b_benefits__icon-2.svg') }}" loading="lazy" alt="card icon" class="icon width-64">
                                    <div class="benefits__text-wrap"><h3 class="heading-6 mobile-size-20 font-style-worksans">Специалисты</h3>
                                        <p class="text-size-regular text-color-neutral_gray">На сайте показаны специалисты из макета клиники. Стаж и квалификация Евростом отдельно не подтверждены.</p></div>
                                </div>
                            </div>
                            <div class="swiper-slide mod--benefits">
                                <div class="swiper__slide-wrap mod--benefits"><img src="{{ asset('images/67ebe5083d9ba93a5a69745a_benefits__icon-3.svg') }}" loading="lazy" alt="card icon" class="icon width-64">
                                    <div class="benefits__text-wrap"><h3 class="heading-6 mobile-size-20 font-style-worksans">Индивидуальный план</h3>
                                        <p class="text-size-regular text-color-neutral_gray">План лечения собирают с учётом жалоб и состояния зубов, чтобы визит был понятным.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide mod--benefits">
                                <div class="swiper__slide-wrap mod--benefits"><img src="{{ asset('images/67ebe508f509b13f8c0b2e51_benefits__icon-4.svg') }}" loading="lazy" alt="card icon" class="icon width-64">
                                    <div class="benefits__text-wrap"><h3 class="heading-6 mobile-size-20 font-style-worksans">Спокойная обстановка</h3>
                                        <p class="text-size-regular text-color-neutral_gray">В клинике стараются, чтобы на приёме было спокойно и понятно, что происходит.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper__pagination mod--mobile mod--margin">
                        <div data-swiper-benefits="pagination" class="swiper__swiper-nav">
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="75d65c52-35fd-90a2-78df-44abedfd4866" style="opacity: 0;" class="button-wrap"><a data-remodal-target="contact" href="/contact" class="button is-large gold w-inline-block">
                            <div>Записаться на приём</div>
                            <img src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}" loading="lazy" alt="icon__arrow-up" class="button__icon-arrow"></a></div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="section__content-wrap">
                    <div data-w-id="7eae70d1-5107-fec5-de25-040510ddc8e4" style="opacity: 0;" class="heading__wrap"><h2 class="heading-4">Специалисты</h2>
                        <div class="text__wrap max-width-38"><p class="text-size-regular text-color-graphite">
                                Ниже — карточки специалистов из макета. Это не подтверждённый список врачей Евростом.</p></div>
                    </div>
                    <div class="specialists__swiper-wrap">
                        <div data-swiper="specialists-first" data-w-id="dbf19cfc-52b3-5147-53a0-fa791de664ed" style="opacity: 0;" class="swiper mod--specialists-first w-dyn-list">
                            <div role="list" class="swiper-wrapper w-dyn-items" id="swiper-wrapper-29e2109a3fd757b22" aria-live="off">
                                
                                <div role="group" class="swiper-slide mod--specialists-first w-dyn-item" data-swiper-slide-index="0" aria-label="1 / 4"><img src="{{ asset('images/67ebf94c0ba2aa1151e4d940_specialist__img-1.jpg') }}" loading="lazy" mobile-hide="" alt="" sizes="(max-width: 767px) 100vw, 800px" srcset="{{ asset('images/67ebf94c0ba2aa1151e4d940_specialist__img-1-p-500.jpg') }} 500w, {{ asset('images/67ebf94c0ba2aa1151e4d940_specialist__img-1-p-800.jpg') }} 800w, {{ asset('images/67ebf94c0ba2aa1151e4d940_specialist__img-1-p-1080.jpg') }} 1080w, {{ asset('images/67ebf94c0ba2aa1151e4d940_specialist__img-1-p-1600.jpg') }} 1600w, {{ asset('images/67ebf94c0ba2aa1151e4d940_specialist__img-1.jpg') }} 1718w" class="specialists__img is1"><img src="{{ asset('images/67ebff7260357e68b0c6248f_specialist__img-mob-1.jpg') }}" loading="lazy" desktop-hide="" alt="" sizes="(max-width: 767px) 100vw, 800px" srcset="{{ asset('images/67ebff7260357e68b0c6248f_specialist__img-mob-1-p-500.jpg') }} 500w, {{ asset('images/67ebff7260357e68b0c6248f_specialist__img-mob-1.jpg') }} 700w" class="specialists__img is1"></div>
                                <div role="group" class="swiper-slide mod--specialists-first w-dyn-item" data-swiper-slide-index="1" aria-label="2 / 4"><img src="{{ asset('images/6830480d1b70c87f24a74a1d_img-desk-2.jpg') }}" loading="lazy" mobile-hide="" alt="" sizes="(max-width: 767px) 100vw, 800px" srcset="{{ asset('images/6830480d1b70c87f24a74a1d_img-desk-2-p-500.jpg') }} 500w, {{ asset('images/6830480d1b70c87f24a74a1d_img-desk-2-p-800.jpg') }} 800w, {{ asset('images/6830480d1b70c87f24a74a1d_img-desk-2-p-1080.jpg') }} 1080w, {{ asset('images/6830480d1b70c87f24a74a1d_img-desk-2-p-1600.jpg') }} 1600w, {{ asset('images/6830480d1b70c87f24a74a1d_img-desk-2.jpg') }} 1718w" class="specialists__img is1"><img src="{{ asset('images/68304810ff1e57eb5bbff7ea_img-mob-2.jpg') }}" loading="lazy" desktop-hide="" alt="" sizes="(max-width: 767px) 100vw, 800px" srcset="{{ asset('images/68304810ff1e57eb5bbff7ea_img-mob-2-p-500.jpg') }} 500w, {{ asset('images/68304810ff1e57eb5bbff7ea_img-mob-2.jpg') }} 700w" class="specialists__img is1"></div>
                                <div role="group" class="swiper-slide mod--specialists-first w-dyn-item" data-swiper-slide-index="2" aria-label="3 / 4"><img src="{{ asset('images/683026199645ef1a9fb9f6c4_main%20photo2.jpg') }}" loading="lazy" mobile-hide="" alt="" sizes="(max-width: 767px) 100vw, 800px" srcset="{{ asset('images/683026199645ef1a9fb9f6c4_main%20photo2-p-500.jpg') }} 500w, {{ asset('images/683026199645ef1a9fb9f6c4_main%20photo2-p-800.jpg') }} 800w, {{ asset('images/683026199645ef1a9fb9f6c4_main%20photo2-p-1080.jpg') }} 1080w, {{ asset('images/683026199645ef1a9fb9f6c4_main%20photo2-p-1600.jpg') }} 1600w, {{ asset('images/683026199645ef1a9fb9f6c4_main%20photo2.jpg') }} 1718w" class="specialists__img is1"><img src="{{ asset('images/6830474e5efd5123069deea0_img-mob-700.jpg') }}" loading="lazy" desktop-hide="" alt="" sizes="(max-width: 767px) 100vw, 800px" srcset="{{ asset('images/6830474e5efd5123069deea0_img-mob-700-p-500.jpg') }} 500w, {{ asset('images/6830474e5efd5123069deea0_img-mob-700.jpg') }} 700w" class="specialists__img is1"></div>
                                <div role="group" class="swiper-slide mod--specialists-first w-dyn-item" data-swiper-slide-index="3" aria-label="4 / 4"><img src="{{ asset('images/683048178c4cc6f2788f0f99_img-desk-3.jpg') }}" loading="lazy" mobile-hide="" alt="" sizes="(max-width: 767px) 100vw, 800px" srcset="{{ asset('images/683048178c4cc6f2788f0f99_img-desk-3-p-500.jpg') }} 500w, {{ asset('images/683048178c4cc6f2788f0f99_img-desk-3-p-800.jpg') }} 800w, {{ asset('images/683048178c4cc6f2788f0f99_img-desk-3-p-1080.jpg') }} 1080w, {{ asset('images/683048178c4cc6f2788f0f99_img-desk-3-p-1600.jpg') }} 1600w, {{ asset('images/683048178c4cc6f2788f0f99_img-desk-3.jpg') }} 1718w" class="specialists__img is1"><img src="{{ asset('images/6830481a65088923183d9ff4_img-mob-3.jpg') }}" loading="lazy" desktop-hide="" alt="" sizes="(max-width: 767px) 100vw, 800px" srcset="{{ asset('images/6830481a65088923183d9ff4_img-mob-3-p-500.jpg') }} 500w, {{ asset('images/6830481a65088923183d9ff4_img-mob-3.jpg') }} 700w" class="specialists__img is1"></div>
                                
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div data-w-id="e8ce7e03-cf7c-b8bf-8f78-0fb1f9dd0bb8" style="opacity: 0;" class="specialists__swiper">
                            <div data-swiper="specialists-second" class="swiper mod--specialists-second w-dyn-list">
                                <div role="list" class="swiper-wrapper test w-dyn-items" id="swiper-wrapper-8bcc6865df799c49" aria-live="off">
                                    
                                    <div role="group" class="swiper-slide mod--specialists-second w-dyn-item" data-swiper-slide-index="0" aria-label="1 / 4"><img src="{{ asset('images/67ebff7260357e68b0c6248f_specialist__img-mob-1.jpg') }}" loading="lazy" alt="" sizes="(max-width: 767px) 46vw, 160px" srcset="{{ asset('images/67ebff7260357e68b0c6248f_specialist__img-mob-1-p-500.jpg') }} 500w, {{ asset('images/67ebff7260357e68b0c6248f_specialist__img-mob-1.jpg') }} 700w" class="specialists__img is2">
                                        <div class="specialists__text-wrap"><h3 class="heading-5 mobile-size-16 font-style-worksans text-weight-normal">
                                                Мильднер Марьяна Викторовна</h3>
                                            <div class="margin-custom mod--specialists"><p class="text-size-regular text-color-neutral_gray">Врач-стоматолог терапевт-эндодонтист, ортопед, детский стоматолог</p></div>
                                            <p class="specialists__tag">20+ лет опыта</p></div>
                                    </div>
                                    <div role="group" class="swiper-slide mod--specialists-second w-dyn-item" data-swiper-slide-index="1" aria-label="2 / 4"><img src="{{ asset('images/68304810ff1e57eb5bbff7ea_img-mob-2.jpg') }}" loading="lazy" alt="" sizes="(max-width: 767px) 46vw, 160px" srcset="{{ asset('images/68304810ff1e57eb5bbff7ea_img-mob-2-p-500.jpg') }} 500w, {{ asset('images/68304810ff1e57eb5bbff7ea_img-mob-2.jpg') }} 700w" class="specialists__img is2">
                                        <div class="specialists__text-wrap"><h3 class="heading-5 mobile-size-16 font-style-worksans text-weight-normal">
                                                Петренко Кирилл Игоревич</h3>
                                            <div class="margin-custom mod--specialists"><p class="text-size-regular text-color-neutral_gray">Врач-стоматолог хирург-имплантолог, ортопед</p></div>
                                            <p class="specialists__tag">13+ лет опыта</p></div>
                                    </div>
                                    <div role="group" class="swiper-slide mod--specialists-second w-dyn-item" data-swiper-slide-index="2" aria-label="3 / 4"><img src="{{ asset('images/6830474e5efd5123069deea0_img-mob-700.jpg') }}" loading="lazy" alt="" sizes="(max-width: 767px) 46vw, 160px" srcset="{{ asset('images/6830474e5efd5123069deea0_img-mob-700-p-500.jpg') }} 500w, {{ asset('images/6830474e5efd5123069deea0_img-mob-700.jpg') }} 700w" class="specialists__img is2">
                                        <div class="specialists__text-wrap"><h3 class="heading-5 mobile-size-16 font-style-worksans text-weight-normal">
                                                Бугрим Анна Андреевна </h3>
                                            <div class="margin-custom mod--specialists"><p class="text-size-regular text-color-neutral_gray">Врач-стоматолог терапевт, гигиенист</p></div>
                                            <p class="specialists__tag w-dyn-bind-empty"></p></div>
                                    </div>
                                    <div role="group" class="swiper-slide mod--specialists-second w-dyn-item" data-swiper-slide-index="3" aria-label="4 / 4"><img src="{{ asset('images/6830481a65088923183d9ff4_img-mob-3.jpg') }}" loading="lazy" alt="" sizes="(max-width: 767px) 46vw, 160px" srcset="{{ asset('images/6830481a65088923183d9ff4_img-mob-3-p-500.jpg') }} 500w, {{ asset('images/6830481a65088923183d9ff4_img-mob-3.jpg') }} 700w" class="specialists__img is2">
                                        <div class="specialists__text-wrap"><h3 class="heading-5 mobile-size-16 font-style-worksans text-weight-normal">
                                                Петренко Ольга Николаевна </h3>
                                            <div class="margin-custom mod--specialists"><p class="text-size-regular text-color-neutral_gray">Основательница клиники, врач-стоматолог эндодонтист, терапевт, ортопед</p></div>
                                            <p class="specialists__tag">25+ лет работы</p></div>
                                    </div>
                                    
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            <div class="specialists__pagination">
                                <div data-swiper-specialists="pagination" class="swiper__swiper-nav">
                                    <div class="swiper__pagination-bullet">
                                        <div data-anim="" class="swiper__pagination-bullet-active specialists"></div>
                                    </div>
                                    <div class="swiper__pagination-bullet">
                                        <div data-anim="" class="swiper__pagination-bullet-active specialists active"></div>
                                    </div>
                                    <div class="swiper__pagination-bullet">
                                        <div data-anim="" class="swiper__pagination-bullet-active specialists"></div>
                                    </div>
                                    <div class="swiper__pagination-bullet">
                                        <div data-anim="" class="swiper__pagination-bullet-active specialists"></div>
                                    </div>
                                </div>
                                <div mobile-hide="" data-swiper="next-specialists" class="swiper-nav__arrow" tabindex="0" role="button" aria-label="Следующий слайд" aria-controls="swiper-wrapper-8bcc6865df799c49"><img src="{{ asset('images/67eb9cee3cbf463f1a626321_icon__arrow-right.svg') }}" loading="lazy" alt="icon__arrow-right" class="icon width-24"></div>
                            </div>
                        </div>
                        <div data-w-id="82776dea-4847-407c-1308-6bba5b5563f8" style="opacity: 0;" class="specialists__btn"><a href="/team" class="button is-large gray w-inline-block">
                                <div>Узнать больше</div>
                                <img src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}" loading="lazy" alt="icon__arrow-up" class="button__icon-arrow"></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="section__content-wrap">
                    <div data-w-id="744b59d3-ff32-cee2-e603-b440ebbb5e13" style="opacity: 0;" class="heading__wrap"><h2 class="heading-4">Технологии и оборудование</h2>
                        <div class="text__wrap max-width-25"><p class="text-size-regular text-color-graphite">В макете перечислено оборудование. Наличие этих приборов в Евростом отдельно не подтверждено:</p></div>
                    </div>
                    <div data-swiper="technology" data-w-id="d4dc43f0-1517-b798-c63c-eebb5e158908" style="opacity: 0;" class="swiper mod--technology">
                        <div class="swiper-wrapper mod--technology">
                            <div class="swiper-slide mod--technology">
                                <div class="swiper__slide-wrap mod--technology"><img src="{{ asset('images/67ebf5ef4fd434936e7a8ba5_technology__icon-1.svg') }}" loading="lazy" alt="card icon" class="icon width-64">
                                    <div class="benefits__text-wrap"><h3 class="heading-6 mobile-size-20 font-style-worksans">Лазеры</h3>
                                        <p class="text-size-regular text-color-neutral_gray">В описании шаблона лазеры используют для щадящих процедур, удаления тканей и стерилизации.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide mod--technology">
                                <div class="swiper__slide-wrap mod--technology"><img src="{{ asset('images/67ebf5eff5b29ac6fd3476fb_technology__icon-2.svg') }}" loading="lazy" alt="card icon" class="icon width-64">
                                    <div class="benefits__text-wrap"><h3 class="heading-6 mobile-size-20 font-style-worksans">3D-сканер</h3>
                                        <p class="text-size-regular text-color-neutral_gray">В описании шаблона сканер нужен, чтобы рассмотреть зубы и костную ткань.</p></div>
                                </div>
                            </div>
                            <div class="swiper-slide mod--technology">
                                <div class="swiper__slide-wrap mod--technology"><img src="{{ asset('images/67ebf5ee598709db043895bf_technology__icon-3.svg') }}" loading="lazy" alt="card icon" class="icon width-64">
                                    <div class="benefits__text-wrap"><h3 class="heading-6 mobile-size-20 font-style-worksans">CAD/CAM системы</h3>
                                        <p class="text-size-regular text-color-neutral_gray">В описании шаблона системы нужны, чтобы изготавливать коронки, вкладки и протезы.</p></div>
                                </div>
                            </div>
                            <div class="swiper-slide mod--technology">
                                <div class="swiper__slide-wrap mod--technology"><img src="{{ asset('images/67ebf5ef76821f93484c5e9f_technology__icon-4.svg') }}" loading="lazy" alt="card icon" class="icon width-64">
                                    <div class="benefits__text-wrap"><h3 class="heading-6 mobile-size-20 font-style-worksans">Дентальные микроскопы</h3>
                                        <p class="text-size-regular text-color-neutral_gray">В описании шаблона микроскоп используют при сложном лечении каналов и перелечивании.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper__pagination mod--mobile">
                        <div data-swiper-technology="pagination" class="swiper__swiper-nav">
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="section__content-wrap">
                    <div data-w-id="a6af6425-77bd-ff4a-6050-c197d0d0ee08" style="opacity: 0;" class="heading__wrap"><h2 class="heading-4">О клинике</h2>
                        <div class="text__wrap max-width-28"><p class="text-size-regular text-color-graphite">Клиника принимает пациентов в деревне Алексеевка. Подробности записи — по телефону.</p></div>
                    </div>
                    <div class="features__content">
                        <div data-w-id="0b16edb4-36d4-c081-7b37-d5286a468825" style="opacity: 0;" class="features__img-wrap"><img src="{{ asset('images/67ec1b6f4dc7d1da1b05e2f2_features__img.avif') }}" loading="lazy" alt="features wrap img" class="features__img">
                            <div class="features__text-wrap is1">
                                <div class="features__text is1"><p class="text-size-medium mobile-size-14 text-weight-medium">Евростом — стоматологическая клиника в деревне Алексеевка, Центральная улица, 58/1. Приём по записи, телефон +7 (347) 246-85-68.</p>
                                    <p class="text-size-medium mobile-size-14 text-weight-medium">На приёме стараются объяснить ход лечения простыми словами. Отдельный перечень услуг Евростом не опубликован.</p></div>
                            </div>
                        </div>
                        <div class="features__text-wrap is2">
                            <div data-w-id="adb9ae35-bfda-b9e5-5193-82669c84ab42" style="opacity: 0;" class="features__icon"><img src="{{ asset('images/67ec20efbc26469110a99438_icon__tooth.svg') }}" loading="lazy" alt="card icon" class="icon width-64">
                                <h3 class="heading-5 font-style-worksans text-weight-normal">Что важно на приёме</h3>
                            </div>
                            <div data-w-id="e41df9bb-6565-2335-0e83-886b18898d14" style="opacity: 0;" class="features__text is2"><img src="{{ asset('images/67ec21dbf0c4c5c979f67e2f_features__icon-free.svg') }}" loading="lazy" alt="features free icon" class="icon width-24">
                                <p class="text-size-medium mobile-size-14">В макете указаны сертифицированные материалы. Документы Евростом на сайте не выложены.</p></div>
                            <div data-w-id="022075e5-ea36-38c3-06ac-ef6adb67e8eb" style="opacity: 0;" class="features__text is2"><img src="{{ asset('images/67ec21dbf0c4c5c979f67e2f_features__icon-free.svg') }}" loading="lazy" alt="features free icon" class="icon width-24">
                                <p class="text-size-medium mobile-size-14">Направления показаны карточками на этой странице и в разделе услуг.</p></div>
                            <div data-w-id="c6ef40a7-c700-46a4-6d33-7e1b6fd0f30d" style="opacity: 0;" class="features__text is2"><img src="{{ asset('images/67ec21dbf0c4c5c979f67e2f_features__icon-free.svg') }}" loading="lazy" alt="features free icon" class="icon width-24">
                                <p class="text-size-medium mobile-size-14">Имена и стаж на карточках взяты из макета и не подтверждены как штат Евростом.</p></div>
                            <div data-w-id="8b30ec11-a049-5eaf-a2e0-664b390a7fb5" style="opacity: 0;" class="features__text is2"><img src="{{ asset('images/67ec21dbf0c4c5c979f67e2f_features__icon-free.svg') }}" loading="lazy" alt="features free icon" class="icon width-24">
                                <p class="text-size-medium mobile-size-14">План лечения обсуждают по состоянию зубов и жалобам пациента.</p></div>
                            <div data-w-id="43ca8d01-df2c-d620-2b1b-39caedaf3664" style="opacity: 0;" class="features__text is2"><img src="{{ asset('images/67ec21dbf0c4c5c979f67e2f_features__icon-free.svg') }}" loading="lazy" alt="features free icon" class="icon width-24">
                                <p class="text-size-medium mobile-size-14">На приёме стараются держать спокойный тон и объяснять каждый шаг.</p></div>
                            <div data-w-id="44f80439-8ff3-e979-7960-d698e82849b7" style="opacity: 0;" class="features__text is2"><img src="{{ asset('images/67ec21dbf0c4c5c979f67e2f_features__icon-free.svg') }}" loading="lazy" alt="features free icon" class="icon width-24">
                                <p class="text-size-medium mobile-size-14">Состояние зубов смотрят на приёме. Выводы о других заболеваниях по фото зубов клиника не обещает.</p></div>
                        </div>
                    </div>
                    <div data-w-id="062fd756-e651-34a5-c1ae-e6c08941aa2d" style="opacity: 0;" class="button-wrap"><a data-remodal-target="contact" href="/contact" class="button is-large gold w-inline-block">
                            <div>Записаться на приём</div>
                            <img src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}" loading="lazy" alt="icon__arrow-up" class="button__icon-arrow"></a></div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="section__content-wrap">
                    <div data-w-id="30ef9bc7-c5ab-9768-e25f-7b6395c663be" style="opacity: 0;" class="heading__wrap"><h2 class="heading-4">Галерея</h2>
                        <div class="text__wrap max-width-28"><p class="text-size-regular text-color-graphite">Фотографии интерьера из исходного макета страницы.</p></div>
                    </div>
                    <div data-swiper="gallery" data-w-id="7da8ee56-edb9-f7df-23c0-edfc89f09308" style="opacity: 0;" class="swiper mod--gallery">
                        <div class="swiper-wrapper mod--gallery"><a href="#" id="w-node-_6120b76c-48d8-0d6b-5f6c-5efc4d657074-4b26caea" class="swiper-slide mod--gallery w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/67ec2484708348b328f79e8b_gallery__img-1.avif') }}" loading="lazy" id="w-node-_6120b76c-48d8-0d6b-5f6c-5efc4d657075-4b26caea" alt="Фото интерьера" class="gallery__img">
                                <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "67ec2484708348b328f79e8b",
      "origFileName": "gallery__img-1.jpg",
      "fileName": "gallery__img-1.jpg",
      "fileSize": 424141,
      "height": 624,
      "url": "{{ asset('images/67ec2484708348b328f79e8b_gallery__img-1.jpg') }}",
      "width": 576,
      "type": "image"
    }
  ],
  "group": "gallery"
}
                                </script>
                            </a><a href="#" id="w-node-_5104f819-1f2c-9f5b-382f-094b038c7253-4b26caea" class="swiper-slide mod--gallery w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/67f230e1c2541e7ba0e94cbe_gallery__img-2.avif') }}" loading="lazy" id="w-node-_5104f819-1f2c-9f5b-382f-094b038c7255-4b26caea" alt="Фото интерьера" class="gallery__img">
                                <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "67f230e1c2541e7ba0e94cbe",
      "origFileName": "gallery__img-2.jpg",
      "fileName": "gallery__img-2.jpg",
      "fileSize": 344427,
      "height": 624,
      "url": "{{ asset('images/67f230e1c2541e7ba0e94cbe_gallery__img-2.jpg') }}",
      "width": 576,
      "type": "image"
    }
  ],
  "group": "gallery"
}
                                </script>
                            </a><a href="#" id="w-node-e8df9a1e-1701-0c9f-edaa-9d4f3e7d21b4-4b26caea" class="swiper-slide mod--gallery w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/67ec248423c628082d868c2f_gallery__img-3.avif') }}" loading="lazy" id="w-node-e8df9a1e-1701-0c9f-edaa-9d4f3e7d21b7-4b26caea" alt="Фото интерьера" class="gallery__img">
                                <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "67ec248423c628082d868c2f",
      "origFileName": "gallery__img-3.jpg",
      "fileName": "gallery__img-3.jpg",
      "fileSize": 386301,
      "height": 624,
      "url": "{{ asset('images/67ec248423c628082d868c2f_gallery__img-3.jpg') }}",
      "width": 576,
      "type": "image"
    }
  ],
  "group": "gallery"
}
                                </script>
                            </a><a href="#" id="w-node-a357362d-b8af-b3cc-4a41-35efa3cf7dc7-4b26caea" class="swiper-slide mod--gallery w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/67ec2484708348b328f79df7_gallery__img-4.avif') }}" loading="lazy" id="w-node-a357362d-b8af-b3cc-4a41-35efa3cf7dcb-4b26caea" alt="Фото интерьера" class="gallery__img">
                                <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "67ec2484708348b328f79df7",
      "origFileName": "gallery__img-4.jpg",
      "fileName": "gallery__img-4.jpg",
      "fileSize": 354581,
      "height": 624,
      "url": "{{ asset('images/67ec2484708348b328f79df7_gallery__img-4.jpg') }}",
      "width": 576,
      "type": "image"
    }
  ],
  "group": "gallery"
}
                                </script>
                            </a><a href="#" id="w-node-_3c500200-5eb3-fb88-3050-f6d1a0ec3872-4b26caea" class="swiper-slide mod--gallery w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/67ec24843c54398b8ca56350_gallery__img-5.avif') }}" loading="lazy" id="w-node-_3c500200-5eb3-fb88-3050-f6d1a0ec3877-4b26caea" alt="Фото интерьера" class="gallery__img">
                                <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "67ec24843c54398b8ca56350",
      "origFileName": "gallery__img-5.jpg",
      "fileName": "gallery__img-5.jpg",
      "fileSize": 492559,
      "height": 624,
      "url": "{{ asset('images/67ec24843c54398b8ca56350_gallery__img-5.jpg') }}",
      "width": 778,
      "type": "image"
    }
  ],
  "group": "gallery"
}
                                </script>
                            </a><a href="#" id="w-node-_39f9cceb-b3c2-a9ec-ce49-de7e2be774a8-4b26caea" class="swiper-slide mod--gallery w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/67ec2484cc27ddb9042006cd_gallery__img-6.avif') }}" loading="lazy" id="w-node-_39f9cceb-b3c2-a9ec-ce49-de7e2be774af-4b26caea" alt="Фото интерьера" class="gallery__img">
                                <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "67ec2484cc27ddb9042006cd",
      "origFileName": "gallery__img-6.jpg",
      "fileName": "gallery__img-6.jpg",
      "fileSize": 505261,
      "height": 624,
      "url": "{{ asset('images/67ec2484cc27ddb9042006cd_gallery__img-6.jpg') }}",
      "width": 778,
      "type": "image"
    }
  ],
  "group": "gallery"
}
                                </script>
                            </a><a href="#" id="w-node-_8fbb33e1-0804-29e8-6e43-b41cdf58e770-4b26caea" class="swiper-slide mod--gallery w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/67ec24843c54398b8ca5632e_gallery__img-7.avif') }}" loading="lazy" id="w-node-_8fbb33e1-0804-29e8-6e43-b41cdf58e771-4b26caea" alt="Фото интерьера" class="gallery__img">
                                <script type="application/json" class="w-json">{
  "items": [
    {
      "_id": "67ec24843c54398b8ca5632e",
      "origFileName": "gallery__img-7.jpg",
      "fileName": "gallery__img-7.jpg",
      "fileSize": 424689,
      "height": 624,
      "url": "{{ asset('images/67ec24843c54398b8ca5632e_gallery__img-7.jpg') }}",
      "width": 778,
      "type": "image"
    }
  ],
  "group": "gallery"
}
                                </script>
                            </a></div>
                    </div>
                    <div class="swiper__pagination mod--mobile">
                        <div data-swiper-gallery="pagination" class="swiper__swiper-nav">
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section overflow-hidden">
            <div class="container">
                <div class="section__content-wrap">
                    <div data-w-id="9c779dad-3ba9-ade9-f03f-643a1e179ef2" class="heading__wrap" style="opacity: 0;"><h2 class="heading-4">Сертификаты</h2>
                        <div class="text__wrap max-width-28"><p class="text-size-regular text-color-graphite">«Чтобы расти в профессии, нужно постоянно учиться и отрабатывать навыки...»</p></div>
                    </div>
                    <div data-hover="cursor" data-swiper="certificate" data-w-id="9c779dad-3ba9-ade9-f03f-643a1e179ef8" class="swiper mod--certificate w-dyn-list" style="opacity: 0;">
                        <div role="list" class="swiper-wrapper mod--certificate w-dyn-items" id="swiper-wrapper-a373e12cf99c5bc6" aria-live="polite">
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="1 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/68768f2f9439f10b5755c003_petrenko-kirill-setificat05.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768f2f9439f10b5755c003_petrenko-kirill-setificat05-p-500.webp') }} 500w, {{ asset('images/68768f2f9439f10b5755c003_petrenko-kirill-setificat05.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/68768f2f9439f10b5755c003_petrenko-kirill-setificat05.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/68768f2f9439f10b5755c003_petrenko-kirill-setificat05.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768f2f9439f10b5755c003_petrenko-kirill-setificat05-p-500.webp') }} 500w, {{ asset('images/68768f2f9439f10b5755c003_petrenko-kirill-setificat05.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="2 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/68768e26eddb178a2fae8dd9_mildner-maryana-sertificat06.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768e26eddb178a2fae8dd9_mildner-maryana-sertificat06-p-500.webp') }} 500w, {{ asset('images/68768e26eddb178a2fae8dd9_mildner-maryana-sertificat06.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/68768e26eddb178a2fae8dd9_mildner-maryana-sertificat06.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/68768e26eddb178a2fae8dd9_mildner-maryana-sertificat06.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768e26eddb178a2fae8dd9_mildner-maryana-sertificat06-p-500.webp') }} 500w, {{ asset('images/68768e26eddb178a2fae8dd9_mildner-maryana-sertificat06.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="3 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/68768df99456cfa518658e95_mildner-maryana-sertificat04.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768df99456cfa518658e95_mildner-maryana-sertificat04-p-500.webp') }} 500w, {{ asset('images/68768df99456cfa518658e95_mildner-maryana-sertificat04.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/68768df99456cfa518658e95_mildner-maryana-sertificat04.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/68768df99456cfa518658e95_mildner-maryana-sertificat04.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768df99456cfa518658e95_mildner-maryana-sertificat04-p-500.webp') }} 500w, {{ asset('images/68768df99456cfa518658e95_mildner-maryana-sertificat04.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="4 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/68768dddfe4447df59f03854_mildner-maryana-sertificat03.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768dddfe4447df59f03854_mildner-maryana-sertificat03-p-500.webp') }} 500w, {{ asset('images/68768dddfe4447df59f03854_mildner-maryana-sertificat03.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/68768dddfe4447df59f03854_mildner-maryana-sertificat03.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/68768dddfe4447df59f03854_mildner-maryana-sertificat03.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768dddfe4447df59f03854_mildner-maryana-sertificat03-p-500.webp') }} 500w, {{ asset('images/68768dddfe4447df59f03854_mildner-maryana-sertificat03.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="5 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/68768db91672b60cee271f30_mildner-maryana-sertificat05.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768db91672b60cee271f30_mildner-maryana-sertificat05-p-500.webp') }} 500w, {{ asset('images/68768db91672b60cee271f30_mildner-maryana-sertificat05.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/68768db91672b60cee271f30_mildner-maryana-sertificat05.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/68768db91672b60cee271f30_mildner-maryana-sertificat05.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768db91672b60cee271f30_mildner-maryana-sertificat05-p-500.webp') }} 500w, {{ asset('images/68768db91672b60cee271f30_mildner-maryana-sertificat05.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="6 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/68768d8d02f2a5f31f691e25_mildner-maryana-sertificat02.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768d8d02f2a5f31f691e25_mildner-maryana-sertificat02-p-500.webp') }} 500w, {{ asset('images/68768d8d02f2a5f31f691e25_mildner-maryana-sertificat02.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/68768d8d02f2a5f31f691e25_mildner-maryana-sertificat02.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/68768d8d02f2a5f31f691e25_mildner-maryana-sertificat02.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768d8d02f2a5f31f691e25_mildner-maryana-sertificat02-p-500.webp') }} 500w, {{ asset('images/68768d8d02f2a5f31f691e25_mildner-maryana-sertificat02.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="7 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/68768d5a51e224fda26c7d7b_mildner-maryana-sertificat01.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768d5a51e224fda26c7d7b_mildner-maryana-sertificat01-p-500.webp') }} 500w, {{ asset('images/68768d5a51e224fda26c7d7b_mildner-maryana-sertificat01.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/68768d5a51e224fda26c7d7b_mildner-maryana-sertificat01.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/68768d5a51e224fda26c7d7b_mildner-maryana-sertificat01.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768d5a51e224fda26c7d7b_mildner-maryana-sertificat01-p-500.webp') }} 500w, {{ asset('images/68768d5a51e224fda26c7d7b_mildner-maryana-sertificat01.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="8 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/68768d1fd29c5cf2725b459b_buhrim-anna-sertificat02.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768d1fd29c5cf2725b459b_buhrim-anna-sertificat02-p-500.webp') }} 500w, {{ asset('images/68768d1fd29c5cf2725b459b_buhrim-anna-sertificat02.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/68768d1fd29c5cf2725b459b_buhrim-anna-sertificat02.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/68768d1fd29c5cf2725b459b_buhrim-anna-sertificat02.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768d1fd29c5cf2725b459b_buhrim-anna-sertificat02-p-500.webp') }} 500w, {{ asset('images/68768d1fd29c5cf2725b459b_buhrim-anna-sertificat02.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="9 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/68768cfbe31927b50f72177d_buhrim-anna-sertificat01.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768cfbe31927b50f72177d_buhrim-anna-sertificat01-p-500.webp') }} 500w, {{ asset('images/68768cfbe31927b50f72177d_buhrim-anna-sertificat01.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/68768cfbe31927b50f72177d_buhrim-anna-sertificat01.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/68768cfbe31927b50f72177d_buhrim-anna-sertificat01.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68768cfbe31927b50f72177d_buhrim-anna-sertificat01-p-500.webp') }} 500w, {{ asset('images/68768cfbe31927b50f72177d_buhrim-anna-sertificat01.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="10 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/687677fc5b1319b3c327bb68_petrenko-kirill-setificat04.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/687677fc5b1319b3c327bb68_petrenko-kirill-setificat04-p-500.webp') }} 500w, {{ asset('images/687677fc5b1319b3c327bb68_petrenko-kirill-setificat04.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/687677fc5b1319b3c327bb68_petrenko-kirill-setificat04.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/687677fc5b1319b3c327bb68_petrenko-kirill-setificat04.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/687677fc5b1319b3c327bb68_petrenko-kirill-setificat04-p-500.webp') }} 500w, {{ asset('images/687677fc5b1319b3c327bb68_petrenko-kirill-setificat04.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="11 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/687677cc16ee12d2a5d23f71_petrenko-kirill-setificat03.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/687677cc16ee12d2a5d23f71_petrenko-kirill-setificat03-p-500.webp') }} 500w, {{ asset('images/687677cc16ee12d2a5d23f71_petrenko-kirill-setificat03.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/687677cc16ee12d2a5d23f71_petrenko-kirill-setificat03.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/687677cc16ee12d2a5d23f71_petrenko-kirill-setificat03.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/687677cc16ee12d2a5d23f71_petrenko-kirill-setificat03-p-500.webp') }} 500w, {{ asset('images/687677cc16ee12d2a5d23f71_petrenko-kirill-setificat03.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="12 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/687677a6ed001495ecb7bfb4_petrenko-kirill-setificat02.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/687677a6ed001495ecb7bfb4_petrenko-kirill-setificat02-p-500.webp') }} 500w, {{ asset('images/687677a6ed001495ecb7bfb4_petrenko-kirill-setificat02.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/687677a6ed001495ecb7bfb4_petrenko-kirill-setificat02.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/687677a6ed001495ecb7bfb4_petrenko-kirill-setificat02.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/687677a6ed001495ecb7bfb4_petrenko-kirill-setificat02-p-500.webp') }} 500w, {{ asset('images/687677a6ed001495ecb7bfb4_petrenko-kirill-setificat02.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="13 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/6876776e13eafba8da5fbc2d_petrenko-kirill-setificat01.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/6876776e13eafba8da5fbc2d_petrenko-kirill-setificat01-p-500.webp') }} 500w, {{ asset('images/6876776e13eafba8da5fbc2d_petrenko-kirill-setificat01.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/6876776e13eafba8da5fbc2d_petrenko-kirill-setificat01.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/6876776e13eafba8da5fbc2d_petrenko-kirill-setificat01.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/6876776e13eafba8da5fbc2d_petrenko-kirill-setificat01-p-500.webp') }} 500w, {{ asset('images/6876776e13eafba8da5fbc2d_petrenko-kirill-setificat01.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="14 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/687677371404a67aef55eaf6_petrenko-olga-setificat06.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/687677371404a67aef55eaf6_petrenko-olga-setificat06-p-500.webp') }} 500w, {{ asset('images/687677371404a67aef55eaf6_petrenko-olga-setificat06.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/687677371404a67aef55eaf6_petrenko-olga-setificat06.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/687677371404a67aef55eaf6_petrenko-olga-setificat06.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/687677371404a67aef55eaf6_petrenko-olga-setificat06-p-500.webp') }} 500w, {{ asset('images/687677371404a67aef55eaf6_petrenko-olga-setificat06.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="15 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/68767724f35a2067b86c07bb_petrenko-olga-setificat05.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68767724f35a2067b86c07bb_petrenko-olga-setificat05-p-500.webp') }} 500w, {{ asset('images/68767724f35a2067b86c07bb_petrenko-olga-setificat05.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/68767724f35a2067b86c07bb_petrenko-olga-setificat05.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/68767724f35a2067b86c07bb_petrenko-olga-setificat05.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68767724f35a2067b86c07bb_petrenko-olga-setificat05-p-500.webp') }} 500w, {{ asset('images/68767724f35a2067b86c07bb_petrenko-olga-setificat05.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="16 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/68767718d1e500cce5f3f0aa_petrenko-olga-setificat04.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68767718d1e500cce5f3f0aa_petrenko-olga-setificat04-p-500.webp') }} 500w, {{ asset('images/68767718d1e500cce5f3f0aa_petrenko-olga-setificat04.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/68767718d1e500cce5f3f0aa_petrenko-olga-setificat04.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/68767718d1e500cce5f3f0aa_petrenko-olga-setificat04.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/68767718d1e500cce5f3f0aa_petrenko-olga-setificat04-p-500.webp') }} 500w, {{ asset('images/68767718d1e500cce5f3f0aa_petrenko-olga-setificat04.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="17 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/6876770da63fe0578df34f37_petrenko-olga-setificat03.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/6876770da63fe0578df34f37_petrenko-olga-setificat03-p-500.webp') }} 500w, {{ asset('images/6876770da63fe0578df34f37_petrenko-olga-setificat03.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/6876770da63fe0578df34f37_petrenko-olga-setificat03.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/6876770da63fe0578df34f37_petrenko-olga-setificat03.webp') }}" loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/6876770da63fe0578df34f37_petrenko-olga-setificat03-p-500.webp') }} 500w, {{ asset('images/6876770da63fe0578df34f37_petrenko-olga-setificat03.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="18 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/687676a893b837b7d5f9c703_petrenko-olga-setificat02.webp') }}" loading="lazy" alt=" Сертификат Ольги Петренко — диагностика и планирование" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/687676a893b837b7d5f9c703_petrenko-olga-setificat02-p-500.webp') }} 500w, {{ asset('images/687676a893b837b7d5f9c703_petrenko-olga-setificat02.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/687676a893b837b7d5f9c703_petrenko-olga-setificat02.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/687676a893b837b7d5f9c703_petrenko-olga-setificat02.webp') }}" loading="lazy" alt=" Сертификат Ольги Петренко — диагностика и планирование" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/687676a893b837b7d5f9c703_petrenko-olga-setificat02-p-500.webp') }} 500w, {{ asset('images/687676a893b837b7d5f9c703_petrenko-olga-setificat02.webp') }} 578w" class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="19 / 19"><a href="#" class="w-inline-block w-lightbox" aria-label="Открыть фото" aria-haspopup="dialog"><img src="{{ asset('images/687676436821f00fc5c068f7_petrenko-olga-setificat01.webp') }}" loading="lazy" alt=" Сертификат Ольги Петренко — артикулятор в клинике и лаборатории" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/687676436821f00fc5c068f7_petrenko-olga-setificat01-p-500.webp') }} 500w, {{ asset('images/687676436821f00fc5c068f7_petrenko-olga-setificat01.webp') }} 578w" class="certificate__img">
                                    <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "{{ asset('images/687676436821f00fc5c068f7_petrenko-olga-setificat01.webp') }}",
      "type": "image"
    }
  ],
  "group": "certificate"
}
                                    </script>
                                </a><img src="{{ asset('images/687676436821f00fc5c068f7_petrenko-olga-setificat01.webp') }}" loading="lazy" alt=" Сертификат Ольги Петренко — артикулятор в клинике и лаборатории" sizes="(max-width: 767px) 70vw, 300px" srcset="{{ asset('images/687676436821f00fc5c068f7_petrenko-olga-setificat01-p-500.webp') }} 500w, {{ asset('images/687676436821f00fc5c068f7_petrenko-olga-setificat01.webp') }} 578w" class="certificate__img hide"></div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <div class="swiper__pagination mod--mobile">
                        <div data-swiper-certificate="pagination" class="swiper__swiper-nav">
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section overflow-hidden">
            <div class="container">
                <div class="section__content-wrap">
                    <div data-w-id="8d7640e9-5ef1-bbe4-af09-fa71d821061a" class="heading__wrap" style="opacity: 0;"><h2 class="heading-4">Пациенты о Евростом</h2>
                        <div class="text__wrap max-width-19"><p class="text-size-regular text-color-graphite">Тексты отзывов ниже — из макета сайта, это не отзывы с Яндекс Карт.</p></div>
                    </div>
                    <div data-hover="cursor" data-swiper="reviews" data-w-id="8d7640e9-5ef1-bbe4-af09-fa71d8210620" class="swiper mod--reviews w-dyn-list" style="opacity: 0;">
                        <div role="list" class="swiper-wrapper mod--reviews w-dyn-items" id="swiper-wrapper-5310f10db5106afc41e" aria-live="polite">
                            <div role="group" class="swiper-slide mod--reviews w-dyn-item" aria-label="1 / 4">
                                <div class="reviews__ava-wrap"><img src="{{ asset('images/68751e2f5e05bf26d84b822e_ico-review-1.png') }}" loading="lazy" alt="" class="reviews__icon">
                                    <div class="reviews__text-wrap is1"><p class="text-size-medium text-weight-medium">
                                            Олег Лазаренко</p>
                                        <p class="text-size-regular text-color-neutral_gray">11.02.2025</p></div>
                                </div>
                                <p class="text-size-medium mobile-size-14">Хожу в Евростом уже 3 года и доволен. Лечил здесь кариес, удалял зуб мудрости, делал чистку и ни разу не пожалел, что обратился именно сюда. Врачи знают своё дело и работают аккуратно. Советую тем, кому важны качество и спокойное отношение.</p></div>
                            <div role="group" class="swiper-slide mod--reviews w-dyn-item" aria-label="2 / 4">
                                <div class="reviews__ava-wrap"><img src="{{ asset('images/68751e1dafa16bbc2ef5e5bf_ico-review-2.png') }}" loading="lazy" alt="" class="reviews__icon">
                                    <div class="reviews__text-wrap is1"><p class="text-size-medium text-weight-medium">
                                            Елена Кульчицкая</p>
                                        <p class="text-size-regular text-color-neutral_gray">02.08.2024</p></div>
                                </div>
                                <p class="text-size-medium mobile-size-14">Пришла с ребёнком на приём. Понравилось всё, начиная с того, как нас встретили. Врач была спокойная и внимательная, объясняла просто и понятно. Лечение прошло нормально, без слёз и крика. Видно, что умеют работать с детьми.</p></div>
                            <div role="group" class="swiper-slide mod--reviews w-dyn-item" aria-label="3 / 4">
                                <div class="reviews__ava-wrap"><img src="{{ asset('images/68751e0bf9380177ca218441_ico-review-3.png') }}" loading="lazy" alt="" class="reviews__icon">
                                    <div class="reviews__text-wrap is1"><p class="text-size-medium text-weight-medium">
                                            Ирина Федунь</p>
                                        <p class="text-size-regular text-color-neutral_gray">04.06.2024</p></div>
                                </div>
                                <p class="text-size-medium mobile-size-14">Очень довольна визитом в Евростом. Пришла с сильной зубной болью, оказался пульпит. Лечение прошло профессионально, аккуратно и без боли. Врачи внимательные, в клинике спокойная атмосфера. Рекомендую.</p>
                            </div>
                            <div role="group" class="swiper-slide mod--reviews w-dyn-item" aria-label="4 / 4">
                                <div class="reviews__ava-wrap"><img src="{{ asset('images/68751de8d993b092fe3713a8_ico-review-4.png') }}" loading="lazy" alt="" class="reviews__icon">
                                    <div class="reviews__text-wrap is1"><p class="text-size-medium text-weight-medium">
                                            Назар Романчук</p>
                                        <p class="text-size-regular text-color-neutral_gray">14.05.2024</p></div>
                                </div>
                                <p class="text-size-medium mobile-size-14">Начал лечение на элайнерах, потому что хотел исправить прикус без брекетов. В Евростом всё организовано хорошо, врачи объясняют каждый шаг и следят за результатом. Элайнеры носить удобно, изменения уже видны. </p>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <div class="swiper__pagination mod--mobile">
                        <div data-swiper-reviews="pagination" class="swiper__swiper-nav">
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                            <div class="swiper__pagination-bullet">
                                <div data-anim="" class="swiper__pagination-bullet-active"></div>
                            </div>
                        </div>
                    </div>
                    <div mobile-hide="" data-w-id="8d7640e9-5ef1-bbe4-af09-fa71d8210636" class="button-wrap" style="opacity: 0;"><a href="https://yandex.ru/maps/org/yevrostom/27380149446/reviews/" target="_blank" class="button is-large gray w-inline-block"><img src="{{ asset('images/67ed28adb59c1de594c623ed_icon-google.svg') }}" loading="lazy" alt="" class="icon width-24">
                            <div>Отзывы на Яндекс Картах</div>
                        </a></div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div data-w-id="45100916-48bc-7640-6c7c-b98fa9470b5f" class="cta__content-wrap" style="opacity: 0;">
                    <div class="cta__heading-wrap">
                        <div class="cta__text-wrap"><p class="text-size-regular">Позвоните и запишитесь на приём. Телефон +7 (347) 246-85-68.</p></div>
                        <h2 class="heading-4">Запись на приём</h2></div>
                    <div class="cta__form">
                        <div class="cta__form-line"></div>
                        <div class="form__block cta w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form cta" onsubmit="window.location.href='tel:+73472468568';return false;" data-wf-page-id="67ea68f011b0fd6e4b26caea" data-wf-element-id="45100916-48bc-7640-6c7c-b98fa9470b69" aria-label="Форма записи"><p class="text-size-medium mobile-size-14 text-align-center">Первичный осмотр и консультация — по записи.<br>Онлайн-заявка не подключена. Позвоните, чтобы выбрать время.</p>
                                <div class="text__field-wrap cta"><input class="text__field w-input" maxlength="256" name="Name" data-name="Name" placeholder="Ваше имя" type="text" id="Name" required=""><input class="text__field w-input" data-input-phone="" maxlength="256" name="Phone" data-name="Phone" placeholder="Ваш телефон" type="tel" id="Phone" required=""></div>
                                <div class="button is-large gold"><input type="submit" data-wait="" class="submit__button w-button" value="">
                                    <div>Позвонить</div>
                                </div>
                            </form>
                            <div class="success__message w-form-done" tabindex="-1" role="region" aria-label="Форма отправлена">
                                <div class="text-size-medium">Спасибо, что выбираете Евростом. Мы перезвоним, чтобы выбрать удобное время. Ожидайте звонок.
                                </div>
                            </div>
                            <div class="w-form-fail" tabindex="-1" role="region" aria-label="Email Form failure">
                                <div>Заявка не отправляется. Позвоните: +7 (347) 246-85-68.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="section__content-wrap">
                    <div data-w-id="b36c7e3d-c32a-dd40-6911-4600b7752a61" style="opacity: 0;" class="heading__wrap"><h2 class="heading-4">Вопросы и ответы</h2>
                        <div class="text__wrap max-width-19"><p class="text-size-regular text-color-graphite">
                                Короткие ответы из макета страницы. Это не индивидуальная рекомендация.</p></div>
                    </div>
                    <div class="collection__list-wrap mod--faq w-dyn-list">
                        <div role="list" class="collection__list mod--faq w-dyn-items">
                            <div data-w-id="d81a5c03-f149-3d45-a11e-698bc8c814a1" style="opacity: 0;" role="listitem" class="collection__item w-dyn-item">
                                <div dropdown-single="" dropdown="" dropdown-anim="" class="faq__drop-wrap">
                                    <div data-anim="" class="dropdown faq">
                                        <div drop-trigger="" class="dropdown-toggle faq"><h3 class="heading-5 mobile-size-14 font-style-worksans text-weight-normal">
                                                Сколько длится лечение и сколько нужно визитов?</h3>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-anim="" class="dropdown-list faq" style="height: 0px;">
                                            <div class="faq__text-wrap"><p class="text-size-medium mobile-size-14 text-color-neutral_gray">
                                                    Зависит от случая. Пломба в макете указана как 30–60 минут. Протезирование и каналы — несколько визитов. Сроки и стоимость Евростом называет на приёме, прайс на сайте не опубликован.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-w-id="d81a5c03-f149-3d45-a11e-698bc8c814a1" style="opacity: 0;" role="listitem" class="collection__item w-dyn-item">
                                <div dropdown-single="" dropdown="" dropdown-anim="" class="faq__drop-wrap">
                                    <div data-anim="" class="dropdown faq">
                                        <div drop-trigger="" class="dropdown-toggle faq"><h3 class="heading-5 mobile-size-14 font-style-worksans text-weight-normal">
                                                Что делать, если откололся зуб или выпала пломба?</h3>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-anim="" class="dropdown-list faq" style="height: 0px;">
                                            <div class="faq__text-wrap"><p class="text-size-medium mobile-size-14 text-color-neutral_gray">
                                                    Обратитесь к стоматологу. Даже без боли в зуб могут попасть бактерии. До визита не жуйте на повреждённой стороне и избегайте горячего и холодного.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-w-id="d81a5c03-f149-3d45-a11e-698bc8c814a1" style="opacity: 0;" role="listitem" class="collection__item w-dyn-item">
                                <div dropdown-single="" dropdown="" dropdown-anim="" class="faq__drop-wrap">
                                    <div data-anim="" class="dropdown faq">
                                        <div drop-trigger="" class="dropdown-toggle faq"><h3 class="heading-5 mobile-size-14 font-style-worksans text-weight-normal">
                                                Какие коронки бывают: циркониевые, керамические или металлокерамика?</h3>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-anim="" class="dropdown-list faq" style="height: 0px;">
                                            <div class="faq__text-wrap"><p class="text-size-medium mobile-size-14 text-color-neutral_gray">
                                                    Зависит от задачи. Циркониевые — прочные и выглядят естественно. Керамические — ближе к виду эмали, их чаще ставят на передние зубы. Металлокерамика — более простой вариант, у края десны может просвечивать металл. Что подойдёт, решает врач на осмотре.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-w-id="d81a5c03-f149-3d45-a11e-698bc8c814a1" style="opacity: 0;" role="listitem" class="collection__item w-dyn-item">
                                <div dropdown-single="" dropdown="" dropdown-anim="" class="faq__drop-wrap">
                                    <div data-anim="" class="dropdown faq">
                                        <div drop-trigger="" class="dropdown-toggle faq"><h3 class="heading-5 mobile-size-14 font-style-worksans text-weight-normal">
                                                Можно ли лечить зубы во время беременности?</h3>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-anim="" class="dropdown-list faq" style="height: 0px;">
                                            <div class="faq__text-wrap"><p class="text-size-medium mobile-size-14 text-color-neutral_gray">При боли или воспалении к врачу обращаются и во время беременности. В макете более спокойным назван второй триместр. Метод выбирает врач на приёме.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-w-id="d81a5c03-f149-3d45-a11e-698bc8c814a1" style="opacity: 0;" role="listitem" class="collection__item w-dyn-item">
                                <div dropdown-single="" dropdown="" dropdown-anim="" class="faq__drop-wrap">
                                    <div data-anim="" class="dropdown faq">
                                        <div drop-trigger="" class="dropdown-toggle faq"><h3 class="heading-5 mobile-size-14 font-style-worksans text-weight-normal">
                                                Как часто приходить к стоматологу?</h3>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-anim="" class="dropdown-list faq" style="height: 0px;">
                                            <div class="faq__text-wrap"><p class="text-size-medium mobile-size-14 text-color-neutral_gray">
                                                    В макете указан осмотр раз в 6 месяцев, даже если ничего не болит: так раньше видны кариес и воспаление.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-w-id="d81a5c03-f149-3d45-a11e-698bc8c814a1" style="opacity: 0;" role="listitem" class="collection__item w-dyn-item">
                                <div dropdown-single="" dropdown="" dropdown-anim="" class="faq__drop-wrap">
                                    <div data-anim="" class="dropdown faq">
                                        <div drop-trigger="" class="dropdown-toggle faq"><h3 class="heading-5 mobile-size-14 font-style-worksans text-weight-normal">
                                                Больно ли лечить зубы?</h3>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-anim="" class="dropdown-list faq" style="height: 0px;">
                                            <div class="faq__text-wrap"><p class="text-size-medium mobile-size-14 text-color-neutral_gray">В макете сказано, что лечение проходит с анестезией. Ощущения зависят от случая, это обговаривают на приёме.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
