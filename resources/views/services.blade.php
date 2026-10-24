@extends('layouts.app')

@section('wf-page', '67f654a11d2d5d55ce79cb63')

@push('page-css')
    <link rel="stylesheet" href="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/css/dentalux-project.webflow.67f654a11d2d5d55ce79cb63-55b425f4c.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/css/dentalux-project.webflow.67f76d04cb2aba4b76b32096-d6399412a.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endpush

@section('content')
<main class="main">
        <section class="section mod--about">
            <div class="container">
                <div class="services__hero-content">
                    <div data-w-id="797b26ae-3eac-0bc6-0488-1c0cba46f935"
                         style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                         class="services__hero-col mod--services-slider">
                        <div class="services__icon-wrap is1">
                            <div
                                class="swiper-pagination mod--services-hero swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                      role="button" aria-label="Перейти к слайду 1" aria-current="true"></span><span
                                    class="swiper-pagination-bullet" tabindex="0" role="button"
                                    aria-label="Перейти к слайду 2"></span><span class="swiper-pagination-bullet"
                                                                            tabindex="0" role="button"
                                                                            aria-label="Перейти к слайду 3"></span><span
                                    class="swiper-pagination-bullet" tabindex="0" role="button"
                                    aria-label="Перейти к слайду 4"></span></div>
                        </div>
                        <div data-swiper="services-hero"
                             class="swiper mod--services-hero swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight swiper-backface-hidden">
                            <div class="swiper-wrapper"
                                 style="height: 266px; transform: translate3d(-1470px, 0px, 0px); transition-duration: 0ms;"
                                 id="swiper-wrapper-4a47e423d10991ea9" aria-live="off">
                                <div
                                    class="swiper-slide mod--services-hero swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev"
                                    data-swiper-slide-index="3" style="width: 278px; margin-right: 16px;" role="group"
                                    aria-label="4 / 4"><img
                                        src="{{ asset('images/68774fb8c01ca2db03e63005_icon__slide-3.svg') }}"
                                        loading="lazy" alt="" class="icon mod--hero-slider">
                                    <p class="heading-5">Спокойная атмосфера</p>
                                    <p class="text-size-regular">Нам важно не только качество лечения, но и то, как вы себя чувствуете. Спокойный интерьер и внимательный персонал помогают расслабиться.</p></div>
                                <div class="swiper-slide mod--services-hero swiper-slide-duplicate-active"
                                     data-swiper-slide-index="0" style="width: 278px; margin-right: 16px;" role="group"
                                     aria-label="1 / 4"><img
                                        src="{{ asset('images/67ebe50845130aba938d8aaf_benefits__icon-1.svg') }}"
                                        loading="lazy" alt="Иконка" class="icon mod--hero-slider">
                                    <p class="heading-5">Современное оборудование</p>
                                    <p class="text-size-regular">Используем современные технологии, чтобы точнее проводить диагностику и лечение. Оборудование помогает снизить риски и получить результат в разумный срок.</p></div>
                                <div class="swiper-slide mod--services-hero" data-swiper-slide-index="1"
                                     style="width: 278px; margin-right: 16px;" role="group" aria-label="2 / 4"><img
                                        src="{{ asset('images/68774fb84b5396869ef02d59_icon__slide-1.svg') }}"
                                        loading="lazy" alt="" class="icon mod--hero-slider">
                                    <p class="heading-5">Опытные специалисты</p>
                                    <p class="text-size-regular">Наша команда — врачи с большим стажем. Мы стремимся, чтобы каждый пациент получил аккуратное и понятное лечение.</p></div>
                                <div class="swiper-slide mod--services-hero" data-swiper-slide-index="2"
                                     style="width: 278px; margin-right: 16px;" role="group" aria-label="3 / 4"><img
                                        src="{{ asset('images/68774fb91840940addaa4f1c_icon__slide-2.svg') }}"
                                        loading="lazy" alt="" class="icon mod--hero-slider">
                                    <p class="heading-5">Индивидуальный подход</p>
                                    <p class="text-size-regular">Мы учитываем ваши пожелания и состояние здоровья и подбираем лечение под конкретную ситуацию.</p></div>
                                <div
                                    class="swiper-slide mod--services-hero swiper-slide-prev swiper-slide-duplicate-next"
                                    data-swiper-slide-index="3" style="width: 278px; margin-right: 16px;" role="group"
                                    aria-label="4 / 4"><img
                                        src="{{ asset('images/68774fb8c01ca2db03e63005_icon__slide-3.svg') }}"
                                        loading="lazy" alt="" class="icon mod--hero-slider">
                                    <p class="heading-5">Спокойная атмосфера</p>
                                    <p class="text-size-regular">Нам важно не только качество лечения, но и то, как вы себя чувствуете. Спокойный интерьер и внимательный персонал помогают расслабиться.</p></div>
                                <div class="swiper-slide mod--services-hero swiper-slide-duplicate swiper-slide-active"
                                     data-swiper-slide-index="0" role="group" aria-label="1 / 4"
                                     style="width: 278px; margin-right: 16px;"><img
                                        src="{{ asset('images/67ebe50845130aba938d8aaf_benefits__icon-1.svg') }}"
                                        loading="lazy" alt="Иконка" class="icon mod--hero-slider">
                                    <p class="heading-5">Современное оборудование</p>
                                    <p class="text-size-regular">Используем современные технологии, чтобы точнее проводить диагностику и лечение. Оборудование помогает снизить риски и получить результат в разумный срок.</p></div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                    <div data-w-id="19936039-c2c9-d67b-d340-e939ee3f8431"
                         style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                         class="services__hero-text-wrap"><h1 class="heading-2">Наши услуги</h1>
                        <p class="text-size-medium mobile-size-14">Мы оказываем широкий спектр стоматологических услуг: от профессиональной гигиены до хирургических вмешательств. Оборудование и индивидуальный план помогают провести лечение аккуратно.</p></div>
                    <a data-w-id="0d5651a3-88c6-a4f4-619d-6eb9fab6e975"
                       style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                       href="tel:{{ config('clinic.phone_tel') }}" class="contact__phone-btn w-inline-block">
                        <div class="alt-for-link">Подробнее</div>
                    </a></div>
            </div>
            <img class="services__img-bg"
                 src="{{ asset('images/67f654d0d10b6b2861a373d5_services__img-hero.avif') }}"
                 alt="Фото услуги" mobile-hide="" style="opacity: 1;" sizes="(max-width: 2880px) 100vw, 2880px"
                 data-w-id="d2fd1c8d-6d93-8572-9b65-23d7ea0ff3b5" loading="lazy"
                 srcset="{{ asset('images/67f654d0d10b6b2861a373d5_services__img-hero-p-500.avif') }} 500w, {{ asset('images/67f654d0d10b6b2861a373d5_services__img-hero-p-800.avif') }} 800w, {{ asset('images/67f654d0d10b6b2861a373d5_services__img-hero-p-1080.avif') }} 1080w, {{ asset('images/67f654d0d10b6b2861a373d5_services__img-hero.avif') }} 2880w"><img
                src="{{ asset('images/67f8ec34754596a81b9a24bf_services__img-hero-mob.avif') }}"
                loading="lazy" style="opacity: 1;" data-w-id="ab244ad4-1744-485f-58eb-dd3f2961fa35"
                alt="Фото услуги" desktop-hide="" class="services__img-bg">
            <div class="bread-crumbs"><a href="/" class="bread-crumbs__text">Главная</a>
                <div class="bread-crumbs__text">/</div>
                <div class="bread-crumbs__text active">Услуги</div>
            </div>
        </section>
        <section class="section overflow-hidden">
            <div class="container">
                <div class="services__content-wrap">
                    <div data-w-id="1f9e4efa-878b-52f7-2dd3-72432bf3d02c" style="opacity: 0;" class="heading__wrap"><h2
                            class="heading-4">Услуги стоматологии {{ config('clinic.name') }}</h2>
                        <div class="text__wrap max-width-22"><p class="text-size-regular text-color-graphite">Мы предлагаем широкий спектр стоматологических услуг. Здоровье пациента для нас на первом месте.</p></div>
                    </div>
                    <div class="collection__list-wrap mod--services w-dyn-list">
                        <div role="list" class="collection__list mod--services w-dyn-items">
                            <div data-w-id="1f9e4efa-878b-52f7-2dd3-72432bf3d034" style="opacity: 0;" role="listitem"
                                 class="collection__item mod--services w-dyn-item">
                                <div class="collection__item-wrap mod--services"><img desktop-hide="" loading="lazy"
                                                                                      alt=""
                                                                                      src="{{ asset('images/6886587459c4754926019a75_cilnokeramichni-koronki-m.webp') }}"
                                                                                      sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px"
                                                                                      srcset="{{ asset('images/6886587459c4754926019a75_cilnokeramichni-koronki-m-p-500.webp') }} 500w, {{ asset('images/6886587459c4754926019a75_cilnokeramichni-koronki-m.webp') }} 780w"
                                                                                      class="services__img"><img
                                        mobile-hide="" loading="lazy" alt=""
                                        src="{{ asset('images/688658850a6dfb673a9bb954_cilnokeramichni-koronki-sc.webp') }}"
                                        sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px"
                                        srcset="{{ asset('images/688658850a6dfb673a9bb954_cilnokeramichni-koronki-sc-p-500.webp') }} 500w, {{ asset('images/688658850a6dfb673a9bb954_cilnokeramichni-koronki-sc-p-800.webp') }} 800w, {{ asset('images/688658850a6dfb673a9bb954_cilnokeramichni-koronki-sc.webp') }} 1024w"
                                        class="services__img"><a href="/services"
                                                                 class="services__link w-inline-block">
                                        <div class="services__heading-wrap"><h3
                                                class="heading-5 mobile-size-14 text-style-2lines text-weight-normal font-style-worksans">
                                                Ортопедические конструкции</h3>
                                            <div class="button is-icon mod--services">
                                                <div class="button__icon w-embed">
                                                    <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="services__text-anim">
                                            <div class="services__text-wrap"><p class="text-size-regular">
                                                    Цельнокерамические коронки повторяют прозрачность эмали, поэтому их ставят на передние зубы и другие заметные участки.</p></div>
                                        </div>
                                        <div class="alt-for-link">Подробнее</div>
                                    </a></div>
                            </div>
                            <div data-w-id="1f9e4efa-878b-52f7-2dd3-72432bf3d034" style="opacity: 0;" role="listitem"
                                 class="collection__item mod--services w-dyn-item">
                                <div class="collection__item-wrap mod--services"><img desktop-hide="" loading="lazy"
                                                                                      alt=""
                                                                                      src="{{ asset('images/6886595f1edcf2430c483c64_implantaciya-zubiv-m.webp') }}"
                                                                                      sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px"
                                                                                      srcset="{{ asset('images/6886595f1edcf2430c483c64_implantaciya-zubiv-m-p-500.webp') }} 500w, {{ asset('images/6886595f1edcf2430c483c64_implantaciya-zubiv-m.webp') }} 780w"
                                                                                      class="services__img"><img
                                        mobile-hide="" loading="lazy" alt=""
                                        src="{{ asset('images/6886595c2a63a1885027d203_implantaciya-zubiv-sc.webp') }}"
                                        sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px"
                                        srcset="{{ asset('images/6886595c2a63a1885027d203_implantaciya-zubiv-sc-p-500.webp') }} 500w, {{ asset('images/6886595c2a63a1885027d203_implantaciya-zubiv-sc-p-800.webp') }} 800w, {{ asset('images/6886595c2a63a1885027d203_implantaciya-zubiv-sc.webp') }} 1024w"
                                        class="services__img"><a href="/services"
                                                                 class="services__link w-inline-block">
                                        <div class="services__heading-wrap"><h3
                                                class="heading-5 mobile-size-14 text-style-2lines text-weight-normal font-style-worksans">
                                                Имплантация зубов</h3>
                                            <div class="button is-icon mod--services">
                                                <div class="button__icon w-embed">
                                                    <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="services__text-anim">
                                            <div class="services__text-wrap"><p class="text-size-regular">Восстанавливаем поражённые ткани внутри зуба: очищаем и пломбируем каналы.</p></div>
                                        </div>
                                        <div class="alt-for-link">Подробнее</div>
                                    </a></div>
                            </div>
                            <div data-w-id="1f9e4efa-878b-52f7-2dd3-72432bf3d034" style="opacity: 0;" role="listitem"
                                 class="collection__item mod--services w-dyn-item">
                                <div class="collection__item-wrap mod--services"><img desktop-hide="" loading="lazy"
                                                                                      alt=""
                                                                                      src="{{ asset('images/6884f9274d456b2ded12a551_likuvannya-kariiesu-mh.webp') }}"
                                                                                      sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px"
                                                                                      srcset="{{ asset('images/6884f9274d456b2ded12a551_likuvannya-kariiesu-mh-p-500.webp') }} 500w, {{ asset('images/6884f9274d456b2ded12a551_likuvannya-kariiesu-mh.webp') }} 780w"
                                                                                      class="services__img"><img
                                        mobile-hide="" loading="lazy" alt=""
                                        src="{{ asset('images/68bbfb443fcdc7b4987010d4_likuvannya-kariiesu-sc.webp') }}"
                                        sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px"
                                        srcset="{{ asset('images/68bbfb443fcdc7b4987010d4_likuvannya-kariiesu-sc-p-500.webp') }} 500w, {{ asset('images/68bbfb443fcdc7b4987010d4_likuvannya-kariiesu-sc-p-800.webp') }} 800w, {{ asset('images/68bbfb443fcdc7b4987010d4_likuvannya-kariiesu-sc.webp') }} 1024w"
                                        class="services__img"><a href="/services"
                                                                 class="services__link w-inline-block">
                                        <div class="services__heading-wrap"><h3
                                                class="heading-5 mobile-size-14 text-style-2lines text-weight-normal font-style-worksans">
                                                Лечение кариеса</h3>
                                            <div class="button is-icon mod--services">
                                                <div class="button__icon w-embed">
                                                    <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="services__text-anim">
                                            <div class="services__text-wrap"><p class="text-size-regular">Восстанавливаем поражённые ткани внутри зуба: очищаем и пломбируем каналы.</p></div>
                                        </div>
                                        <div class="alt-for-link">Подробнее</div>
                                    </a></div>
                            </div>
                            <div data-w-id="1f9e4efa-878b-52f7-2dd3-72432bf3d034" style="opacity: 0;" role="listitem"
                                 class="collection__item mod--services w-dyn-item">
                                <div class="collection__item-wrap mod--services"><img desktop-hide="" loading="lazy"
                                                                                      alt=""
                                                                                      src="{{ asset('images/6886628d40ff0915c95027f1_likuvannya-zubnykh-kanaliv-m.webp') }}"
                                                                                      sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px"
                                                                                      srcset="{{ asset('images/6886628d40ff0915c95027f1_likuvannya-zubnykh-kanaliv-m-p-500.webp') }} 500w, {{ asset('images/6886628d40ff0915c95027f1_likuvannya-zubnykh-kanaliv-m.webp') }} 780w"
                                                                                      class="services__img"><img
                                        mobile-hide="" loading="lazy" alt=""
                                        src="{{ asset('images/68866294d424958970b93a1f_likuvannya-zubnykh-kanaliv-sc.webp') }}"
                                        sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px"
                                        srcset="{{ asset('images/68866294d424958970b93a1f_likuvannya-zubnykh-kanaliv-sc-p-500.webp') }} 500w, {{ asset('images/68866294d424958970b93a1f_likuvannya-zubnykh-kanaliv-sc-p-800.webp') }} 800w, {{ asset('images/68866294d424958970b93a1f_likuvannya-zubnykh-kanaliv-sc.webp') }} 1024w"
                                        class="services__img"><a href="/services"
                                                                 class="services__link w-inline-block">
                                        <div class="services__heading-wrap"><h3
                                                class="heading-5 mobile-size-14 text-style-2lines text-weight-normal font-style-worksans">
                                                Лечение зубных каналов</h3>
                                            <div class="button is-icon mod--services">
                                                <div class="button__icon w-embed">
                                                    <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="services__text-anim">
                                            <div class="services__text-wrap"><p class="text-size-regular">Восстанавливаем поражённые ткани внутри зуба: очищаем и пломбируем каналы.</p></div>
                                        </div>
                                        <div class="alt-for-link">Подробнее</div>
                                    </a></div>
                            </div>
                            <div data-w-id="1f9e4efa-878b-52f7-2dd3-72432bf3d034" style="opacity: 0;" role="listitem"
                                 class="collection__item mod--services w-dyn-item">
                                <div class="collection__item-wrap mod--services"><img desktop-hide="" loading="lazy"
                                                                                      alt=""
                                                                                      src="{{ asset('images/68865bef45dc217b1076df8c_pfofesiyna-hihiena-rota-m.webp') }}"
                                                                                      sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px"
                                                                                      srcset="{{ asset('images/68865bef45dc217b1076df8c_pfofesiyna-hihiena-rota-m-p-500.webp') }} 500w, {{ asset('images/68865bef45dc217b1076df8c_pfofesiyna-hihiena-rota-m.webp') }} 780w"
                                                                                      class="services__img"><img
                                        mobile-hide="" loading="lazy" alt=""
                                        src="{{ asset('images/68865bfb72116e4c8a53cc44_pfofesiyna-hihiena-rota-sc.webp') }}"
                                        sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 540px"
                                        srcset="{{ asset('images/68865bfb72116e4c8a53cc44_pfofesiyna-hihiena-rota-sc-p-500.webp') }} 500w, {{ asset('images/68865bfb72116e4c8a53cc44_pfofesiyna-hihiena-rota-sc-p-800.webp') }} 800w, {{ asset('images/68865bfb72116e4c8a53cc44_pfofesiyna-hihiena-rota-sc.webp') }} 1024w"
                                        class="services__img"><a href="/services"
                                                                 class="services__link w-inline-block">
                                        <div class="services__heading-wrap"><h3
                                                class="heading-5 mobile-size-14 text-style-2lines text-weight-normal font-style-worksans">
                                                Профессиональная гигиена</h3>
                                            <div class="button is-icon mod--services">
                                                <div class="button__icon w-embed">
                                                    <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="services__text-anim">
                                            <div class="services__text-wrap"><p class="text-size-regular">Восстанавливаем поражённые ткани внутри зуба: очищаем и пломбируем каналы.</p></div>
                                        </div>
                                        <div class="alt-for-link">Подробнее</div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="1f9e4efa-878b-52f7-2dd3-72432bf3d044" style="opacity: 0;" class="button-wrap"><a
                            href="#" class="button is-large gray w-inline-block">
                            <div>Смотреть все услуги</div>
                            <img loading="lazy"
                                 src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                 alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                    <div style="height: 0px; display: none;" class="services__content is1">
                        <div class="collection__list-wrap mod--services-section w-dyn-list">
                            <div fs-list-element="list" role="list"
                                 class="collection__list mod--services-section w-dyn-items">
                                <div dropdown-single="" dropdown="" dropdown-anim="" role="listitem"
                                     class="collection__item mod--services-section w-dyn-item">
                                    <div data-anim="" class="dropdown services__type">
                                        <div data-anim="" drop-trigger="" class="dropdown-toggle services__type"><p
                                                class="heading-5">Ортопедическая стоматология</p>
                                            <div data-anim="" class="button-wrap mod--services"><a
                                                    data-remodal-target="contact" href="#"
                                                    class="button is-large gold w-inline-block">
                                                    <div>Записаться</div>
                                                    <img loading="lazy"
                                                         src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                         alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-scrollbar-transparent="" data-anim=""
                                             class="dropdown-list services__type" style="height: 0px;">
                                            <div fs-list-nest="unlimited" fs-list-element="nest-target"
                                                 class="service-types__text-wrap">
                                                <div fs-list-instance="unlimited" fs-list-element="wrapper"
                                                     class="collection__list-wrap mod--services__type w-dyn-list">
                                                    <div role="list"
                                                         class="collection__list mod--services__type w-dyn-items">
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Ортопедические конструкции</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Временные коронки на зубы</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Металлические (культевые) вкладки</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Композитные виниры</p><a href="/services"
                                                                             class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Протезирование All-on-4/6</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Протезирование при полной адентии</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a fs-list-element="item-link" href="/services"
                                       class="hide w-inline-block"></a></div>
                                <div dropdown-single="" dropdown="" dropdown-anim="" role="listitem"
                                     class="collection__item mod--services-section w-dyn-item">
                                    <div data-anim="" class="dropdown services__type">
                                        <div data-anim="" drop-trigger="" class="dropdown-toggle services__type"><p
                                                class="heading-5">Имплантология</p>
                                            <div data-anim="" class="button-wrap mod--services"><a
                                                    data-remodal-target="contact" href="#"
                                                    class="button is-large gold w-inline-block">
                                                    <div>Записаться</div>
                                                    <img loading="lazy"
                                                         src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                         alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-scrollbar-transparent="" data-anim=""
                                             class="dropdown-list services__type" style="height: 0px;">
                                            <div fs-list-nest="unlimited" fs-list-element="nest-target"
                                                 class="service-types__text-wrap">
                                                <div fs-list-instance="unlimited" fs-list-element="wrapper"
                                                     class="collection__list-wrap mod--services__type w-dyn-list">
                                                    <div role="list"
                                                         class="collection__list mod--services__type w-dyn-items">
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Имплантация зубов</p><a href="/services"
                                                                            class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Имплантация по протоколу All-on-6</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Одномоментная имплантация зубов</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Отсроченная имплантация зубов</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Пластика костной ткани</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a fs-list-element="item-link" href="/services"
                                       class="hide w-inline-block"></a></div>
                                <div dropdown-single="" dropdown="" dropdown-anim="" role="listitem"
                                     class="collection__item mod--services-section w-dyn-item">
                                    <div data-anim="" class="dropdown services__type">
                                        <div data-anim="" drop-trigger="" class="dropdown-toggle services__type"><p
                                                class="heading-5">Пародонтология</p>
                                            <div data-anim="" class="button-wrap mod--services"><a
                                                    data-remodal-target="contact" href="#"
                                                    class="button is-large gold w-inline-block">
                                                    <div>Записаться</div>
                                                    <img loading="lazy"
                                                         src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                         alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-scrollbar-transparent="" data-anim=""
                                             class="dropdown-list services__type" style="height: 0px;">
                                            <div fs-list-nest="unlimited" fs-list-element="nest-target"
                                                 class="service-types__text-wrap">
                                                <div fs-list-instance="unlimited" fs-list-element="wrapper"
                                                     class="collection__list-wrap mod--services__type w-dyn-list">
                                                    <div role="list"
                                                         class="collection__list mod--services__type w-dyn-items">
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Пластика дёсен</p><a href="/services"
                                                                           class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение кандидоза</p><a href="/services"
                                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение гингивита</p><a href="/services"
                                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение пародонтоза</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение рецессии дёсен</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Шинирование зубов</p><a href="/services"
                                                                            class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Плазмотерапия дёсен</p><a href="/services"
                                                                           class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Гингивотомия</p>
                                                            <a href="/services"
                                                               class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">PRF-терапия</p>
                                                            <a href="/services"
                                                               class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Вектор-терапия</p><a href="/services"
                                                                              class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение периимплантита</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение пародонтита</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Кюретаж дёсен</p>
                                                            <a href="/services"
                                                               class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a fs-list-element="item-link" href="/services"
                                       class="hide w-inline-block"></a></div>
                                <div dropdown-single="" dropdown="" dropdown-anim="" role="listitem"
                                     class="collection__item mod--services-section w-dyn-item">
                                    <div data-anim="" class="dropdown services__type">
                                        <div data-anim="" drop-trigger="" class="dropdown-toggle services__type"><p
                                                class="heading-5">Детская стоматология</p>
                                            <div data-anim="" class="button-wrap mod--services"><a
                                                    data-remodal-target="contact" href="#"
                                                    class="button is-large gold w-inline-block">
                                                    <div>Записаться</div>
                                                    <img loading="lazy"
                                                         src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                         alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-scrollbar-transparent="" data-anim=""
                                             class="dropdown-list services__type" style="height: 0px;">
                                            <div fs-list-nest="unlimited" fs-list-element="nest-target"
                                                 class="service-types__text-wrap">
                                                <div fs-list-instance="unlimited" fs-list-element="wrapper"
                                                     class="collection__list-wrap mod--services__type w-dyn-list">
                                                    <div role="list"
                                                         class="collection__list mod--services__type w-dyn-items">
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Герметизация фиссур у детей</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение пульпита у детей</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение периодонтита у детей</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение кариеса зубов у детей</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Глубокое фторирование зубов у детей</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Гигиена и профилактика зубов у детей</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение и пломбирование зубов у детей</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Профессиональная гигиена полости рта у детей</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Удаление молочных зубов</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Пломбирование молочных зубов</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Реставрация молочных зубов</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Протезирование молочных зубов</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Установка коронок на молочные зубы</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a fs-list-element="item-link" href="/services"
                                       class="hide w-inline-block"></a></div>
                                <div dropdown-single="" dropdown="" dropdown-anim="" role="listitem"
                                     class="collection__item mod--services-section w-dyn-item">
                                    <div data-anim="" class="dropdown services__type">
                                        <div data-anim="" drop-trigger="" class="dropdown-toggle services__type"><p
                                                class="heading-5">Эндодонтия</p>
                                            <div data-anim="" class="button-wrap mod--services"><a
                                                    data-remodal-target="contact" href="#"
                                                    class="button is-large gold w-inline-block">
                                                    <div>Записаться</div>
                                                    <img loading="lazy"
                                                         src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                         alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-scrollbar-transparent="" data-anim=""
                                             class="dropdown-list services__type" style="height: 0px;">
                                            <div fs-list-nest="unlimited" fs-list-element="nest-target"
                                                 class="service-types__text-wrap">
                                                <div fs-list-instance="unlimited" fs-list-element="wrapper"
                                                     class="collection__list-wrap mod--services__type w-dyn-list">
                                                    <div role="list"
                                                         class="collection__list mod--services__type w-dyn-items">
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение зубных каналов</p><a href="/services"
                                                                              class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Перелечивание каналов под микроскопом</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Пломбирование зубных каналов</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a fs-list-element="item-link" href="/services"
                                       class="hide w-inline-block"></a></div>
                                <div dropdown-single="" dropdown="" dropdown-anim="" role="listitem"
                                     class="collection__item mod--services-section w-dyn-item">
                                    <div data-anim="" class="dropdown services__type">
                                        <div data-anim="" drop-trigger="" class="dropdown-toggle services__type"><p
                                                class="heading-5">Эстетическая стоматология</p>
                                            <div data-anim="" class="button-wrap mod--services"><a
                                                    data-remodal-target="contact" href="#"
                                                    class="button is-large gold w-inline-block">
                                                    <div>Записаться</div>
                                                    <img loading="lazy"
                                                         src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                         alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-scrollbar-transparent="" data-anim=""
                                             class="dropdown-list services__type" style="height: 0px;">
                                            <div fs-list-nest="unlimited" fs-list-element="nest-target"
                                                 class="service-types__text-wrap">
                                                <div fs-list-instance="unlimited" fs-list-element="wrapper"
                                                     class="collection__list-wrap mod--services__type w-dyn-list">
                                                    <div role="list"
                                                         class="collection__list mod--services__type w-dyn-items">
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Художественная реставрация зубов</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Отбеливание зубов</p><a href="/services"
                                                                            class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Наращивание зубов</p><a href="/services"
                                                                            class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a fs-list-element="item-link" href="/services"
                                       class="hide w-inline-block"></a></div>
                                <div dropdown-single="" dropdown="" dropdown-anim="" role="listitem"
                                     class="collection__item mod--services-section w-dyn-item">
                                    <div data-anim="" class="dropdown services__type">
                                        <div data-anim="" drop-trigger="" class="dropdown-toggle services__type"><p
                                                class="heading-5">Хирургическая стоматология</p>
                                            <div data-anim="" class="button-wrap mod--services"><a
                                                    data-remodal-target="contact" href="#"
                                                    class="button is-large gold w-inline-block">
                                                    <div>Записаться</div>
                                                    <img loading="lazy"
                                                         src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                         alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-scrollbar-transparent="" data-anim=""
                                             class="dropdown-list services__type" style="height: 0px;">
                                            <div fs-list-nest="unlimited" fs-list-element="nest-target"
                                                 class="service-types__text-wrap">
                                                <div fs-list-instance="unlimited" fs-list-element="wrapper"
                                                     class="collection__list-wrap mod--services__type w-dyn-list">
                                                    <div role="list"
                                                         class="collection__list mod--services__type w-dyn-items">
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Костная аугментация</p><a href="/services"
                                                                               class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Удаление зубов</p><a href="/services"
                                                                            class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Удаление зуба мудрости</p><a href="/services"
                                                                               class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Удаление ретинированного зуба</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Удаление корня зуба</p><a href="/services"
                                                                           class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Удаление подчелюстной кисты</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Удаление молочных зубов</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">
                                                                Синус-лифтинг</p><a href="/services"
                                                                                    class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Резекция верхушки корня зуба</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Остеопластика (удлинение анатомической коронки)</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение перелома корня зуба</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">
                                                                Вестибулопластика</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a fs-list-element="item-link" href="/services"
                                       class="hide w-inline-block"></a></div>
                                <div dropdown-single="" dropdown="" dropdown-anim="" role="listitem"
                                     class="collection__item mod--services-section w-dyn-item">
                                    <div data-anim="" class="dropdown services__type">
                                        <div data-anim="" drop-trigger="" class="dropdown-toggle services__type"><p
                                                class="heading-5">Протезирование</p>
                                            <div data-anim="" class="button-wrap mod--services"><a
                                                    data-remodal-target="contact" href="#"
                                                    class="button is-large gold w-inline-block">
                                                    <div>Записаться</div>
                                                    <img loading="lazy"
                                                         src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                         alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-scrollbar-transparent="" data-anim=""
                                             class="dropdown-list services__type" style="height: 0px;">
                                            <div fs-list-nest="unlimited" fs-list-element="nest-target"
                                                 class="service-types__text-wrap">
                                                <div fs-list-instance="unlimited" fs-list-element="wrapper"
                                                     class="collection__list-wrap mod--services__type w-dyn-list">
                                                    <div role="list"
                                                         class="collection__list mod--services__type w-dyn-items">
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Протезирование All-on-4/6</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Протезирование зубов на имплантах</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Протезирование при полной адентии</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Съёмные зубные протезы</p><a href="/services"
                                                                              class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a fs-list-element="item-link" href="/services"
                                       class="hide w-inline-block"></a></div>
                                <div dropdown-single="" dropdown="" dropdown-anim="" role="listitem"
                                     class="collection__item mod--services-section w-dyn-item">
                                    <div data-anim="" class="dropdown services__type">
                                        <div data-anim="" drop-trigger="" class="dropdown-toggle services__type"><p
                                                class="heading-5">Терапевтическая стоматология</p>
                                            <div data-anim="" class="button-wrap mod--services"><a
                                                    data-remodal-target="contact" href="#"
                                                    class="button is-large gold w-inline-block">
                                                    <div>Записаться</div>
                                                    <img loading="lazy"
                                                         src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                         alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-scrollbar-transparent="" data-anim=""
                                             class="dropdown-list services__type" style="height: 0px;">
                                            <div fs-list-nest="unlimited" fs-list-element="nest-target"
                                                 class="service-types__text-wrap">
                                                <div fs-list-instance="unlimited" fs-list-element="wrapper"
                                                     class="collection__list-wrap mod--services__type w-dyn-list">
                                                    <div role="list"
                                                         class="collection__list mod--services__type w-dyn-items">
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение стоматита</p><a href="/services"
                                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение зубов во время беременности</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение пульпита у детей</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Лечение альвеолита</p><a href="/services"
                                                                                 class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a fs-list-element="item-link" href="/services"
                                       class="hide w-inline-block"></a></div>
                                <div dropdown-single="" dropdown="" dropdown-anim="" role="listitem"
                                     class="collection__item mod--services-section w-dyn-item">
                                    <div data-anim="" class="dropdown services__type">
                                        <div data-anim="" drop-trigger="" class="dropdown-toggle services__type"><p
                                                class="heading-5">Детское протезирование</p>
                                            <div data-anim="" class="button-wrap mod--services"><a
                                                    data-remodal-target="contact" href="#"
                                                    class="button is-large gold w-inline-block">
                                                    <div>Записаться</div>
                                                    <img loading="lazy"
                                                         src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                         alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-scrollbar-transparent="" data-anim=""
                                             class="dropdown-list services__type" style="height: 0px;">
                                            <div fs-list-nest="unlimited" fs-list-element="nest-target"
                                                 class="service-types__text-wrap">
                                                <div fs-list-instance="unlimited" fs-list-element="wrapper"
                                                     class="collection__list-wrap mod--services__type w-dyn-list">
                                                    <div role="list"
                                                         class="collection__list mod--services__type w-dyn-items">
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Протезирование молочных зубов</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a fs-list-element="item-link" href="/services"
                                       class="hide w-inline-block"></a></div>
                                <div dropdown-single="" dropdown="" dropdown-anim="" role="listitem"
                                     class="collection__item mod--services-section w-dyn-item">
                                    <div data-anim="" class="dropdown services__type">
                                        <div data-anim="" drop-trigger="" class="dropdown-toggle services__type"><p
                                                class="heading-5">Профилактика и гигиена</p>
                                            <div data-anim="" class="button-wrap mod--services"><a
                                                    data-remodal-target="contact" href="#"
                                                    class="button is-large gold w-inline-block">
                                                    <div>Записаться</div>
                                                    <img loading="lazy"
                                                         src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                         alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-scrollbar-transparent="" data-anim=""
                                             class="dropdown-list services__type" style="height: 0px;">
                                            <div fs-list-nest="unlimited" fs-list-element="nest-target"
                                                 class="service-types__text-wrap">
                                                <div fs-list-instance="unlimited" fs-list-element="wrapper"
                                                     class="collection__list-wrap mod--services__type w-dyn-list">
                                                    <div role="list"
                                                         class="collection__list mod--services__type w-dyn-items">
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Глубокое фторирование зубов</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a fs-list-element="item-link" href="/services"
                                       class="hide w-inline-block"></a></div>
                                <div dropdown-single="" dropdown="" dropdown-anim="" role="listitem"
                                     class="collection__item mod--services-section w-dyn-item">
                                    <div data-anim="" class="dropdown services__type">
                                        <div data-anim="" drop-trigger="" class="dropdown-toggle services__type"><p
                                                class="heading-5">Рентгенология</p>
                                            <div data-anim="" class="button-wrap mod--services"><a
                                                    data-remodal-target="contact" href="#"
                                                    class="button is-large gold w-inline-block">
                                                    <div>Записаться</div>
                                                    <img loading="lazy"
                                                         src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                         alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-scrollbar-transparent="" data-anim=""
                                             class="dropdown-list services__type" style="height: 0px;">
                                            <div fs-list-nest="unlimited" fs-list-element="nest-target"
                                                 class="service-types__text-wrap">
                                                <div fs-list-instance="unlimited" fs-list-element="wrapper"
                                                     class="collection__list-wrap mod--services__type w-dyn-list">
                                                    <div role="list"
                                                         class="collection__list mod--services__type w-dyn-items">
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Прицельный снимок зуба</p><a href="/services"
                                                                                  class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a fs-list-element="item-link" href="/services"
                                       class="hide w-inline-block"></a></div>
                                <div dropdown-single="" dropdown="" dropdown-anim="" role="listitem"
                                     class="collection__item mod--services-section w-dyn-item">
                                    <div data-anim="" class="dropdown services__type">
                                        <div data-anim="" drop-trigger="" class="dropdown-toggle services__type"><p
                                                class="heading-5">Анестезия</p>
                                            <div data-anim="" class="button-wrap mod--services"><a
                                                    data-remodal-target="contact" href="#"
                                                    class="button is-large gold w-inline-block">
                                                    <div>Записаться</div>
                                                    <img loading="lazy"
                                                         src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                         alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-scrollbar-transparent="" data-anim=""
                                             class="dropdown-list services__type" style="height: 0px;">
                                            <div fs-list-nest="unlimited" fs-list-element="nest-target"
                                                 class="service-types__text-wrap">
                                                <div fs-list-instance="unlimited" fs-list-element="wrapper"
                                                     class="collection__list-wrap mod--services__type w-dyn-list">
                                                    <div role="list"
                                                         class="collection__list mod--services__type w-dyn-items">
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Инъекционная анестезия</p><a href="/services"
                                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Мандибулярная анестезия</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a fs-list-element="item-link" href="/services"
                                       class="hide w-inline-block"></a></div>
                                <div dropdown-single="" dropdown="" dropdown-anim="" role="listitem"
                                     class="collection__item mod--services-section w-dyn-item">
                                    <div data-anim="" class="dropdown services__type">
                                        <div data-anim="" drop-trigger="" class="dropdown-toggle services__type"><p
                                                class="heading-5">Консультация врача</p>
                                            <div data-anim="" class="button-wrap mod--services"><a
                                                    data-remodal-target="contact" href="#"
                                                    class="button is-large gold w-inline-block">
                                                    <div>Записаться</div>
                                                    <img loading="lazy"
                                                         src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                         alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                            <div data-anim="" class="faq__drop-btn">
                                                <div data-anim="" class="faq__drop-btn-ellipse">
                                                    <div data-anim="" class="drop__line is1"></div>
                                                    <div data-anim="" class="drop__line is2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-scrollbar-transparent="" data-anim=""
                                             class="dropdown-list services__type" style="height: 0px;">
                                            <div fs-list-nest="unlimited" fs-list-element="nest-target"
                                                 class="service-types__text-wrap">
                                                <div fs-list-instance="unlimited" fs-list-element="wrapper"
                                                     class="collection__list-wrap mod--services__type w-dyn-list">
                                                    <div role="list"
                                                         class="collection__list mod--services__type w-dyn-items">
                                                        <div fs-list-element="nest-target" role="listitem"
                                                             class="collection__item mod--services__type w-dyn-item"><p
                                                                class="text-size-medium mobile-size-14">Консультация стоматолога</p><a
                                                                href="/services"
                                                                class="button__icon-wrap w-inline-block">
                                                                <div class="icon width-16 w-embed">
                                                                    <svg width="100%" height="100%" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1 17L17 1M17 1V17M17 1H1"
                                                                              stroke="currentColor"
                                                                              stroke-linecap="round"></path>
                                                                    </svg>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a fs-list-element="item-link" href="/services"
                                       class="hide w-inline-block"></a></div>
                            </div>
                        </div>
                        <div dropdown-single="" dropdown="" dropdown-anim="" class="margin-bottom-16">
                            <div data-anim="" class="dropdown services__type">
                                <div drop-trigger="" class="dropdown-toggle faq"><p class="heading-5">Консультация врача</p>
                                    <div data-anim="" class="faq__drop-btn">
                                        <div data-anim="" class="faq__drop-btn-ellipse">
                                            <div data-anim="" class="drop__line is1"></div>
                                            <div data-anim="" class="drop__line is2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div data-anim="" class="dropdown-list faq" style="height: 0px;">
                                    <div class="service-types__text-wrap">
                                        <div data-w-id="0525bd33-6b7f-fc80-e910-a7618fca30bc" class="button-wrap"><a
                                                data-remodal-target="contact" href="#"
                                                class="button is-large gold w-inline-block">
                                                <div>Записаться</div>
                                                <img loading="lazy"
                                                     src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                                     alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-w-id="90d618d7-fcf9-010e-561c-c16da9e26481" class="button-wrap margin-auto"><a
                                href="#" class="button is-large gray w-inline-block">
                                <div>Скрыть все услуги</div>
                                <img loading="lazy"
                                     src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                     alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section overflow-hidden">
            <div class="container">
                <div data-content="team" class="section__content-wrap">
                    <div data-w-id="931c407f-a6d0-0145-bade-8207f8c9ae53" class="heading__wrap" style="opacity: 0;"><h2
                            class="heading-4">Врачи стоматологии</h2>
                        <div class="text__wrap max-width-19"><p class="text-size-regular text-color-graphite">Команда, которая делает визит к стоматологу спокойнее.</p></div>
                    </div>
                    <div data-hover="cursor" data-swiper="specialists" data-w-id="931c407f-a6d0-0145-bade-8207f8c9ae59"
                         class="swiper mod--specialists-third w-dyn-list swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                         style="opacity: 0;">
                        <div role="list" class="swiper-wrapper mod--specialists-third w-dyn-items">
                            @include('partials.specialists-team-cards')
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <div class="swiper__pagination mod--mobile">
                        <div data-swiper-specialists="pagination" class="swiper__swiper-nav">
                            @include('partials.specialists-pagination')
                        </div>
                    </div>
                    <div data-w-id="931c407f-a6d0-0145-bade-8207f8c9ae72" class="button-wrap mod--specialists-third"
                         style="opacity: 0;"><a data-remodal-target="contact" href="#"
                                                class="button is-large gold w-inline-block">
                            <div>Записаться на приём</div>
                            <img loading="lazy"
                                 src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                 alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                </div>
            </div>
        </section>
        <section class="section overflow-hidden">
            <div class="container">
                <div class="section__content-wrap">
                    <div id="reviews-demo" data-w-id="8d7640e9-5ef1-bbe4-af09-fa71d821061a" class="heading__wrap" style="opacity: 0;"><h2
                            class="heading-4">Пациенты о {{ config('clinic.name') }}</h2>
                        <div class="text__wrap max-width-19"><p class="text-size-regular text-color-graphite">Демонстрационные тексты из макета. Это не отзывы реальных пациентов.</p></div>
                    </div>
                    <div data-hover="cursor" data-swiper="reviews" data-w-id="8d7640e9-5ef1-bbe4-af09-fa71d8210620"
                         class="swiper mod--reviews w-dyn-list swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                         style="opacity: 0;">
                        <div role="list" class="swiper-wrapper mod--reviews w-dyn-items"
                             id="swiper-wrapper-cdb45dd109cb75210b" aria-live="polite"
                             style="transform: translate3d(0px, 0px, 0px);">
                            <div role="group" class="swiper-slide mod--reviews w-dyn-item swiper-slide-active"
                                 style="width: 348.167px; margin-right: 16px;" aria-label="1 / 4">
                                <div class="reviews__ava-wrap"><img
                                        src="{{ asset('images/68751e2f5e05bf26d84b822e_ico-review-1.png') }}"
                                        loading="lazy" alt="" class="reviews__icon">
                                    <div class="reviews__text-wrap is1"><p class="text-size-medium text-weight-medium">
                                            Алексей Орлов</p>
                                        <p class="text-size-regular text-color-neutral_gray">11.02.2025</p></div>
                                </div>
                                <p class="text-size-medium mobile-size-14">Хожу в {{ config('clinic.name') }} уже 3 года и доволен. Лечил здесь кариес, удалял зуб мудрости, делал чистку и ни разу не пожалел, что обратился именно сюда. Врачи знают своё дело и работают аккуратно. Советую тем, кому важны качество и спокойное отношение.</p></div>
                            <div role="group" class="swiper-slide mod--reviews w-dyn-item swiper-slide-next"
                                 style="width: 348.167px; margin-right: 16px;" aria-label="2 / 4">
                                <div class="reviews__ava-wrap"><img
                                        src="{{ asset('images/68751e1dafa16bbc2ef5e5bf_ico-review-2.png') }}"
                                        loading="lazy" alt="" class="reviews__icon">
                                    <div class="reviews__text-wrap is1"><p class="text-size-medium text-weight-medium">
                                            Мария Лебедева</p>
                                        <p class="text-size-regular text-color-neutral_gray">02.08.2024</p></div>
                                </div>
                                <p class="text-size-medium mobile-size-14">Пришла с ребёнком на приём. Понравилось всё, начиная с того, как нас встретили. Врач была спокойная и внимательная, объясняла просто и понятно. Лечение прошло нормально, без слёз и крика. Видно, что умеют работать с детьми.</p></div>
                            <div role="group" class="swiper-slide mod--reviews w-dyn-item"
                                 style="width: 348.167px; margin-right: 16px;" aria-label="3 / 4">
                                <div class="reviews__ava-wrap"><img
                                        src="{{ asset('images/68751e0bf9380177ca218441_ico-review-3.png') }}"
                                        loading="lazy" alt="" class="reviews__icon">
                                    <div class="reviews__text-wrap is1"><p class="text-size-medium text-weight-medium">
                                            Светлана Крылова</p>
                                        <p class="text-size-regular text-color-neutral_gray">04.06.2024</p></div>
                                </div>
                                <p class="text-size-medium mobile-size-14">Очень довольна визитом в {{ config('clinic.name') }}. Пришла с сильной зубной болью, оказался пульпит. Лечение прошло профессионально, аккуратно и без боли. Врачи внимательные, в клинике спокойная атмосфера. Рекомендую.</p>
                            </div>
                            <div role="group" class="swiper-slide mod--reviews w-dyn-item" aria-label="4 / 4"
                                 style="width: 348.167px; margin-right: 16px;">
                                <div class="reviews__ava-wrap"><img
                                        src="{{ asset('images/68751de8d993b092fe3713a8_ico-review-4.png') }}"
                                        loading="lazy" alt="" class="reviews__icon">
                                    <div class="reviews__text-wrap is1"><p class="text-size-medium text-weight-medium">
                                            Павел Новиков</p>
                                        <p class="text-size-regular text-color-neutral_gray">14.05.2024</p></div>
                                </div>
                                <p class="text-size-medium mobile-size-14">Начал лечение на элайнерах, потому что хотел исправить прикус без брекетов. В {{ config('clinic.name') }} всё организовано хорошо, врачи объясняют каждый шаг и следят за результатом. Элайнеры носить удобно, изменения уже видны. </p>
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
                    <div mobile-hide="" data-w-id="8d7640e9-5ef1-bbe4-af09-fa71d8210636" class="button-wrap"
                         style="opacity: 0;"><a
                            href="#reviews-demo" class="button is-large gray w-inline-block">
                            <div>Демонстрационные отзывы</div>
                        </a></div>
                </div>
            </div>
        </section>
        <section class="section overflow-hidden">
            <div class="container">
                <div class="section__content-wrap">
                    <div data-w-id="9c779dad-3ba9-ade9-f03f-643a1e179ef2" class="heading__wrap" style="opacity: 0;"><h2
                            class="heading-4">Наши сертификаты</h2>
                        <div class="text__wrap max-width-28"><p class="text-size-regular text-color-graphite">«Чтобы становиться лучше, нужно постоянно учиться и совершенствоваться...»</p></div>
                    </div>
                    <div data-hover="cursor" data-swiper="certificate" data-w-id="9c779dad-3ba9-ade9-f03f-643a1e179ef8"
                         class="swiper mod--certificate w-dyn-list swiper-initialized swiper-horizontal swiper-pointer-events"
                         style="opacity: 0;">
                        <div role="list" class="swiper-wrapper mod--certificate w-dyn-items"
                             id="swiper-wrapper-1d6a2c6015c2cbe7" aria-live="polite"
                             style="transform: translate3d(0px, 0px, 0px);">
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item swiper-slide-active"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="1 / 19"><a href="#"
                                                                                                    class="w-inline-block w-lightbox"
                                                                                                    aria-label="Открыть фото"
                                                                                                    aria-haspopup="dialog"><img
                                        src="{{ asset('images/68768f2f9439f10b5755c003_petrenko-kirill-setificat05.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/68768f2f9439f10b5755c003_petrenko-kirill-setificat05-p-500.webp') }} 500w, {{ asset('images/68768f2f9439f10b5755c003_petrenko-kirill-setificat05.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/68768f2f9439f10b5755c003_petrenko-kirill-setificat05.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/68768f2f9439f10b5755c003_petrenko-kirill-setificat05-p-500.webp') }} 500w, {{ asset('images/68768f2f9439f10b5755c003_petrenko-kirill-setificat05.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item swiper-slide-next"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="2 / 19"><a href="#"
                                                                                                    class="w-inline-block w-lightbox"
                                                                                                    aria-label="Открыть фото"
                                                                                                    aria-haspopup="dialog"><img
                                        src="{{ asset('images/68768e26eddb178a2fae8dd9_mildner-maryana-sertificat06.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/68768e26eddb178a2fae8dd9_mildner-maryana-sertificat06-p-500.webp') }} 500w, {{ asset('images/68768e26eddb178a2fae8dd9_mildner-maryana-sertificat06.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/68768e26eddb178a2fae8dd9_mildner-maryana-sertificat06.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/68768e26eddb178a2fae8dd9_mildner-maryana-sertificat06-p-500.webp') }} 500w, {{ asset('images/68768e26eddb178a2fae8dd9_mildner-maryana-sertificat06.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="3 / 19"><a href="#"
                                                                                                    class="w-inline-block w-lightbox"
                                                                                                    aria-label="Открыть фото"
                                                                                                    aria-haspopup="dialog"><img
                                        src="{{ asset('images/68768df99456cfa518658e95_mildner-maryana-sertificat04.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/68768df99456cfa518658e95_mildner-maryana-sertificat04-p-500.webp') }} 500w, {{ asset('images/68768df99456cfa518658e95_mildner-maryana-sertificat04.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/68768df99456cfa518658e95_mildner-maryana-sertificat04.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/68768df99456cfa518658e95_mildner-maryana-sertificat04-p-500.webp') }} 500w, {{ asset('images/68768df99456cfa518658e95_mildner-maryana-sertificat04.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="4 / 19"><a href="#"
                                                                                                    class="w-inline-block w-lightbox"
                                                                                                    aria-label="Открыть фото"
                                                                                                    aria-haspopup="dialog"><img
                                        src="{{ asset('images/68768dddfe4447df59f03854_mildner-maryana-sertificat03.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/68768dddfe4447df59f03854_mildner-maryana-sertificat03-p-500.webp') }} 500w, {{ asset('images/68768dddfe4447df59f03854_mildner-maryana-sertificat03.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/68768dddfe4447df59f03854_mildner-maryana-sertificat03.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/68768dddfe4447df59f03854_mildner-maryana-sertificat03-p-500.webp') }} 500w, {{ asset('images/68768dddfe4447df59f03854_mildner-maryana-sertificat03.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="5 / 19"><a href="#"
                                                                                                    class="w-inline-block w-lightbox"
                                                                                                    aria-label="Открыть фото"
                                                                                                    aria-haspopup="dialog"><img
                                        src="{{ asset('images/68768db91672b60cee271f30_mildner-maryana-sertificat05.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/68768db91672b60cee271f30_mildner-maryana-sertificat05-p-500.webp') }} 500w, {{ asset('images/68768db91672b60cee271f30_mildner-maryana-sertificat05.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/68768db91672b60cee271f30_mildner-maryana-sertificat05.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/68768db91672b60cee271f30_mildner-maryana-sertificat05-p-500.webp') }} 500w, {{ asset('images/68768db91672b60cee271f30_mildner-maryana-sertificat05.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="6 / 19"><a href="#"
                                                                                                    class="w-inline-block w-lightbox"
                                                                                                    aria-label="Открыть фото"
                                                                                                    aria-haspopup="dialog"><img
                                        src="{{ asset('images/68768d8d02f2a5f31f691e25_mildner-maryana-sertificat02.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/68768d8d02f2a5f31f691e25_mildner-maryana-sertificat02-p-500.webp') }} 500w, {{ asset('images/68768d8d02f2a5f31f691e25_mildner-maryana-sertificat02.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/68768d8d02f2a5f31f691e25_mildner-maryana-sertificat02.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/68768d8d02f2a5f31f691e25_mildner-maryana-sertificat02-p-500.webp') }} 500w, {{ asset('images/68768d8d02f2a5f31f691e25_mildner-maryana-sertificat02.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="7 / 19"><a href="#"
                                                                                                    class="w-inline-block w-lightbox"
                                                                                                    aria-label="Открыть фото"
                                                                                                    aria-haspopup="dialog"><img
                                        src="{{ asset('images/68768d5a51e224fda26c7d7b_mildner-maryana-sertificat01.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/68768d5a51e224fda26c7d7b_mildner-maryana-sertificat01-p-500.webp') }} 500w, {{ asset('images/68768d5a51e224fda26c7d7b_mildner-maryana-sertificat01.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/68768d5a51e224fda26c7d7b_mildner-maryana-sertificat01.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/68768d5a51e224fda26c7d7b_mildner-maryana-sertificat01-p-500.webp') }} 500w, {{ asset('images/68768d5a51e224fda26c7d7b_mildner-maryana-sertificat01.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="8 / 19"><a href="#"
                                                                                                    class="w-inline-block w-lightbox"
                                                                                                    aria-label="Открыть фото"
                                                                                                    aria-haspopup="dialog"><img
                                        src="{{ asset('images/68768d1fd29c5cf2725b459b_buhrim-anna-sertificat02.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/68768d1fd29c5cf2725b459b_buhrim-anna-sertificat02-p-500.webp') }} 500w, {{ asset('images/68768d1fd29c5cf2725b459b_buhrim-anna-sertificat02.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/68768d1fd29c5cf2725b459b_buhrim-anna-sertificat02.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/68768d1fd29c5cf2725b459b_buhrim-anna-sertificat02-p-500.webp') }} 500w, {{ asset('images/68768d1fd29c5cf2725b459b_buhrim-anna-sertificat02.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="9 / 19"><a href="#"
                                                                                                    class="w-inline-block w-lightbox"
                                                                                                    aria-label="Открыть фото"
                                                                                                    aria-haspopup="dialog"><img
                                        src="{{ asset('images/68768cfbe31927b50f72177d_buhrim-anna-sertificat01.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/68768cfbe31927b50f72177d_buhrim-anna-sertificat01-p-500.webp') }} 500w, {{ asset('images/68768cfbe31927b50f72177d_buhrim-anna-sertificat01.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/68768cfbe31927b50f72177d_buhrim-anna-sertificat01.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/68768cfbe31927b50f72177d_buhrim-anna-sertificat01-p-500.webp') }} 500w, {{ asset('images/68768cfbe31927b50f72177d_buhrim-anna-sertificat01.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="10 / 19"><a href="#"
                                                                                                     class="w-inline-block w-lightbox"
                                                                                                     aria-label="Открыть фото"
                                                                                                     aria-haspopup="dialog"><img
                                        src="{{ asset('images/687677fc5b1319b3c327bb68_petrenko-kirill-setificat04.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/687677fc5b1319b3c327bb68_petrenko-kirill-setificat04-p-500.webp') }} 500w, {{ asset('images/687677fc5b1319b3c327bb68_petrenko-kirill-setificat04.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/687677fc5b1319b3c327bb68_petrenko-kirill-setificat04.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/687677fc5b1319b3c327bb68_petrenko-kirill-setificat04-p-500.webp') }} 500w, {{ asset('images/687677fc5b1319b3c327bb68_petrenko-kirill-setificat04.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="11 / 19"><a href="#"
                                                                                                     class="w-inline-block w-lightbox"
                                                                                                     aria-label="Открыть фото"
                                                                                                     aria-haspopup="dialog"><img
                                        src="{{ asset('images/687677cc16ee12d2a5d23f71_petrenko-kirill-setificat03.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/687677cc16ee12d2a5d23f71_petrenko-kirill-setificat03-p-500.webp') }} 500w, {{ asset('images/687677cc16ee12d2a5d23f71_petrenko-kirill-setificat03.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/687677cc16ee12d2a5d23f71_petrenko-kirill-setificat03.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/687677cc16ee12d2a5d23f71_petrenko-kirill-setificat03-p-500.webp') }} 500w, {{ asset('images/687677cc16ee12d2a5d23f71_petrenko-kirill-setificat03.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="12 / 19"><a href="#"
                                                                                                     class="w-inline-block w-lightbox"
                                                                                                     aria-label="Открыть фото"
                                                                                                     aria-haspopup="dialog"><img
                                        src="{{ asset('images/687677a6ed001495ecb7bfb4_petrenko-kirill-setificat02.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/687677a6ed001495ecb7bfb4_petrenko-kirill-setificat02-p-500.webp') }} 500w, {{ asset('images/687677a6ed001495ecb7bfb4_petrenko-kirill-setificat02.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/687677a6ed001495ecb7bfb4_petrenko-kirill-setificat02.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/687677a6ed001495ecb7bfb4_petrenko-kirill-setificat02-p-500.webp') }} 500w, {{ asset('images/687677a6ed001495ecb7bfb4_petrenko-kirill-setificat02.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="13 / 19"><a href="#"
                                                                                                     class="w-inline-block w-lightbox"
                                                                                                     aria-label="Открыть фото"
                                                                                                     aria-haspopup="dialog"><img
                                        src="{{ asset('images/6876776e13eafba8da5fbc2d_petrenko-kirill-setificat01.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/6876776e13eafba8da5fbc2d_petrenko-kirill-setificat01-p-500.webp') }} 500w, {{ asset('images/6876776e13eafba8da5fbc2d_petrenko-kirill-setificat01.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/6876776e13eafba8da5fbc2d_petrenko-kirill-setificat01.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/6876776e13eafba8da5fbc2d_petrenko-kirill-setificat01-p-500.webp') }} 500w, {{ asset('images/6876776e13eafba8da5fbc2d_petrenko-kirill-setificat01.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="14 / 19"><a href="#"
                                                                                                     class="w-inline-block w-lightbox"
                                                                                                     aria-label="Открыть фото"
                                                                                                     aria-haspopup="dialog"><img
                                        src="{{ asset('images/687677371404a67aef55eaf6_petrenko-olga-setificat06.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/687677371404a67aef55eaf6_petrenko-olga-setificat06-p-500.webp') }} 500w, {{ asset('images/687677371404a67aef55eaf6_petrenko-olga-setificat06.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/687677371404a67aef55eaf6_petrenko-olga-setificat06.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/687677371404a67aef55eaf6_petrenko-olga-setificat06-p-500.webp') }} 500w, {{ asset('images/687677371404a67aef55eaf6_petrenko-olga-setificat06.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="15 / 19"><a href="#"
                                                                                                     class="w-inline-block w-lightbox"
                                                                                                     aria-label="Открыть фото"
                                                                                                     aria-haspopup="dialog"><img
                                        src="{{ asset('images/68767724f35a2067b86c07bb_petrenko-olga-setificat05.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/68767724f35a2067b86c07bb_petrenko-olga-setificat05-p-500.webp') }} 500w, {{ asset('images/68767724f35a2067b86c07bb_petrenko-olga-setificat05.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/68767724f35a2067b86c07bb_petrenko-olga-setificat05.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/68767724f35a2067b86c07bb_petrenko-olga-setificat05-p-500.webp') }} 500w, {{ asset('images/68767724f35a2067b86c07bb_petrenko-olga-setificat05.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="16 / 19"><a href="#"
                                                                                                     class="w-inline-block w-lightbox"
                                                                                                     aria-label="Открыть фото"
                                                                                                     aria-haspopup="dialog"><img
                                        src="{{ asset('images/68767718d1e500cce5f3f0aa_petrenko-olga-setificat04.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/68767718d1e500cce5f3f0aa_petrenko-olga-setificat04-p-500.webp') }} 500w, {{ asset('images/68767718d1e500cce5f3f0aa_petrenko-olga-setificat04.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/68767718d1e500cce5f3f0aa_petrenko-olga-setificat04.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/68767718d1e500cce5f3f0aa_petrenko-olga-setificat04-p-500.webp') }} 500w, {{ asset('images/68767718d1e500cce5f3f0aa_petrenko-olga-setificat04.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="17 / 19"><a href="#"
                                                                                                     class="w-inline-block w-lightbox"
                                                                                                     aria-label="Открыть фото"
                                                                                                     aria-haspopup="dialog"><img
                                        src="{{ asset('images/6876770da63fe0578df34f37_petrenko-olga-setificat03.webp') }}"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/6876770da63fe0578df34f37_petrenko-olga-setificat03-p-500.webp') }} 500w, {{ asset('images/6876770da63fe0578df34f37_petrenko-olga-setificat03.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/6876770da63fe0578df34f37_petrenko-olga-setificat03.webp') }}"
                                    loading="lazy" alt="" sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/6876770da63fe0578df34f37_petrenko-olga-setificat03-p-500.webp') }} 500w, {{ asset('images/6876770da63fe0578df34f37_petrenko-olga-setificat03.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item"
                                 style="width: 202.5px; margin-right: 16px;" aria-label="18 / 19"><a href="#"
                                                                                                     class="w-inline-block w-lightbox"
                                                                                                     aria-label="Открыть фото"
                                                                                                     aria-haspopup="dialog"><img
                                        src="{{ asset('images/687676a893b837b7d5f9c703_petrenko-olga-setificat02.webp') }}"
                                        loading="lazy" alt="Демонстрационный сертификат"
                                        sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/687676a893b837b7d5f9c703_petrenko-olga-setificat02-p-500.webp') }} 500w, {{ asset('images/687676a893b837b7d5f9c703_petrenko-olga-setificat02.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/687676a893b837b7d5f9c703_petrenko-olga-setificat02.webp') }}"
                                    loading="lazy" alt="Демонстрационный сертификат"
                                    sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/687676a893b837b7d5f9c703_petrenko-olga-setificat02-p-500.webp') }} 500w, {{ asset('images/687676a893b837b7d5f9c703_petrenko-olga-setificat02.webp') }} 578w"
                                    class="certificate__img hide"></div>
                            <div role="group" class="swiper-slide mod--certificate w-dyn-item" aria-label="19 / 19"
                                 style="width: 202.5px; margin-right: 16px;"><a href="#"
                                                                                class="w-inline-block w-lightbox"
                                                                                aria-label="Открыть фото"
                                                                                aria-haspopup="dialog"><img
                                        src="{{ asset('images/687676436821f00fc5c068f7_petrenko-olga-setificat01.webp') }}"
                                        loading="lazy"
                                        alt="Демонстрационный сертификат"
                                        sizes="(max-width: 767px) 70vw, 300px"
                                        srcset="{{ asset('images/687676436821f00fc5c068f7_petrenko-olga-setificat01-p-500.webp') }} 500w, {{ asset('images/687676436821f00fc5c068f7_petrenko-olga-setificat01.webp') }} 578w"
                                        class="certificate__img">
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
                                </a><img
                                    src="{{ asset('images/687676436821f00fc5c068f7_petrenko-olga-setificat01.webp') }}"
                                    loading="lazy" alt="Демонстрационный сертификат"
                                    sizes="(max-width: 767px) 70vw, 300px"
                                    srcset="{{ asset('images/687676436821f00fc5c068f7_petrenko-olga-setificat01-p-500.webp') }} 500w, {{ asset('images/687676436821f00fc5c068f7_petrenko-olga-setificat01.webp') }} 578w"
                                    class="certificate__img hide"></div>
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
        <section class="section">
            <div class="container">
                <div data-w-id="45100916-48bc-7640-6c7c-b98fa9470b5f" class="cta__content-wrap" style="opacity: 0;">
                    <div class="cta__heading-wrap">
                        <div class="cta__text-wrap"><p class="text-size-regular">Запишитесь на приём и сделайте первый шаг к здоровой улыбке.</p></div>
                        <h2 class="heading-4">Забота о зубах помогает чувствовать себя лучше</h2></div>
                    <div class="cta__form">
                        <div class="cta__form-line"></div>
                        <div class="form__block cta w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form cta"
                                  data-wf-page-id="67f654a11d2d5d55ce79cb63"
                                  data-wf-element-id="45100916-48bc-7640-6c7c-b98fa9470b69" aria-label="Форма записи" onsubmit="window.location.href='tel:{{ config('clinic.phone_tel') }}';return false;"><p
                                    class="text-size-medium mobile-size-14 text-align-center">Демонстрационная форма. Заявка никуда не отправляется.<br>Кнопка только открывает набор демонстрационного номера.</p>
                                <div class="text__field-wrap cta"><input class="text__field w-input" maxlength="256"
                                                                         name="Name" data-name="Name"
                                                                         placeholder="Ваше имя" type="text" id="Name"
                                                                         required=""><input class="text__field w-input"
                                                                                            data-input-phone=""
                                                                                            maxlength="256" name="Phone"
                                                                                            data-name="Phone"
                                                                                            placeholder="Ваш телефон"
                                                                                            type="tel" id="Phone"
                                                                                            required=""></div>
                                <div class="button is-large gold"><input type="submit" data-wait=""
                                                                         class="submit__button w-button" value="">
                                    <div>Отправить</div>
                                </div>
                            </form>
                            <div class="success__message w-form-done" tabindex="-1" role="region"
                                 aria-label="Форма отправлена">
                                <div class="text-size-medium">Это демонстрация. Заявка не отправлена и никому не передаётся.
                                </div>
                            </div>
                            <div class="w-form-fail" tabindex="-1" role="region" aria-label="Ошибка отправки формы">
                                <div>Не удалось отправить форму. Позвоните: {{ config('clinic.phone_display') }}.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script defer src="{{ asset('js/services.js') }}"></script>
    <script async type="module" src="https://cdn.jsdelivr.net/npm/@finsweet/attributes@2/attributes.js" fs-list=""></script>
@endpush
