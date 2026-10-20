<footer class="footer">
        <section class="section mod--footer">
            <div class="container">
                <div class="footer__content-wrap">
                    <div class="footer__content is1"><a id="w-node-_0031a786-f590-9c67-4177-da6fe2287d04-e2287cff"
                                                        href="/" @if(request()->is('/')) aria-current="page" @endif
                                                        class="footer__col is1 w-inline-block @if(request()->is('/')) w--current @endif"><span
                                class="footer__logo footer__logo-text">{{ config('clinic.name') }}</span></a>
                        <div class="footer__col is2"><a href="/about" class="footer__text-link">О нас</a><a
                                href="{{ config('clinic.map_url') }}" target="_blank"
                                rel="noopener" class="footer__text-link">Фотографии</a><a href="/#facts"
                                                                                          class="footer__text-link">Сведения</a><a
                                href="{{ config('clinic.map_url') }}" target="_blank" rel="noopener"
                                class="footer__text-link">Маршрут</a><a href="/contact" class="footer__text-link">Контакты</a><a
                                href="tel:{{ config('clinic.phone_tel') }}" class="footer__text-link">Телефон</a><a desktop-hide="" href="{{ config('clinic.map_url') }}" target="_blank" rel="noopener"
                                                                                                class="footer__text-link">Карточка
                                на Яндекс Картах</a></div>
                        <div id="w-node-_0031a786-f590-9c67-4177-da6fe2287d13-e2287cff" class="footer__col is3">
                            <div class="footer__text-wrap is1"><img
                                    src="{{ asset('images/67ed3f0561fca9c14fccc574_icon__calendar.svg') }}"
                                    loading="lazy" alt="" class="icon width-22">
                                <p class="text-size-regular">{{ config('clinic.hours_weekdays') }}</p>
                                <p class="text-size-regular">{{ config('clinic.hours_saturday') }}</p>
                                <p class="text-size-regular">{{ config('clinic.hours_sunday') }}</p></div>
                            <div class="footer__text-wrap is1"><img
                                    src="{{ asset('images/67ed3f04f8d1941bbc010459_icon__phone.svg') }}"
                                    loading="lazy" alt="" class="icon width-22"><a href="tel:{{ config('clinic.phone_tel') }}"
                                                                                   class="text-size-regular text-color-white">{{ config('clinic.phone_display') }}</a><a href="mailto:{{ config('clinic.email') }}"
                                                          class="text-size-regular text-color-white">{{ config('clinic.email') }}</a></div>
                            <div class="footer__text-wrap is1"><img
                                    src="{{ asset('images/67ed3f052b8d6a02e20242ba_icon__place.svg') }}"
                                    loading="lazy" alt="" class="icon width-22"><a
                                    href="{{ config('clinic.map_url') }}" target="_blank"
                                    class="text-size-regular text-color-white">{{ config('clinic.address') }}</a>
                            </div>
                        </div>
                        <div class="footer__social-wrap"><a href="{{ config('clinic.map_url') }}"
                                                            target="_blank" rel="noopener"
                                                            class="footer__social w-inline-block"><span
                                    class="text-size-small">Карта</span></a><a href="mailto:{{ config('clinic.email') }}"
                                                                               target="_blank" rel="noopener"
                                                                               class="footer__social w-inline-block"><span
                                    class="text-size-small">Почта</span></a></div>
                        <a id="w-node-_0031a786-f590-9c67-4177-da6fe2287d2b-e2287cff"
                           href="{{ config('clinic.map_url') }}" target="_blank"
                           class="footer__col is4 w-inline-block"></a></div>
                    <div class="footer__content is2"><p class="text-size-medium mod--custom">ⓒ <span
                                data-copyright-year="">2026</span></p>
                        <a href="{{ config('seo.url') }}" target="_blank" rel="noopener" class="text-size-medium mod--custom text-color-white">{{ config('seo.credit') }}</a>
                        <div class="footer__text-wrap is2"><a
                                href="{{ config('clinic.map_url') }}" target="_blank"
                                rel="noopener" class="footer__text-link">Доступность</a><a mobile-hide="" href="{{ config('clinic.map_url') }}" target="_blank" rel="noopener"
                                                                                           class="text-size-medium mod--custom text-color-white">Карточка
                                на Яндекс Картах</a></div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
