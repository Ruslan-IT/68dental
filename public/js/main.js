// Smooth Scroll
    SmoothScroll({
        animationTime: 800, // [ms]
        stepSize: 100, // [px]
        accelerationDelta: 50,  // 50
        accelerationMax: 3,   // 3
        touchpadSupport: false,
    })
    // Update year of copyright in footer
    $(() => {
        $('[data-copyright-year]').html(new Date().getFullYear());
    });
    if (window.innerWidth >= 768) {
        // custom cursor
        const cursor = document.querySelector('.custom-cursor');
        const hoverElements = document.querySelectorAll('[data-hover="cursor"]');
        document.addEventListener('mousemove', (e) => {
            let isHovered = false;
            hoverElements.forEach(element => {
                if (element.matches(':hover')) {
                    const elementUnderCursor = document.elementFromPoint(e.clientX, e.clientY);
                    const isLinkHovered = elementUnderCursor?.closest('a');

                    if (!isLinkHovered) {
                        isHovered = true;
                    }
                }
            });
            if (isHovered) {
                cursor.style.opacity = '1';
                cursor.style.transform = `translate(${e.clientX}px, ${e.clientY}px)`;
            } else {
                cursor.style.opacity = '0';
            }
        });
    }

    // phone input validation
    const phoneInputs = document.querySelectorAll('[data-input-phone]');

    phoneInputs.forEach((input) => {
        input.addEventListener('input', () => {
            let value = input.value;

            if (value.length > 0 && value[0] !== '+') {
                input.value = '+' + value.replace(/^\+/, '');
            }
        });
    });

// mask of a diseased tooth when hovering
    document.addEventListener('DOMContentLoaded', () => {
        const trigger = document.querySelector('#model-trigger');
        const frontTooth = document.querySelector('.hero__illustr.is1');

        if (!trigger || !frontTooth) return;

        trigger.addEventListener('mousemove', (e) => {
            const rect = trigger.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;

            const newMask = `radial-gradient(
      circle at ${x}% ${y}%,
      rgba(0,0,0,1) 0%,
      rgba(0,0,0,0.7) 4%,
      rgba(0,0,0,0) 8%
    )`;

            frontTooth.style.mask = newMask;
            frontTooth.style.webkitMask = newMask;
        });

        trigger.addEventListener('mouseleave', () => {
            const hideMask = 'radial-gradient(circle at 50% 50%, rgba(0,0,0,0) 0%, rgba(0,0,0,0) 100%)';
            frontTooth.style.mask = hideMask;
            frontTooth.style.webkitMask = hideMask;
        });
    });

    // control of two 3D simultaneously
    const trigger = document.getElementById('model-trigger');
    const models = [
        document.getElementById('myModel'),
        document.getElementById('myModel-2')
    ];

    if (trigger && models.every(Boolean)) {
    models.forEach(model => {
        model.removeAttribute('camera-controls');
        model.autoRotate = true;
    });

    let isDragging = false;
    let startX = 0;
    let startY = 0;
    let currentTheta = 30 * (Math.PI / 180);
    let currentPhi = 120 * (Math.PI / 180);

    const updateCameras = () => {
        models.forEach(model => {
            model.cameraOrbit = `${currentTheta}rad ${currentPhi}rad 2.5m`;
        });
    };

    updateCameras();

    const handleStart = (clientX, clientY) => {
        isDragging = true;
        startX = clientX;
        startY = clientY;
        models.forEach(model => model.removeAttribute('auto-rotate'));
    };

    const handleMove = (clientX, clientY) => {
        if (!isDragging) return;

        const deltaX = clientX - startX;
        const deltaY = clientY - startY;

        currentTheta -= deltaX * 0.02;
        currentPhi = Math.min(Math.max(currentPhi - deltaY * 0.02, 0), Math.PI);

        updateCameras();

        startX = clientX;
        startY = clientY;
    };

    trigger.addEventListener('mousedown', (e) => handleStart(e.clientX, e.clientY));
    document.addEventListener('mousemove', (e) => handleMove(e.clientX, e.clientY));
    document.addEventListener('mouseup', () => {
        isDragging = false;
        models.forEach(model => model.setAttribute('auto-rotate', ''));
    });

    trigger.addEventListener('touchstart', (e) => {
        handleStart(e.touches[0].clientX, e.touches[0].clientY);
        e.preventDefault();
    });
    document.addEventListener('touchmove', (e) => {
        handleMove(e.touches[0].clientX, e.touches[0].clientY);
        e.preventDefault();
    });
    document.addEventListener('touchend', () => {
        isDragging = false;
        models.forEach(model => model.setAttribute('auto-rotate', ''));
    });
    }

    // adding glossiness to 3D teeth
    document.querySelectorAll('model-viewer').forEach(viewer => {
        viewer.addEventListener('load', () => {
            if (viewer.model && viewer.model.materials) {
                viewer.model.materials.forEach(material => {
                    if (material.pbrMetallicRoughness) {
                        material.pbrMetallicRoughness.setMetallicFactor(0.2);
                        material.pbrMetallicRoughness.setRoughnessFactor(0.1);
                    }
                });
            }
        });
    });

// hero swiper
    let swiperHero;
    document.addEventListener('DOMContentLoaded', function () {
        if (!document.querySelector('[data-swiper=hero]')) return;
        swiperHero = new Swiper('[data-swiper=hero]', {
            speed: 1000,
            slidesPerView: 1,
            spaceBetween: 32,
            allowTouchMove: false,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '[data-swiper=next-hero]',
            },
            a11y: {
                prevSlideMessage: 'Предыдущий слайд',
                nextSlideMessage: 'Следующий слайд',
                paginationBulletMessage: 'Перейти к слайду {{index}}',
            },
            on: {
                slideChange: updateProgress,
                init: updateProgress,
            }
        });
    });

    function updateProgress() {
        if (!swiperHero || swiperHero.realIndex === undefined) return;

        let currentSlideIndex = swiperHero.realIndex + 1;
        let totalSlides = swiperHero.slides.length - swiperHero.loopedSlides * 2;
        let progressWidth = (currentSlideIndex / totalSlides) * 100;

        document.querySelector('[data-swiper=current-hero]').textContent = currentSlideIndex;

        let progressBar = document.querySelector('[data-swiper=hero-bullet-active]');
        if (progressBar) {
            progressBar.style.width = progressWidth + '%';
        }
    }

    if (window.innerWidth <= 767) {
// benefits swiper
        if (document.querySelector('[data-swiper=benefits]')) {
        let swiperBenefits = new Swiper('[data-swiper=benefits]', {
            speed: 800,
            slidesPerView: 1.1,
            spaceBetween: 16,
            allowTouchMove: true,
            loop: false,
            on: {
                init: function () {
                    let paginationItems = $(`[data-swiper-benefits=pagination]`).children();
                    $(paginationItems).find('[data-anim]').removeClass('active');
                    setTimeout(() => {
                        $(paginationItems).eq(0).find('[data-anim]').addClass('active');
                    }, 100);
                },
                slideChange: function () {
                    let paginationItems = $(`[data-swiper-benefits=pagination]`).children();
                    let index = this.realIndex;
                    $(paginationItems).not(`:eq(${index})`).find('[data-anim]').removeClass('active');
                    $(paginationItems).eq(index).find('[data-anim]').addClass('active');
                },
            },
        });
        }

// technology swiper
        if (document.querySelector('[data-swiper=technology]')) {
        let swiperTechnology = new Swiper('[data-swiper=technology]', {
            speed: 800,
            slidesPerView: 1.1,
            spaceBetween: 16,
            allowTouchMove: true,
            loop: false,
            on: {
                init: function () {
                    let paginationItems = $(`[data-swiper-technology=pagination]`).children();
                    $(paginationItems).find('[data-anim]').removeClass('active');
                    setTimeout(() => {
                        $(paginationItems).eq(0).find('[data-anim]').addClass('active');
                    }, 100);
                },
                slideChange: function () {
                    let paginationItems = $(`[data-swiper-technology=pagination]`).children();
                    let index = this.realIndex;
                    $(paginationItems).not(`:eq(${index})`).find('[data-anim]').removeClass('active');
                    $(paginationItems).eq(index).find('[data-anim]').addClass('active');
                },
            },
        });
        }

// gallery swiper
        if (document.querySelector('[data-swiper=gallery]')) {
        let swiperGallery = new Swiper('[data-swiper=gallery]', {
            speed: 800,
            slidesPerView: 1.1,
            spaceBetween: 16,
            allowTouchMove: true,
            loop: false,
            on: {
                init: function () {
                    let paginationItems = $(`[data-swiper-gallery=pagination]`).children();
                    $(paginationItems).find('[data-anim]').removeClass('active');
                    setTimeout(() => {
                        $(paginationItems).eq(0).find('[data-anim]').addClass('active');
                    }, 100);
                },
                slideChange: function () {
                    let paginationItems = $(`[data-swiper-gallery=pagination]`).children();
                    let index = this.realIndex;
                    $(paginationItems).not(`:eq(${index})`).find('[data-anim]').removeClass('active');
                    $(paginationItems).eq(index).find('[data-anim]').addClass('active');
                },
            },
        });
        }
    }

    // specialists swiper
    const specialistsSwipers = [];

    function initializeSpecialistsSwiper(swiperSelector) {
        if (!document.querySelector(swiperSelector)) return;
        let swiper = new Swiper(swiperSelector, {
            speed: 800,
            slidesPerView: 1,
            spaceBetween: 32,
            allowTouchMove: false,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '[data-swiper=next-specialists]',
            },
            a11y: {
                prevSlideMessage: 'Предыдущий слайд',
                nextSlideMessage: 'Следующий слайд',
                paginationBulletMessage: 'Перейти к слайду {{index}}',
            },
            on: {
                init: function () {
                    let paginationItems = $('[data-swiper-specialists="pagination"]').children();
                    paginationItems.find('[data-anim]').removeClass('active');
                    setTimeout(() => {
                        paginationItems.eq(this.realIndex % paginationItems.length).find('[data-anim]').addClass('active');
                    }, 100);
                },
                slideChange: function () {
                    let paginationItems = $('[data-swiper-specialists="pagination"]').children();
                    let index = this.realIndex % paginationItems.length;
                    paginationItems.find('[data-anim]').removeClass('active');
                    paginationItems.eq(index).find('[data-anim]').addClass('active');
                },
            },
        });

        specialistsSwipers.push(swiper);
    }

    initializeSpecialistsSwiper('[data-swiper="specialists-first"]');
    initializeSpecialistsSwiper('[data-swiper="specialists-second"]');

    $('[data-swiper-specialists="pagination"] > div').on('click', function () {
        const index = $(this).index();

        specialistsSwipers.forEach(swiper => {
            swiper.slideToLoop(index, 800);
        });

        const bullets = $('[data-swiper-specialists="pagination"]').children();
        bullets.find('[data-anim]').removeClass('active');
        bullets.eq(index).find('[data-anim]').addClass('active');
    });

    // certificate swiper
    if (document.querySelector('[data-swiper=certificate]')) {
    let swiperCertificate = new Swiper('[data-swiper=certificate]', {
        speed: 800,
        slidesPerView: 4,
        spaceBetween: 16,
        allowTouchMove: true,
        loop: false,
        breakpoints: {
            220: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 4,
            }
        },
        on: {
            init: function () {
                let paginationItems = $('[data-swiper-certificate="pagination"]').children();
                paginationItems.find('[data-anim]').removeClass('active');
                setTimeout(() => {
                    paginationItems.eq(0).find('[data-anim]').addClass('active');
                }, 100);
            },
            slideChange: function () {
                let paginationItems = $('[data-swiper-certificate="pagination"]').children();
                let pagLength = paginationItems.length;
                let activeIndex = this.realIndex % pagLength;

                paginationItems.find('[data-anim]').removeClass('active');
                paginationItems.eq(activeIndex).find('[data-anim]').addClass('active');
            },
        },
    });
    }

    document.querySelectorAll('.swiper-notification').forEach(function (el) {
        el.setAttribute('aria-label', 'Сообщения слайдера');
    });

    // reviews swiper
    if (document.querySelector('[data-swiper=reviews]')) {
    let swiperReviews = new Swiper('[data-swiper=reviews]', {
        speed: 800,
        slidesPerView: 3,
        spaceBetween: 16,
        allowTouchMove: true,
        loop: false,
        breakpoints: {
            220: {
                slidesPerView: 1.1,
            },
            768: {
                slidesPerView: 3,
            }
        },
        on: {
            init: function () {
                let paginationItems = $('[data-swiper-reviews="pagination"]').children();
                paginationItems.find('[data-anim]').removeClass('active');
                setTimeout(() => {
                    paginationItems.eq(0).find('[data-anim]').addClass('active');
                }, 100);
            },
            slideChange: function () {
                let paginationItems = $('[data-swiper-reviews="pagination"]').children();
                let pagLength = paginationItems.length;
                let activeIndex = this.realIndex % pagLength;

                paginationItems.find('[data-anim]').removeClass('active');
                paginationItems.eq(activeIndex).find('[data-anim]').addClass('active');
            },
        },
    });
    }

    // dropdown
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll("[dropdown]").forEach(dropdown => {
            dropdown.querySelectorAll("[data-anim]").forEach(element => {
                element.classList.remove("active");
                if (element.classList.contains("dropdown-list")) {
                    element.style.height = "0px";
                }
            });
        });
    });

    document.addEventListener("click", (event) => {
        const trigger = event.target.closest("[drop-trigger]");
        if (trigger) {
            const dropdown = trigger.closest("[dropdown]");
            if (dropdown) {
                const animElements = dropdown.querySelectorAll("[data-anim]");
                if (dropdown.hasAttribute("dropdown-single")) {
                    document.querySelectorAll("[dropdown-single]").forEach(otherDropdown => {
                        if (otherDropdown !== dropdown) {
                            otherDropdown.querySelectorAll("[data-anim]").forEach(element => {
                                element.classList.remove("active");
                                if (element.classList.contains("dropdown-list")) {
                                    element.style.height = "0px";
                                }
                            });
                        }
                    });
                }
                animElements.forEach(element => {
                    if (element.classList.contains("dropdown-list")) {
                        if (element.classList.contains("active")) {
                            element.classList.remove("active");
                            element.style.height = "0px";
                        } else {
                            element.classList.add("active");
                            const naturalHeight = element.scrollHeight;
                            element.style.height = `${naturalHeight}px`;
                        }
                    } else {
                        element.classList.toggle("active");
                    }
                });
            }
        }
    });

    //dropdown animation
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll('.swiper-notification').forEach(function (el) {
            el.setAttribute('aria-label', 'Сообщения слайдера');
        });
        const dropdowns = document.querySelectorAll("[dropdown-anim]");

        const observerOptions = {
            root: null,
            rootMargin: "0px",
            threshold: 0.2
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        }, observerOptions);

        dropdowns.forEach(dropdown => {
            observer.observe(dropdown);
        });
    });
