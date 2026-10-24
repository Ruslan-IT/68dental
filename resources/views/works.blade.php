@extends('layouts.app')

@section('wf-page', '681a6df7c65fac2aebf1a0e7')

@push('page-css')
    <link rel="stylesheet" href="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/css/dentalux-project.webflow.681a6df7c65fac2aebf1a0e7-4d77299f3.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/works.css') }}?v=2">
@endpush

@section('content')
<main class="main">
        <section class="section mod--about">
            <div class="container">
                <div class="services__hero-content">
                    <div data-w-id="25b0e86b-6d14-001a-7623-f11497aa7bae" style="opacity: 0;"
                         class="services__hero-col mod--team">
                        <div class="services__icon-wrap is4"><p class="heading-6 mobile-size-20">Эти врачи помогут<br>вам решить любую<br>проблему</p><a href="/team"
                                                                                     class="button is-icon w-inline-block">
                                <div class="button__icon width-16 w-embed">
                                    <svg width="100%" height="100%" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 0.999999L13 13M13 13L0.999999 13M13 13L13 1" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div class="alt-for-link">Подробнее</div>
                            </a></div>
                        <div class="team__hero-text-wrap is1"><img
                                src="{{ asset('images/67fcb4f35e6731101ddb84f4_team__img-group.avif') }}"
                                loading="lazy" alt="Фото команды" class="team__hero-img">
                            <p class="text-size-regular">Опытные специалисты<br>с большим стажем</p></div>
                    </div>
                    <div data-w-id="19936039-c2c9-d67b-d340-e939ee3f8431" style="opacity: 0;"
                         class="price__hero-text-wrap"><h1 class="heading-2">Наши работы</h1>
                        <p class="text-size-medium mobile-size-14">Результат нашей работы — спокойные пациенты и здоровые улыбки.<br>Посмотрите примеры лечения в галерее «до» и «после».</p></div>
                    <a data-w-id="0d5651a3-88c6-a4f4-619d-6eb9fab6e975" style="opacity: 0;" href="tel:{{ config('clinic.phone_tel') }}"
                       class="contact__phone-btn w-inline-block">
                        <div class="alt-for-link">Подробнее</div>
                    </a></div>
            </div>
            <img class="services__img-bg"
                 src="{{ asset('images/681a6e45a583d82809ebb89d_works__img-bg.avif') }}"
                 alt="Иллюстрация" mobile-hide="" style="opacity: 0;" sizes="(max-width: 2880px) 100vw, 2880px"
                 data-w-id="d2fd1c8d-6d93-8572-9b65-23d7ea0ff3b5" loading="lazy"
                 srcset="{{ asset('images/681a6e45a583d82809ebb89d_works__img-bg-p-500.avif') }} 500w, {{ asset('images/681a6e45a583d82809ebb89d_works__img-bg-p-800.avif') }} 800w, {{ asset('images/681a6e45a583d82809ebb89d_works__img-bg-p-1080.avif') }} 1080w, {{ asset('images/681a6e45a583d82809ebb89d_works__img-bg.avif') }} 2880w"><img
                src="{{ asset('images/681a6e4416e926c7d0b352e6_works__img-bg-mob.avif') }}"
                loading="lazy" style="opacity: 0;" data-w-id="ab244ad4-1744-485f-58eb-dd3f2961fa35"
                alt="Иллюстрация" desktop-hide="" class="services__img-bg">
            <div class="bread-crumbs"><a href="/" class="bread-crumbs__text">Главная</a>
                <div class="bread-crumbs__text">/</div>
                <div class="bread-crumbs__text active">Работы</div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="form-block w-form">
                    <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get"
                          fs-list-element="filters" data-wf-page-id="681a6df7c65fac2aebf1a0e7"
                          data-wf-element-id="1e2799b8-5bd7-940f-6ea9-e9455e8c605f" aria-label="Форма записи"
                          data-gtm-form-interact-id="0" onsubmit="window.location.href='tel:{{ config('clinic.phone_tel') }}';return false;">
                        <div data-w-id="e8e61b26-72cd-e15f-91da-fb6a3b86d520"
                             style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                             class="works__content is1"><p fs-list-element="clear" class="works__text-category">Все</p>
                            <div class="collection__item-wrap w-dyn-list">
                                <div role="list" class="collection__list mod--works-category w-dyn-items">
                                    <div role="listitem" class="collection__item mod--works-category w-dyn-item"><label
                                            class="works__category-link w-radio"><input fs-list-value="Ортопедия"
                                                                                        class="w-form-formradioinput hide w-radio-input"
                                                                                        fs-list-field="category"
                                                                                        name="Category"
                                                                                        data-name="Category"
                                                                                        type="radio" id="Category"
                                                                                        value="Category"><span
                                                class="radio-button-label w-form-label" for="Category">Ортопедия</span></label>
                                    </div>
                                    <div role="listitem" class="collection__item mod--works-category w-dyn-item"><label
                                            class="works__category-link w-radio"><input fs-list-value="Профилактика"
                                                                                        class="w-form-formradioinput hide w-radio-input"
                                                                                        fs-list-field="category"
                                                                                        name="Category"
                                                                                        data-name="Category"
                                                                                        type="radio" id="Category"
                                                                                        value="Category"
                                                                                        data-gtm-form-interact-field-id="0"><span
                                                class="radio-button-label w-form-label"
                                                for="Category">Профилактика</span></label></div>
                                    <div role="listitem" class="collection__item mod--works-category w-dyn-item"><label
                                            class="works__category-link w-radio is-list-active"><input
                                                fs-list-value="Профилактика и гигиена"
                                                class="w-form-formradioinput hide w-radio-input"
                                                fs-list-field="category" name="Category" data-name="Category"
                                                type="radio" id="Category" value="Category"
                                                data-gtm-form-interact-field-id="1"><span
                                                class="radio-button-label w-form-label" for="Category">Профилактика и гигиена</span></label>
                                    </div>
                                    <div role="listitem" class="collection__item mod--works-category w-dyn-item"><label
                                            class="works__category-link w-radio"><input fs-list-value="Имплантация"
                                                                                        class="w-form-formradioinput hide w-radio-input"
                                                                                        fs-list-field="category"
                                                                                        name="Category"
                                                                                        data-name="Category"
                                                                                        type="radio" id="Category"
                                                                                        value="Category"><span
                                                class="radio-button-label w-form-label"
                                                for="Category">Имплантация</span></label></div>
                                    <div role="listitem" class="collection__item mod--works-category w-dyn-item"><label
                                            class="works__category-link w-radio"><input fs-list-value="Терапия"
                                                                                        class="w-form-formradioinput hide w-radio-input"
                                                                                        fs-list-field="category"
                                                                                        name="Category"
                                                                                        data-name="Category"
                                                                                        type="radio" id="Category"
                                                                                        value="Category"><span
                                                class="radio-button-label w-form-label"
                                                for="Category">Терапия</span></label></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="hide w-form-done" tabindex="-1" role="region" aria-label="Форма отправлена"></div>
                    <div class="hide w-form-fail" tabindex="-1" role="region" aria-label="Ошибка отправки формы"></div>
                </div>
                <div class="works__content-wrap is1">
                    <div data-w-id="d9bf877c-061e-7283-e6bf-80138afcb28e"
                         style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                         class="collection__item-wrap mod--works w-dyn-list">
                        <div fs-list-element="list" role="list" class="collection__list mod--works w-dyn-items">
                            <div role="listitem" class="collection__item mod--works w-dyn-item"><img
                                    src="{{ asset('images/68926fde6683f92db4c5800b_keramichna-koronka-w01-pisla.webp') }}"
                                    loading="lazy" alt="Керамическая коронка, после" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/68926fde6683f92db4c5800b_keramichna-koronka-w01-pisla-p-500.webp') }} 500w, {{ asset('images/68926fde6683f92db4c5800b_keramichna-koronka-w01-pisla-p-800.webp') }} 800w, {{ asset('images/68926fde6683f92db4c5800b_keramichna-koronka-w01-pisla-p-1080.webp') }} 1080w, {{ asset('images/68926fde6683f92db4c5800b_keramichna-koronka-w01-pisla.webp') }} 1182w"
                                    class="works__img-after"><img
                                    src="{{ asset('images/68926fda3a26b07f8e59e62f_keramichna-koronka-w01-do.webp') }}"
                                    loading="lazy" alt="Керамическая коронка, до" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/68926fda3a26b07f8e59e62f_keramichna-koronka-w01-do-p-500.webp') }} 500w, {{ asset('images/68926fda3a26b07f8e59e62f_keramichna-koronka-w01-do-p-800.webp') }} 800w, {{ asset('images/68926fda3a26b07f8e59e62f_keramichna-koronka-w01-do-p-1080.webp') }} 1080w, {{ asset('images/68926fda3a26b07f8e59e62f_keramichna-koronka-w01-do.webp') }} 1182w"
                                    class="works__img-before">
                                <div class="works__work-progressbar"><img
                                        src="{{ asset('images/67feb272c23f3beb30d8417f_team__icon-arrows.svg') }}"
                                        loading="lazy" alt="" class="team__work-progress-icon"></div>
                                <div class="works__work-title">Керамическая коронка</div>
                                <div fs-list-field="category" class="hide">Ортопедия</div>
                            </div>
                            <div role="listitem" class="collection__item mod--works w-dyn-item"><img
                                    src="{{ asset('images/68926f1954ce4193220bd384_prof-chystka-zubiv-w01-pisla.webp') }}"
                                    loading="lazy" alt="Профилактическая чистка зубов, после" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/68926f1954ce4193220bd384_prof-chystka-zubiv-w01-pisla-p-500.webp') }} 500w, {{ asset('images/68926f1954ce4193220bd384_prof-chystka-zubiv-w01-pisla-p-800.webp') }} 800w, {{ asset('images/68926f1954ce4193220bd384_prof-chystka-zubiv-w01-pisla-p-1080.webp') }} 1080w, {{ asset('images/68926f1954ce4193220bd384_prof-chystka-zubiv-w01-pisla.webp') }} 1182w"
                                    class="works__img-after"><img
                                    src="{{ asset('images/68926f14973fd057c81c086b_prof-chystka-zubiv-w01-do.webp') }}"
                                    loading="lazy" alt="Профилактическая чистка зубов, до" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/68926f14973fd057c81c086b_prof-chystka-zubiv-w01-do-p-500.webp') }} 500w, {{ asset('images/68926f14973fd057c81c086b_prof-chystka-zubiv-w01-do-p-800.webp') }} 800w, {{ asset('images/68926f14973fd057c81c086b_prof-chystka-zubiv-w01-do-p-1080.webp') }} 1080w, {{ asset('images/68926f14973fd057c81c086b_prof-chystka-zubiv-w01-do.webp') }} 1182w"
                                    class="works__img-before">
                                <div class="works__work-progressbar"><img
                                        src="{{ asset('images/67feb272c23f3beb30d8417f_team__icon-arrows.svg') }}"
                                        loading="lazy" alt="" class="team__work-progress-icon"></div>
                                <div class="works__work-title">Профилактическая чистка зубов</div>
                                <div fs-list-field="category" class="hide">Профилактика</div>
                            </div>
                            <div role="listitem" class="collection__item mod--works w-dyn-item"><img
                                    src="{{ asset('images/68926d8be39573e28c1101ee_all-on-4-w01-pisla.webp') }}"
                                    loading="lazy" alt="Имплантация All-on-4, после" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/68926d8be39573e28c1101ee_all-on-4-w01-pisla-p-500.webp') }} 500w, {{ asset('images/68926d8be39573e28c1101ee_all-on-4-w01-pisla-p-800.webp') }} 800w, {{ asset('images/68926d8be39573e28c1101ee_all-on-4-w01-pisla-p-1080.webp') }} 1080w, {{ asset('images/68926d8be39573e28c1101ee_all-on-4-w01-pisla.webp') }} 1182w"
                                    class="works__img-after"><img
                                    src="{{ asset('images/68926d87ca269a77b892968b_all-on-4-w01-do.webp') }}"
                                    loading="lazy" alt="Имплантация All-on-4, до" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/68926d87ca269a77b892968b_all-on-4-w01-do-p-500.webp') }} 500w, {{ asset('images/68926d87ca269a77b892968b_all-on-4-w01-do-p-800.webp') }} 800w, {{ asset('images/68926d87ca269a77b892968b_all-on-4-w01-do-p-1080.webp') }} 1080w, {{ asset('images/68926d87ca269a77b892968b_all-on-4-w01-do.webp') }} 1182w"
                                    class="works__img-before">
                                <div class="works__work-progressbar"><img
                                        src="{{ asset('images/67feb272c23f3beb30d8417f_team__icon-arrows.svg') }}"
                                        loading="lazy" alt="" class="team__work-progress-icon"></div>
                                <div class="works__work-title">Имплантация All-on-4</div>
                                <div fs-list-field="category" class="hide">Имплантация</div>
                            </div>
                            <div role="listitem" class="collection__item mod--works w-dyn-item"><img
                                    src="{{ asset('images/688369809260c87505a396f1_implantatciya-pislya-w02.webp') }}"
                                    loading="lazy" alt="Имплантация 3 зубов, после" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/688369809260c87505a396f1_implantatciya-pislya-w02-p-500.webp') }} 500w, {{ asset('images/688369809260c87505a396f1_implantatciya-pislya-w02-p-800.webp') }} 800w, {{ asset('images/688369809260c87505a396f1_implantatciya-pislya-w02-p-1080.webp') }} 1080w, {{ asset('images/688369809260c87505a396f1_implantatciya-pislya-w02.webp') }} 1182w"
                                    class="works__img-after"><img
                                    src="{{ asset('images/68836984e5f372cbbf6dc4ed_implantatciya-do-w02.webp') }}"
                                    loading="lazy" alt="Имплантация 3 зубов, до" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/68836984e5f372cbbf6dc4ed_implantatciya-do-w02-p-500.webp') }} 500w, {{ asset('images/68836984e5f372cbbf6dc4ed_implantatciya-do-w02-p-800.webp') }} 800w, {{ asset('images/68836984e5f372cbbf6dc4ed_implantatciya-do-w02-p-1080.webp') }} 1080w, {{ asset('images/68836984e5f372cbbf6dc4ed_implantatciya-do-w02.webp') }} 1182w"
                                    class="works__img-before">
                                <div class="works__work-progressbar"><img
                                        src="{{ asset('images/67feb272c23f3beb30d8417f_team__icon-arrows.svg') }}"
                                        loading="lazy" alt="" class="team__work-progress-icon"></div>
                                <div class="works__work-title">Имплантация 3 зубов</div>
                                <div fs-list-field="category" class="hide">Имплантация</div>
                            </div>
                            <div role="listitem" class="collection__item mod--works w-dyn-item"><img
                                    src="{{ asset('images/688367abed9eb2ef9f10e2f1_karies-pislya-w05.webp') }}"
                                    loading="lazy" alt="Лечение глубокого кариеса, после" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/688367abed9eb2ef9f10e2f1_karies-pislya-w05-p-500.webp') }} 500w, {{ asset('images/688367abed9eb2ef9f10e2f1_karies-pislya-w05-p-800.webp') }} 800w, {{ asset('images/688367abed9eb2ef9f10e2f1_karies-pislya-w05-p-1080.webp') }} 1080w, {{ asset('images/688367abed9eb2ef9f10e2f1_karies-pislya-w05.webp') }} 1182w"
                                    class="works__img-after"><img
                                    src="{{ asset('images/688367a6af87b3f93f0d3e4f_karies-do-w05.webp') }}"
                                    loading="lazy" alt="Лечение глубокого кариеса, до" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/688367a6af87b3f93f0d3e4f_karies-do-w05-p-500.webp') }} 500w, {{ asset('images/688367a6af87b3f93f0d3e4f_karies-do-w05-p-800.webp') }} 800w, {{ asset('images/688367a6af87b3f93f0d3e4f_karies-do-w05-p-1080.webp') }} 1080w, {{ asset('images/688367a6af87b3f93f0d3e4f_karies-do-w05.webp') }} 1182w"
                                    class="works__img-before">
                                <div class="works__work-progressbar"><img
                                        src="{{ asset('images/67feb272c23f3beb30d8417f_team__icon-arrows.svg') }}"
                                        loading="lazy" alt="" class="team__work-progress-icon"></div>
                                <div class="works__work-title">Лечение глубокого кариеса</div>
                                <div fs-list-field="category" class="hide">Терапия</div>
                            </div>
                            <div role="listitem" class="collection__item mod--works w-dyn-item"><img
                                    src="{{ asset('images/6883664b2b4afa60cde5376e_implantatciya-pislya-w01.webp') }}"
                                    loading="lazy" alt="Имплантация зубов, после" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/6883664b2b4afa60cde5376e_implantatciya-pislya-w01-p-500.webp') }} 500w, {{ asset('images/6883664b2b4afa60cde5376e_implantatciya-pislya-w01-p-800.webp') }} 800w, {{ asset('images/6883664b2b4afa60cde5376e_implantatciya-pislya-w01-p-1080.webp') }} 1080w, {{ asset('images/6883664b2b4afa60cde5376e_implantatciya-pislya-w01.webp') }} 1182w"
                                    class="works__img-after"><img
                                    src="{{ asset('images/688366472a038cffacab367e_implantatciya-do-w01.webp') }}"
                                    loading="lazy" alt="Имплантация зубов, до" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/688366472a038cffacab367e_implantatciya-do-w01-p-500.webp') }} 500w, {{ asset('images/688366472a038cffacab367e_implantatciya-do-w01-p-800.webp') }} 800w, {{ asset('images/688366472a038cffacab367e_implantatciya-do-w01-p-1080.webp') }} 1080w, {{ asset('images/688366472a038cffacab367e_implantatciya-do-w01.webp') }} 1182w"
                                    class="works__img-before">
                                <div class="works__work-progressbar"><img
                                        src="{{ asset('images/67feb272c23f3beb30d8417f_team__icon-arrows.svg') }}"
                                        loading="lazy" alt="" class="team__work-progress-icon"></div>
                                <div class="works__work-title">Имплантация зубов</div>
                                <div fs-list-field="category" class="hide">Имплантация</div>
                            </div>
                            <div role="listitem" class="collection__item mod--works w-dyn-item"><img
                                    src="{{ asset('images/6883659f11ba1848d11b3bef_profesiyna-hihiyena-zubiv-pislya-w01.webp') }}"
                                    loading="lazy" alt="Профессиональная гигиена зубов, после" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/6883659f11ba1848d11b3bef_profesiyna-hihiyena-zubiv-pislya-w01-p-500.webp') }} 500w, {{ asset('images/6883659f11ba1848d11b3bef_profesiyna-hihiyena-zubiv-pislya-w01-p-800.webp') }} 800w, {{ asset('images/6883659f11ba1848d11b3bef_profesiyna-hihiyena-zubiv-pislya-w01-p-1080.webp') }} 1080w, {{ asset('images/6883659f11ba1848d11b3bef_profesiyna-hihiyena-zubiv-pislya-w01.webp') }} 1182w"
                                    class="works__img-after"><img
                                    src="{{ asset('images/6883659ce6e698960f37d60b_profesiyna-hihiyena-zubiv-do-w01.webp') }}"
                                    loading="lazy" alt="Профессиональная гигиена зубов, до" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/6883659ce6e698960f37d60b_profesiyna-hihiyena-zubiv-do-w01-p-500.webp') }} 500w, {{ asset('images/6883659ce6e698960f37d60b_profesiyna-hihiyena-zubiv-do-w01-p-800.webp') }} 800w, {{ asset('images/6883659ce6e698960f37d60b_profesiyna-hihiyena-zubiv-do-w01-p-1080.webp') }} 1080w, {{ asset('images/6883659ce6e698960f37d60b_profesiyna-hihiyena-zubiv-do-w01.webp') }} 1182w"
                                    class="works__img-before">
                                <div class="works__work-progressbar"><img
                                        src="{{ asset('images/67feb272c23f3beb30d8417f_team__icon-arrows.svg') }}"
                                        loading="lazy" alt="" class="team__work-progress-icon"></div>
                                <div class="works__work-title">Профессиональная гигиена зубов</div>
                                <div fs-list-field="category" class="hide">Профилактика</div>
                            </div>
                            <div role="listitem" class="collection__item mod--works w-dyn-item"><img
                                    src="{{ asset('images/688363cb89b5176f2cc621a5_karies-pislya-w01.webp') }}"
                                    loading="lazy" alt="Лечение кариеса, после" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/688363cb89b5176f2cc621a5_karies-pislya-w01-p-500.webp') }} 500w, {{ asset('images/688363cb89b5176f2cc621a5_karies-pislya-w01-p-800.webp') }} 800w, {{ asset('images/688363cb89b5176f2cc621a5_karies-pislya-w01-p-1080.webp') }} 1080w, {{ asset('images/688363cb89b5176f2cc621a5_karies-pislya-w01.webp') }} 1182w"
                                    class="works__img-after"><img
                                    src="{{ asset('images/688363c3935e15e0a8d1eb2d_karies-do-w01.webp') }}"
                                    loading="lazy" alt="Лечение кариеса, до" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/688363c3935e15e0a8d1eb2d_karies-do-w01-p-500.webp') }} 500w, {{ asset('images/688363c3935e15e0a8d1eb2d_karies-do-w01-p-800.webp') }} 800w, {{ asset('images/688363c3935e15e0a8d1eb2d_karies-do-w01-p-1080.webp') }} 1080w, {{ asset('images/688363c3935e15e0a8d1eb2d_karies-do-w01.webp') }} 1182w"
                                    class="works__img-before">
                                <div class="works__work-progressbar"><img
                                        src="{{ asset('images/67feb272c23f3beb30d8417f_team__icon-arrows.svg') }}"
                                        loading="lazy" alt="" class="team__work-progress-icon"></div>
                                <div class="works__work-title">Лечение кариеса</div>
                                <div fs-list-field="category" class="hide">Терапия</div>
                            </div>
                            <div role="listitem" class="collection__item mod--works w-dyn-item"><img
                                    src="{{ asset('images/68836463276305f0873a05fb_naroshchuvannya-zubiv-pislya-01.webp') }}"
                                    loading="lazy" alt="Наращивание зубов, после" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/68836463276305f0873a05fb_naroshchuvannya-zubiv-pislya-01-p-500.webp') }} 500w, {{ asset('images/68836463276305f0873a05fb_naroshchuvannya-zubiv-pislya-01-p-800.webp') }} 800w, {{ asset('images/68836463276305f0873a05fb_naroshchuvannya-zubiv-pislya-01-p-1080.webp') }} 1080w, {{ asset('images/68836463276305f0873a05fb_naroshchuvannya-zubiv-pislya-01.webp') }} 1182w"
                                    class="works__img-after"><img
                                    src="{{ asset('images/6883646037663009b5fe3846_naroshchuvannya-zubiv-do-01.webp') }}"
                                    loading="lazy" alt="Наращивание зубов, до" sizes="(max-width: 767px) 100vw, 720px"
                                    srcset="{{ asset('images/6883646037663009b5fe3846_naroshchuvannya-zubiv-do-01-p-500.webp') }} 500w, {{ asset('images/6883646037663009b5fe3846_naroshchuvannya-zubiv-do-01-p-800.webp') }} 800w, {{ asset('images/6883646037663009b5fe3846_naroshchuvannya-zubiv-do-01-p-1080.webp') }} 1080w, {{ asset('images/6883646037663009b5fe3846_naroshchuvannya-zubiv-do-01.webp') }} 1182w"
                                    class="works__img-before">
                                <div class="works__work-progressbar"><img
                                        src="{{ asset('images/67feb272c23f3beb30d8417f_team__icon-arrows.svg') }}"
                                        loading="lazy" alt="" class="team__work-progress-icon"></div>
                                <div class="works__work-title">Наращивание зубов</div>
                                <div fs-list-field="category" class="hide"></div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="23b5aea8-8875-eb13-3404-78ae6a6a1a7f"
                         style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                         class="button-wrap"><a data-remodal-target="contact" href="#"
                                                class="button is-large gold w-inline-block">
                            <div desktop-hide="">Записаться на приём</div>
                            <div mobile-hide="">Записаться на приём</div>
                            <img
                                src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                loading="lazy" alt="Стрелка вверх" class="button__icon-arrow"></a></div>
                </div>
            </div>
        </section>
        <section class="section overflow-hidden">
            <div class="container">
                <div class="section__content-wrap">
                    <div id="reviews-demo" data-w-id="8d7640e9-5ef1-bbe4-af09-fa71d821061a" class="heading__wrap"
                         style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <h2 class="heading-4">Пациенты о {{ config('clinic.name') }}</h2>
                        <div class="text__wrap max-width-19"><p class="text-size-regular text-color-graphite">Демонстрационные тексты из макета. Это не отзывы реальных пациентов.</p></div>
                    </div>
                    <div data-hover="cursor" data-swiper="reviews" data-w-id="8d7640e9-5ef1-bbe4-af09-fa71d8210620"
                         class="swiper mod--reviews w-dyn-list swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                         style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <div role="list" class="swiper-wrapper mod--reviews w-dyn-items"
                             id="swiper-wrapper-7e547410dd047c6cc" aria-live="polite"
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
                                  data-wf-page-id="681a6df7c65fac2aebf1a0e7"
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
    <script defer src="{{ asset('js/works.js') }}?v=3"></script>
    <script async type="module" src="https://cdn.jsdelivr.net/npm/@finsweet/attributes@2/attributes.js" fs-list=""></script>
@endpush
