@extends('layouts.app')

@section('title', 'Блог — Евростом')
@section('description', 'Статьи о здоровье зубов от стоматологической клиники Евростом.')
@section('canonical', 'http://68dental.local/blog')
@section('wf-page', '681bc6e0e2182fd5263898da')

@push('page-css')
    <link rel="stylesheet" href="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/css/dentalux-project.webflow.681bc6e0e2182fd5263898da-0fecf6abe.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@section('content')
<main class="main">
        <section class="section mod--about">
            <div class="container">
                <div class="services__hero-content">
                    <div data-w-id="0bf9ef24-a9ab-fc0b-2160-8740f6407e8d"
                         style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                         class="services__hero-col mod--price">
                        <div class="about__icon-wrap is1"><img
                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/67ebe508f509b13f8c0b2e51_benefits__icon-4.svg"
                                loading="lazy" alt="Иконка" class="icon width-64">
                            <p class="text-size-regular">Всё чаще пациенты выбирают Евростом</p></div>
                        <div class="about__text-wrap is1"><p class="heading-4 mobile-size-48 font-style-inter">48576</p>
                            <p class="text-size-regular">Пациентов уже получили услуги</p></div>
                    </div>
                    <div data-w-id="19936039-c2c9-d67b-d340-e939ee3f8431"
                         style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                         class="price__hero-text-wrap"><h1 class="heading-2">Блог</h1>
                        <p class="text-size-medium mobile-size-14">Практические рекомендации для ваших зубов. Узнайте, как сохранить их здоровыми.</p></div>
                    <a data-w-id="0d5651a3-88c6-a4f4-619d-6eb9fab6e975"
                       style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                       href="tel:+73472468568" class="contact__phone-btn mod--price w-inline-block">
                        <div class="alt-for-link">Подробнее</div>
                    </a></div>
            </div>
            <img
                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/681bc7a70b6f7ce6c30c9db9_blog__img-bg.avif"
                loading="lazy" style="opacity: 1;" data-w-id="d2fd1c8d-6d93-8572-9b65-23d7ea0ff3b5"
                alt="Фон" mobile-hide="" class="services__img-bg"><img
                class="services__img-bg"
                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/681bc7a6eba13a61860f0d88_blog__img-bg-mob.avif"
                alt="Фон" style="opacity: 1;" sizes="100vw" desktop-hide=""
                data-w-id="ab244ad4-1744-485f-58eb-dd3f2961fa35" loading="lazy"
                srcset="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/681bc7a6eba13a61860f0d88_blog__img-bg-mob-p-500.avif 500w, https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/681bc7a6eba13a61860f0d88_blog__img-bg-mob.avif 780w">
            <div class="bread-crumbs"><a href="/" class="bread-crumbs__text">Главная</a>
                <div class="bread-crumbs__text">/</div>
                <div class="bread-crumbs__text active">Блог</div>
            </div>
        </section>
        <section class="section mobile-paddind-32">
            <div class="container">
                <div class="form-block w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" method="get"
                          fs-list-element="filters" data-wf-page-id="681bc6e0e2182fd5263898da"
                          data-wf-element-id="35e76689-d4e4-189d-00bb-8c68c1d951ee" aria-label="Форма записи" onsubmit="window.location.href='tel:+73472468568';return false;">
                        <div class="blog__content-wrap is1">
                            <div fs-list-element="scroll-anchor-pagination"
                                 data-w-id="a5137a93-6ede-df6e-b778-cfb40a99afaf"
                                 style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                 class="blog__content is1"><a fs-list-element="clear" href="#"
                                                              class="blog__text-category">Все</a>
                                <div class="collection__list-wrap w-dyn-list">
                                    <div role="list" class="collection__list mod--blog-category w-dyn-items">
                                        <div role="listitem" class="collection__item mod--blog-category w-dyn-item">
                                            <label class="blog__category-link w-radio"><input
                                                    fs-list-value="Эстетическая стоматология"
                                                    class="w-form-formradioinput hide w-radio-input"
                                                    fs-list-field="category" name="Category" data-name="Category"
                                                    type="radio" id="Category" value="Category"><span
                                                    class="radio-button-label w-form-label" for="Category">Эстетическая стоматология</span></label>
                                        </div>
                                        <div role="listitem" class="collection__item mod--blog-category w-dyn-item">
                                            <label class="blog__category-link w-radio"><input fs-list-value="Терапия"
                                                                                              class="w-form-formradioinput hide w-radio-input"
                                                                                              fs-list-field="category"
                                                                                              name="Category"
                                                                                              data-name="Category"
                                                                                              type="radio" id="Category"
                                                                                              value="Category"><span
                                                    class="radio-button-label w-form-label"
                                                    for="Category">Терапия</span></label></div>
                                        <div role="listitem" class="collection__item mod--blog-category w-dyn-item">
                                            <label class="blog__category-link w-radio"><input
                                                    fs-list-value="Гигиена полости рта"
                                                    class="w-form-formradioinput hide w-radio-input"
                                                    fs-list-field="category" name="Category" data-name="Category"
                                                    type="radio" id="Category" value="Category"><span
                                                    class="radio-button-label w-form-label" for="Category">Гигиена полости рта</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="hide w-form-done" tabindex="-1" role="region" aria-label="Форма отправлена">
                        <div>Заявка принята. Мы перезвоним, чтобы выбрать удобное время.</div>
                    </div>
                    <div class="hide w-form-fail" tabindex="-1" role="region" aria-label="Ошибка отправки формы">
                        <div>Не удалось отправить форму. Позвоните: +7 (347) 246-85-68.</div>
                    </div>
                </div>
                <div mobile-hide="" data-w-id="80852291-f0f8-a52a-d20a-3e7edfa35900"
                     style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                     class="collection__list-wrap collection__list-wrap--blog w-dyn-list">
                    <div fs-list-load="pagination" fs-list-element="list" role="list"
                         class="collection__list collection__list--blog w-dyn-items">
                        <div role="listitem" class="collection__item collection__item--blog w-dyn-item">
                            <div class="blog-card">
                                <div class="blog-card__tag">Терапия</div>
                                <a href="/blog"
                                   class="blog-card__link w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9ba55608ab91b5e9b9763_likuvannya-zubiv-vagitnist-sc.webp"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 100vw, 380px"
                                        srcset="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9ba55608ab91b5e9b9763_likuvannya-zubiv-vagitnist-sc-p-500.webp 500w, https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9ba55608ab91b5e9b9763_likuvannya-zubiv-vagitnist-sc.webp 746w"
                                        class="blog-card__img">
                                    <div class="alt-for-link">Подробнее</div>
                                </a><a href="/blog"
                                       class="button is-icon mod--blog w-inline-block">
                                    <div class="button__icon w-embed">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2"
                                                  stroke-linecap="round"></path>
                                        </svg>
                                    </div>
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div class="blog-card__text">
                                    <div class="blog-card__text-inner"><a
                                            href="/blog" class="w-inline-block"><h2
                                                class="heading-5 font-style-worksans text-weight-normal">10 мифов о лечении зубов во время беременности</h2>
                                            <div class="alt-for-link">Подробнее</div>
                                        </a>
                                        <p class="text-size-regular text-color-neutral_gray">Лечить зубы во время беременности не страшно. Страшно не лечить, когда это действительно нужно.</p>
                                    </div>
                                    <div class="blog-card__text-info">
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846de00afadb49af5cd8_icon_calendar.svg"
                                                loading="lazy" alt="Календарь" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">30 июля 2025</p></div>
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846df6739c334390524c_icon_time.svg"
                                                loading="lazy" alt="Время" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">8</p></div>
                                    </div>
                                </div>
                                <div fs-list-field="category" class="hide">Терапия</div>
                            </div>
                        </div>
                        <div role="listitem" class="collection__item collection__item--blog w-dyn-item">
                            <div class="blog-card">
                                <div class="blog-card__tag">Гигиена полости рта</div>
                                <a href="/blog" class="blog-card__link w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9b5b8da9af2f6b9b84cbf_zuby-40-plus-sc.webp"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 100vw, 380px"
                                        srcset="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9b5b8da9af2f6b9b84cbf_zuby-40-plus-sc-p-500.webp 500w, https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9b5b8da9af2f6b9b84cbf_zuby-40-plus-sc.webp 746w"
                                        class="blog-card__img">
                                    <div class="alt-for-link">Подробнее</div>
                                </a><a href="/blog"
                                       class="button is-icon mod--blog w-inline-block">
                                    <div class="button__icon w-embed">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2"
                                                  stroke-linecap="round"></path>
                                        </svg>
                                    </div>
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div class="blog-card__text">
                                    <div class="blog-card__text-inner"><a href="/blog"
                                                                          class="w-inline-block"><h2
                                                class="heading-5 font-style-worksans text-weight-normal">Как сохранить зубы после 40: возрастные изменения</h2>
                                            <div class="alt-for-link">Подробнее</div>
                                        </a>
                                        <p class="text-size-regular text-color-neutral_gray">Потеря зубов у взрослых — это не только перспектива 70–80 лет. Первые проблемы могут начаться раньше, и они не всегда связаны со старостью.</p></div>
                                    <div class="blog-card__text-info">
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846de00afadb49af5cd8_icon_calendar.svg"
                                                loading="lazy" alt="Календарь" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">5 августа 2025</p></div>
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846df6739c334390524c_icon_time.svg"
                                                loading="lazy" alt="Время" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">8</p></div>
                                    </div>
                                </div>
                                <div fs-list-field="category" class="hide">Гигиена полости рта</div>
                            </div>
                        </div>
                        <div role="listitem" class="collection__item collection__item--blog w-dyn-item">
                            <div class="blog-card">
                                <div class="blog-card__tag">Гигиена полости рта</div>
                                <a href="/blog" class="blog-card__link w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9b26442516b7458ca87f5_poloskannya-zubix-sc.webp"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 100vw, 380px"
                                        srcset="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9b26442516b7458ca87f5_poloskannya-zubix-sc-p-500.webp 500w, https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9b26442516b7458ca87f5_poloskannya-zubix-sc.webp 746w"
                                        class="blog-card__img">
                                    <div class="alt-for-link">Подробнее</div>
                                </a><a href="/blog" class="button is-icon mod--blog w-inline-block">
                                    <div class="button__icon w-embed">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2"
                                                  stroke-linecap="round"></path>
                                        </svg>
                                    </div>
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div class="blog-card__text">
                                    <div class="blog-card__text-inner"><a href="/blog"
                                                                          class="w-inline-block"><h2
                                                class="heading-5 font-style-worksans text-weight-normal">Полоскание зубов — простая привычка, которая помогает сохранить улыбку</h2>
                                            <div class="alt-for-link">Подробнее</div>
                                        </a>
                                        <p class="text-size-regular text-color-neutral_gray">Полоскать рот — одна из самых простых привычек, которая снижает риск проблем с дёснами, кариесом и неприятным запахом. </p></div>
                                    <div class="blog-card__text-info">
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846de00afadb49af5cd8_icon_calendar.svg"
                                                loading="lazy" alt="Календарь" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">10 августа 2025</p></div>
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846df6739c334390524c_icon_time.svg"
                                                loading="lazy" alt="Время" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">5</p></div>
                                    </div>
                                </div>
                                <div fs-list-field="category" class="hide">Гигиена полости рта</div>
                            </div>
                        </div>
                        <div role="listitem" class="collection__item collection__item--blog w-dyn-item">
                            <div class="blog-card">
                                <div class="blog-card__tag">Эстетическая стоматология</div>
                                <a href="/blog"
                                   class="blog-card__link w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9acadc7c76b0ed68035bb_diastema-sc.webp"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 100vw, 380px"
                                        srcset="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9acadc7c76b0ed68035bb_diastema-sc-p-500.webp 500w, https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9acadc7c76b0ed68035bb_diastema-sc.webp 746w"
                                        class="blog-card__img">
                                    <div class="alt-for-link">Подробнее</div>
                                </a><a href="/blog"
                                       class="button is-icon mod--blog w-inline-block">
                                    <div class="button__icon w-embed">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2"
                                                  stroke-linecap="round"></path>
                                        </svg>
                                    </div>
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div class="blog-card__text">
                                    <div class="blog-card__text-inner"><a href="/blog"
                                                                          class="w-inline-block"><h2
                                                class="heading-5 font-style-worksans text-weight-normal">Диастема: как убрать щель между зубами</h2>
                                            <div class="alt-for-link">Подробнее</div>
                                        </a>
                                        <p class="text-size-regular text-color-neutral_gray">Диастема — заметный промежуток, обычно между двумя передними резцами. Лечить её или нет, решают индивидуально, вместе с врачом.</p></div>
                                    <div class="blog-card__text-info">
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846de00afadb49af5cd8_icon_calendar.svg"
                                                loading="lazy" alt="Календарь" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">15 августа 2025</p></div>
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846df6739c334390524c_icon_time.svg"
                                                loading="lazy" alt="Время" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">7</p></div>
                                    </div>
                                </div>
                                <div fs-list-field="category" class="hide">Эстетическая стоматология</div>
                            </div>
                        </div>
                        <div role="listitem" class="collection__item collection__item--blog w-dyn-item">
                            <div class="blog-card">
                                <div class="blog-card__tag">Гигиена полости рта</div>
                                <a href="/blog" class="blog-card__link w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9a5be983bd56d00b3bb8e_zubniy-kamin.webp"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 100vw, 380px"
                                        srcset="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9a5be983bd56d00b3bb8e_zubniy-kamin-p-500.webp 500w, https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9a5be983bd56d00b3bb8e_zubniy-kamin.webp 746w"
                                        class="blog-card__img">
                                    <div class="alt-for-link">Подробнее</div>
                                </a><a href="/blog" class="button is-icon mod--blog w-inline-block">
                                    <div class="button__icon w-embed">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2"
                                                  stroke-linecap="round"></path>
                                        </svg>
                                    </div>
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div class="blog-card__text">
                                    <div class="blog-card__text-inner"><a href="/blog"
                                                                          class="w-inline-block"><h2
                                                class="heading-5 font-style-worksans text-weight-normal">Зубной камень: что это, причины и способы удаления</h2>
                                            <div class="alt-for-link">Подробнее</div>
                                        </a>
                                        <p class="text-size-regular text-color-neutral_gray">Когда пациенты спрашивают, как выглядит зубной камень, мы показываем снимки: это не только желтоватые или тёмные пятна.</p></div>
                                    <div class="blog-card__text-info">
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846de00afadb49af5cd8_icon_calendar.svg"
                                                loading="lazy" alt="Календарь" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">20 августа 2025</p></div>
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846df6739c334390524c_icon_time.svg"
                                                loading="lazy" alt="Время" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">7</p></div>
                                    </div>
                                </div>
                                <div fs-list-field="category" class="hide">Гигиена полости рта</div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="205dff27-75d5-3b60-5713-65445d8d5a59"
                         style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                         role="navigation" aria-label="Список"
                         class="w-pagination-wrapper collection__pagination collection__pagination-blog">
                        <div class="pagination-num"><a fs-list-element="page-button" href="#"
                                                       class="pagination-num__text w-inline-block w--current"
                                                       aria-current="page">1</a></div>
                    </div>
                </div>
                <div desktop-hide="" data-w-id="d9045617-76f0-b312-3d25-68c86a6d17e3" style="opacity: 0;"
                     class="collection__list-wrap collection__list-wrap--blog w-dyn-list">
                    <div fs-list-load="pagination" fs-list-element="list" role="list"
                         class="collection__list collection__list--blog w-dyn-items">
                        <div role="listitem" class="collection__item collection__item--blog w-dyn-item">
                            <div class="blog-card">
                                <div class="blog-card__tag">Терапия</div>
                                <a href="/blog"
                                   class="blog-card__link w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9ba55608ab91b5e9b9763_likuvannya-zubiv-vagitnist-sc.webp"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 100vw, 380px"
                                        srcset="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9ba55608ab91b5e9b9763_likuvannya-zubiv-vagitnist-sc-p-500.webp 500w, https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9ba55608ab91b5e9b9763_likuvannya-zubiv-vagitnist-sc.webp 746w"
                                        class="blog-card__img">
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div class="blog-card__text">
                                    <div class="blog-card__text-inner"><a
                                            href="/blog" class="w-inline-block"><h3
                                                class="heading-5 font-style-worksans text-weight-normal">10 мифов о лечении зубов во время беременности</h3>
                                            <div class="alt-for-link">Подробнее</div>
                                        </a>
                                        <p class="text-size-regular text-color-neutral_gray">Лечить зубы во время беременности не страшно. Страшно не лечить, когда это действительно нужно.</p>
                                    </div>
                                    <div class="blog-card__text-info">
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846de00afadb49af5cd8_icon_calendar.svg"
                                                loading="lazy" alt="Календарь" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">30 июля 2025</p></div>
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846df6739c334390524c_icon_time.svg"
                                                loading="lazy" alt="Время" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">8</p></div>
                                    </div>
                                </div>
                                <a href="/blog"
                                   class="button is-icon mod--blog w-inline-block">
                                    <div class="button__icon width-16 w-embed">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2"
                                                  stroke-linecap="round"></path>
                                        </svg>
                                    </div>
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div fs-list-field="category" class="hide">Терапия</div>
                            </div>
                        </div>
                        <div role="listitem" class="collection__item collection__item--blog w-dyn-item">
                            <div class="blog-card">
                                <div class="blog-card__tag">Гигиена полости рта</div>
                                <a href="/blog" class="blog-card__link w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9b5b8da9af2f6b9b84cbf_zuby-40-plus-sc.webp"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 100vw, 380px"
                                        srcset="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9b5b8da9af2f6b9b84cbf_zuby-40-plus-sc-p-500.webp 500w, https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9b5b8da9af2f6b9b84cbf_zuby-40-plus-sc.webp 746w"
                                        class="blog-card__img">
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div class="blog-card__text">
                                    <div class="blog-card__text-inner"><a href="/blog"
                                                                          class="w-inline-block"><h3
                                                class="heading-5 font-style-worksans text-weight-normal">Как сохранить зубы после 40: возрастные изменения</h3>
                                            <div class="alt-for-link">Подробнее</div>
                                        </a>
                                        <p class="text-size-regular text-color-neutral_gray">Потеря зубов у взрослых — это не только перспектива 70–80 лет. Первые проблемы могут начаться раньше, и они не всегда связаны со старостью.</p></div>
                                    <div class="blog-card__text-info">
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846de00afadb49af5cd8_icon_calendar.svg"
                                                loading="lazy" alt="Календарь" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">5 августа 2025</p></div>
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846df6739c334390524c_icon_time.svg"
                                                loading="lazy" alt="Время" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">8</p></div>
                                    </div>
                                </div>
                                <a href="/blog" class="button is-icon mod--blog w-inline-block">
                                    <div class="button__icon width-16 w-embed">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2"
                                                  stroke-linecap="round"></path>
                                        </svg>
                                    </div>
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div fs-list-field="category" class="hide">Гигиена полости рта</div>
                            </div>
                        </div>
                        <div role="listitem" class="collection__item collection__item--blog w-dyn-item">
                            <div class="blog-card">
                                <div class="blog-card__tag">Гигиена полости рта</div>
                                <a href="/blog" class="blog-card__link w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9b26442516b7458ca87f5_poloskannya-zubix-sc.webp"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 100vw, 380px"
                                        srcset="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9b26442516b7458ca87f5_poloskannya-zubix-sc-p-500.webp 500w, https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9b26442516b7458ca87f5_poloskannya-zubix-sc.webp 746w"
                                        class="blog-card__img">
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div class="blog-card__text">
                                    <div class="blog-card__text-inner"><a href="/blog"
                                                                          class="w-inline-block"><h3
                                                class="heading-5 font-style-worksans text-weight-normal">Полоскание зубов — простая привычка, которая помогает сохранить улыбку</h3>
                                            <div class="alt-for-link">Подробнее</div>
                                        </a>
                                        <p class="text-size-regular text-color-neutral_gray">Полоскать рот — одна из самых простых привычек, которая снижает риск проблем с дёснами, кариесом и неприятным запахом. </p></div>
                                    <div class="blog-card__text-info">
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846de00afadb49af5cd8_icon_calendar.svg"
                                                loading="lazy" alt="Календарь" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">10 августа 2025</p></div>
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846df6739c334390524c_icon_time.svg"
                                                loading="lazy" alt="Время" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">5</p></div>
                                    </div>
                                </div>
                                <a href="/blog" class="button is-icon mod--blog w-inline-block">
                                    <div class="button__icon width-16 w-embed">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2"
                                                  stroke-linecap="round"></path>
                                        </svg>
                                    </div>
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div fs-list-field="category" class="hide">Гигиена полости рта</div>
                            </div>
                        </div>
                        <div role="listitem" class="collection__item collection__item--blog w-dyn-item">
                            <div class="blog-card">
                                <div class="blog-card__tag">Эстетическая стоматология</div>
                                <a href="/blog"
                                   class="blog-card__link w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9acadc7c76b0ed68035bb_diastema-sc.webp"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 100vw, 380px"
                                        srcset="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9acadc7c76b0ed68035bb_diastema-sc-p-500.webp 500w, https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9acadc7c76b0ed68035bb_diastema-sc.webp 746w"
                                        class="blog-card__img">
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div class="blog-card__text">
                                    <div class="blog-card__text-inner"><a href="/blog"
                                                                          class="w-inline-block"><h3
                                                class="heading-5 font-style-worksans text-weight-normal">Диастема: как убрать щель между зубами</h3>
                                            <div class="alt-for-link">Подробнее</div>
                                        </a>
                                        <p class="text-size-regular text-color-neutral_gray">Диастема — заметный промежуток, обычно между двумя передними резцами. Лечить её или нет, решают индивидуально, вместе с врачом.</p></div>
                                    <div class="blog-card__text-info">
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846de00afadb49af5cd8_icon_calendar.svg"
                                                loading="lazy" alt="Календарь" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">15 августа 2025</p></div>
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846df6739c334390524c_icon_time.svg"
                                                loading="lazy" alt="Время" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">7</p></div>
                                    </div>
                                </div>
                                <a href="/blog"
                                   class="button is-icon mod--blog w-inline-block">
                                    <div class="button__icon width-16 w-embed">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2"
                                                  stroke-linecap="round"></path>
                                        </svg>
                                    </div>
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div fs-list-field="category" class="hide">Эстетическая стоматология</div>
                            </div>
                        </div>
                        <div role="listitem" class="collection__item collection__item--blog w-dyn-item">
                            <div class="blog-card">
                                <div class="blog-card__tag">Гигиена полости рта</div>
                                <a href="/blog" class="blog-card__link w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9a5be983bd56d00b3bb8e_zubniy-kamin.webp"
                                        loading="lazy" alt="" sizes="(max-width: 767px) 100vw, 380px"
                                        srcset="https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9a5be983bd56d00b3bb8e_zubniy-kamin-p-500.webp 500w, https://cdn.prod.website-files.com/67ebc6f8b625e182a8232980/68a9a5be983bd56d00b3bb8e_zubniy-kamin.webp 746w"
                                        class="blog-card__img">
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div class="blog-card__text">
                                    <div class="blog-card__text-inner"><a href="/blog"
                                                                          class="w-inline-block"><h3
                                                class="heading-5 font-style-worksans text-weight-normal">Зубной камень: что это, причины и способы удаления</h3>
                                            <div class="alt-for-link">Подробнее</div>
                                        </a>
                                        <p class="text-size-regular text-color-neutral_gray">Когда пациенты спрашивают, как выглядит зубной камень, мы показываем снимки: это не только желтоватые или тёмные пятна.</p></div>
                                    <div class="blog-card__text-info">
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846de00afadb49af5cd8_icon_calendar.svg"
                                                loading="lazy" alt="Календарь" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">20 августа 2025</p></div>
                                        <div class="text-info__inner"><img
                                                src="https://cdn.prod.website-files.com/67ea68f011b0fd6e4b26caf8/6820846df6739c334390524c_icon_time.svg"
                                                loading="lazy" alt="Время" class="icon width-16">
                                            <p class="text-size-regular text-color-dim-gray">7</p></div>
                                    </div>
                                </div>
                                <a href="/blog" class="button is-icon mod--blog w-inline-block">
                                    <div class="button__icon width-16 w-embed">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2"
                                                  stroke-linecap="round"></path>
                                        </svg>
                                    </div>
                                    <div class="alt-for-link">Подробнее</div>
                                </a>
                                <div fs-list-field="category" class="hide">Гигиена полости рта</div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="d9045617-76f0-b312-3d25-68c86a6d17f9" style="opacity: 0;" role="navigation"
                         aria-label="Список"
                         class="w-pagination-wrapper collection__pagination collection__pagination-blog">
                        <div class="pagination-num"><a fs-list-element="page-button" href="#"
                                                       class="pagination-num__text w-inline-block w--current"
                                                       aria-current="page">1</a></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script async type="module" src="https://cdn.jsdelivr.net/npm/@finsweet/attributes@2/attributes.js" fs-list=""></script>
@endpush
