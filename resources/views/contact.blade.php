@extends('layouts.app')

@section('title', 'Контакты — Евростом')
@section('description', 'Контакты клиники Евростом: деревня Алексеевка, Центральная улица, 58/1. Телефон +7 (347) 246-85-68. Пн–Пт: 09:00–21:00.')
@section('canonical', 'http://68dental.local/contact')
@section('wf-page', '68231d17b77fe9cbbcbfa1f9')

@push('page-css')
    <link rel="stylesheet" href="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/css/dentalux-project.webflow.68231d17b77fe9cbbcbfa1f9-108097f6f.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
<main class="main">
        <section class="section mod--contact">
            <div class="container">
                <div class="hide"><h1>Контакты</h1></div>
                <div class="contact__content-wrap">
                    <div class="contact__heading-wrap"><h1 class="heading-3">Свяжитесь с нами</h1></div>
                    <div data-w-id="dea7b75a-7402-9f70-0701-c0ed9d6b4233"
                         style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                         class="contact__form">
                        <div class="cta__form-line"></div>
                        <div class="form__block contact w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form cta"
                                  data-wf-page-id="68231d17b77fe9cbbcbfa1f9"
                                  data-wf-element-id="dea7b75a-7402-9f70-0701-c0ed9d6b4236" aria-label="Форма записи" onsubmit="window.location.href='tel:+73472468568';return false;">
                                <div class="contact__text-wrap is1"><p
                                        class="text-size-medium mobile-size-14 text-align-center">Мы свяжемся с вами в течение часа, чтобы вы могли выбрать дату и время приёма.</p></div>
                                <div class="text__field-wrap cta"><input class="text__field w-input" maxlength="256"
                                                                         name="name-2" data-name="Name 2"
                                                                         placeholder="Ваше имя" type="text" id="name-2"
                                                                         required=""><input class="text__field w-input"
                                                                                            data-input-phone=""
                                                                                            maxlength="256" name="Phone"
                                                                                            data-name="Phone"
                                                                                            placeholder="Ваш телефон"
                                                                                            type="tel" id="Phone"
                                                                                            required=""></div>
                                <div class="button is-large gold"><input type="submit" data-wait=""
                                                                         class="submit__button w-button" value="">
                                    <div>Записаться на приём</div>
                                </div>
                            </form>
                            <div class="success__message w-form-done" tabindex="-1" role="region"
                                 aria-label="Форма отправлена">
                                <div class="text-size-medium text-color-white">Спасибо, что выбираете Евростом. Мы перезвоним, чтобы выбрать удобное время. Ожидайте звонок.
                                </div>
                            </div>
                            <div class="w-form-fail" tabindex="-1" role="region" aria-label="Ошибка отправки формы">
                                <div>Не удалось отправить форму. Позвоните: +7 (347) 246-85-68.</div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="da61cce3-6f70-7fb7-7a19-a9a26a1fbca1" style="opacity: 0;" class="contact__columns">
                        <div class="contact__col">
                            <div class="contact__col-wrap"><img
                                    src="{{ asset('images/67ed3f04f8d1941bbc010459_icon__phone.svg') }}"
                                    loading="lazy" alt="Телефон" class="contact__icon is1"><a
                                    href="tel:+73472468568" class="text-size-regular text-color-white">+7 (347) 246-85-68</a><a href="tel:+73472468568" class="text-size-regular text-color-white">+7 (347) 246-85-68</a></div>
                        </div>
                        <div class="contact__col">
                            <div class="contact__col-wrap"><img
                                    src="{{ asset('images/67ed3f0561fca9c14fccc574_icon__calendar.svg') }}"
                                    loading="lazy" alt="Календарь" class="contact__icon">
                                <p class="text-size-regular text-color-white">Пн–Пт: 09:00–21:00</p>
                                <p class="text-size-regular text-color-white">Сб: выходной</p>
                                <p class="text-size-regular text-color-white">Вс: выходной</p></div>
                        </div>
                        <div id="w-node-_79a22015-ab8f-4b54-5d77-d8cdeb15c4e3-bcbfa1f9" class="contact__col">
                            <div class="contact__col-wrap"><img
                                    src="{{ asset('images/67ed3f052b8d6a02e20242ba_icon__place.svg') }}"
                                    loading="lazy" alt="Адрес" class="contact__icon is1"><a
                                    href="https://yandex.ru/maps/org/yevrostom/27380149446/" target="_blank"
                                    class="text-size-regular text-color-white">д. Алексеевка,<br>Центральная ул., 58/1</a>
                            </div>
                        </div>
                        <div id="w-node-_32611652-2785-6d05-c2ec-1a42cbe52b84-bcbfa1f9" class="contact__col social">
                            <div class="contact__col-wrap social">
                                <div class="contact__social-wrap"><a
                                        href="tel:+73472468568"
                                        class="contact__social w-inline-block"><img
                                            src="{{ asset('images/6823227ffa96345d047f07a6_icon-email.svg') }}"
                                            loading="lazy" alt="Почта" class="icon width-36"></a><a
                                        href="https://yandex.ru/maps/org/yevrostom/27380149446/" target="_blank"
                                        class="contact__social w-inline-block"><img
                                            src="{{ asset('images/67ed38babab72294e770dbe5_icon__facebook.svg') }}"
                                            loading="lazy" alt="Карта" class="icon width-36"></a><a
                                        href="https://wa.me/79174172079"
                                        target="_blank" class="contact__social w-inline-block"><img
                                            src="{{ asset('images/67ed38ba08dca978557bd2fe_icon__inst.svg') }}"
                                            loading="lazy" alt="WhatsApp" class="icon width-36"></a></div>
                                <p desktop-hide="" class="text-size-regular text-color-white">Как с нами связаться</p>
                            </div>
                        </div>
                    </div>
                    <a data-w-id="813d4f5d-b171-87ce-4033-29f8c6ee4608"
                       style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                       href="tel:+73472468568" class="contact__phone-btn mod--contact w-inline-block">
                        <div class="alt-for-link">Подробнее</div>
                    </a></div>
            </div>
            <img class="services__img-bg"
                 src="{{ asset('images/68231da8269dead80b6c5d04_contact__img-bg.avif') }}"
                 alt="Фон" mobile-hide="" style="opacity: 1;" sizes="100vw"
                 data-w-id="d2fd1c8d-6d93-8572-9b65-23d7ea0ff3b5" loading="lazy"
                 srcset="{{ asset('images/68231da8269dead80b6c5d04_contact__img-bg-p-500.avif') }} 500w, {{ asset('images/68231da8269dead80b6c5d04_contact__img-bg-p-800.avif') }} 800w, {{ asset('images/68231da8269dead80b6c5d04_contact__img-bg-p-1080.avif') }} 1080w, {{ asset('images/68231da8269dead80b6c5d04_contact__img-bg.avif') }} 2880w"><img
                src="{{ asset('images/68231da71a3174630803d993_contact__img-bg-mob.avif') }}"
                loading="lazy" style="opacity: 1;" data-w-id="ab244ad4-1744-485f-58eb-dd3f2961fa35"
                alt="Фон" desktop-hide="" class="services__img-bg"></section>
    </main>
@endsection
