<header class="header">
        <section class="section mod--header">
            <div class="container">
                <div class="header__content"><a href="/" @if(request()->is('/')) aria-current="page" @endif
                                                class="header__col is1 w-inline-block @if(request()->is('/')) w--current @endif"><span
                            class="header__logo header__logo-text">Евростом</span>
                        <div class="alt-for-link"></div>
                    </a>
                    <div class="header__col is2">
                        @include('partials.nav-links')
                    </div>
                    <div class="header__col is3">
                        <div class="header__col-menu is2">
                            <div class="header__contact">
                                <div class="header__contact-link"><img
                                        src="{{ asset('images/67eb937314e68f1665729dc8_icon__calendar.svg') }}"
                                        loading="lazy" alt="" class="header__contact-icon">
                                    <div class="header__contact-popup">
                                        <div class="header__contact-popup-text"><p class="text-size-small">Пн–Пт:
                                                09:00–21:00</p>
                                            <p class="text-size-small">Сб: выходной</p>
                                            <p class="text-size-small">Вс: выходной</p></div>
                                    </div>
                                </div>
                                <div class="header__contact-link"><img
                                        src="{{ asset('images/67eb93730254dadf0bc87490_icon__place.svg') }}"
                                        loading="lazy" alt="" class="header__contact-icon">
                                    <div class="header__contact-popup">
                                        <div class="header__contact-popup-text"><a
                                                href="https://yandex.ru/maps/org/yevrostom/27380149446/" target="_blank"
                                                class="text-size-small">д. Алексеевка, Центральная ул., 58/1</a></div>
                                    </div>
                                </div>
                                <div class="header__contact-link"><img
                                        src="{{ asset('images/67eb93731aa6a8772d43e557_icon__call.svg') }}"
                                        loading="lazy" alt="" class="header__contact-icon">
                                    <div class="header__contact-popup">
                                        <div class="header__contact-popup-wrap">
                                            <div class="header__contact-popup-text"><a href="tel:+73472468568"
                                                                                       class="text-size-small">+7 (347)
                                                    246-85-68</a><a href="tel:+73472468568" class="text-size-small">+7
                                                    (347) 246-85-68</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a data-remodal-target="contact" href="tel:+73472468568"
                               class="button is-large gold w-inline-block">
                                <div desktop-hide="">Позвонить</div>
                                <div mobile-hide="">Телефон</div>
                                <img
                                    src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                                    loading="lazy" alt="" class="button__icon-arrow"></a></div>
                    </div>
                    <div fs-scrolldisable-element="toggle" data-w-id="5e736623-74ac-60f8-09ce-dfaa226a8924"
                         class="header__col is4">
                        <div class="header__col-line is1" style="opacity: 1;"></div>
                        <div class="header__col-line is1" style="opacity: 1;"></div>
                        <div class="header__col-line is1" style="opacity: 1;"></div>
                        <div class="header__col-line is2"
                             style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
                        <div class="header__col-line is3"
                             style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="header__menu"
             style="transform: translate3d(0%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
            @include('partials.nav-links')
            <div class="header__col-menu is2">
                <div class="header__contact">
                    <div class="header__contact-link"><img
                            src="{{ asset('images/67eb937314e68f1665729dc8_icon__calendar.svg') }}"
                            loading="lazy" alt="" class="header__contact-icon">
                        <div class="header__contact-popup">
                            <div class="header__contact-popup-text"><p class="text-size-small">Пн–Пт: 09:00–21:00</p>
                                <p class="text-size-small">Сб: выходной</p>
                                <p class="text-size-small">Вс: выходной</p></div>
                        </div>
                    </div>
                    <div class="header__contact-link"><img
                            src="{{ asset('images/67eb93730254dadf0bc87490_icon__place.svg') }}"
                            loading="lazy" alt="" class="header__contact-icon">
                        <div class="header__contact-popup">
                            <div class="header__contact-popup-text"><a
                                    href="https://yandex.ru/maps/org/yevrostom/27380149446/" target="_blank"
                                    class="text-size-small">д. Алексеевка, Центральная ул., 58/1</a></div>
                        </div>
                    </div>
                    <div class="header__contact-link"><img
                            src="{{ asset('images/67eb93731aa6a8772d43e557_icon__call.svg') }}"
                            loading="lazy" alt="" class="header__contact-icon">
                        <div class="header__contact-popup">
                            <div class="header__contact-popup-wrap">
                                <div class="header__contact-popup-text"><a href="tel:+73472468568"
                                                                           class="text-size-small">+7 (347)
                                        246-85-68</a><a href="tel:+73472468568" class="text-size-small">+7 (347)
                                        246-85-68</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a data-remodal-target="contact" href="tel:+73472468568" class="button is-large gold w-inline-block">
                    <div desktop-hide="">Позвонить</div>
                    <div mobile-hide="">Телефон</div>
                    <img
                        src="{{ asset('images/67eb90c4a1cfd46744ea36ba_icon__arrow-up.svg') }}"
                        loading="lazy" alt="" class="button__icon-arrow"></a></div>
        </div>
    </header>
