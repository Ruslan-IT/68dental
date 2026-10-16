if (window.innerWidth >= 768 && document.querySelector('[data-swiper=specialists]')) {
    new Swiper('[data-swiper=specialists]', {
        speed: 800,
        slidesPerView: 3,
        spaceBetween: 16,
        allowTouchMove: true,
        loop: false,
        a11y: {
            prevSlideMessage: 'Предыдущий слайд',
            nextSlideMessage: 'Следующий слайд',
            paginationBulletMessage: 'Перейти к слайду {{index}}',
        },
    });
}
