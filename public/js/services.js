if (document.querySelector('[data-swiper="services-hero"]')) {
    new Swiper('[data-swiper="services-hero"]', {
        loop: true,
        speed: 800,
        spaceBetween: 16,
        allowTouchMove: true,
        autoHeight: true,
        slidesPerView: 1,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination.mod--services-hero',
            clickable: true,
        },
        a11y: {
            prevSlideMessage: 'Предыдущий слайд',
            nextSlideMessage: 'Следующий слайд',
            paginationBulletMessage: 'Перейти к слайду {{index}}',
        },
    });
}

if (document.querySelector('[data-swiper=specialists]')) {
    new Swiper('[data-swiper=specialists]', {
        speed: 800,
        slidesPerView: 3,
        spaceBetween: 16,
        allowTouchMove: true,
        loop: false,
        breakpoints: {
            220: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 3,
            },
        },
        a11y: {
            prevSlideMessage: 'Предыдущий слайд',
            nextSlideMessage: 'Следующий слайд',
            paginationBulletMessage: 'Перейти к слайду {{index}}',
        },
        on: {
            init: function () {
                var paginationItems = $('[data-swiper-specialists="pagination"]').children();
                paginationItems.find('[data-anim]').removeClass('active');
                setTimeout(function () {
                    paginationItems.eq(0).find('[data-anim]').addClass('active');
                }, 100);
            },
            slideChange: function () {
                var paginationItems = $('[data-swiper-specialists="pagination"]').children();
                var pagLength = paginationItems.length;
                var activeIndex = this.realIndex % pagLength;
                paginationItems.find('[data-anim]').removeClass('active');
                paginationItems.eq(activeIndex).find('[data-anim]').addClass('active');
            },
        },
    });
}
