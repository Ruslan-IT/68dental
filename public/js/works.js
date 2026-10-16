document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.collection__item.mod--works');

    slides.forEach(function (slide) {
        const dragElement = slide.querySelector('.works__work-progressbar');
        const beforeElement = slide.querySelector('.works__img-before');

        if (!dragElement || !beforeElement) {
            return;
        }

        let percent = 50;
        let dragging = false;

        function apply(value) {
            percent = Math.min(100, Math.max(0, value));
            beforeElement.style.width = percent + '%';
            dragElement.style.left = percent + '%';
            dragElement.setAttribute('aria-valuenow', String(Math.round(percent)));
        }

        function percentFromEvent(event) {
            const rect = slide.getBoundingClientRect();
            if (!rect.width) {
                return percent;
            }

            return ((event.clientX - rect.left) / rect.width) * 100;
        }

        function onMove(event) {
            if (!dragging) {
                return;
            }

            event.preventDefault();
            apply(percentFromEvent(event));
        }

        function stop(event) {
            if (!dragging) {
                return;
            }

            dragging = false;
            window.removeEventListener('pointermove', onMove);
            window.removeEventListener('pointerup', stop);
            window.removeEventListener('pointercancel', stop);

            if (event && dragElement.hasPointerCapture(event.pointerId)) {
                dragElement.releasePointerCapture(event.pointerId);
            }
        }

        dragElement.style.touchAction = 'none';
        dragElement.setAttribute('role', 'slider');
        dragElement.setAttribute('aria-label', 'Сравнение до и после');
        dragElement.setAttribute('aria-valuemin', '0');
        dragElement.setAttribute('aria-valuemax', '100');
        dragElement.setAttribute('aria-orientation', 'horizontal');
        apply(50);

        dragElement.addEventListener('pointerdown', function (event) {
            if (event.pointerType === 'mouse' && event.button !== 0) {
                return;
            }

            dragging = true;
            event.preventDefault();

            try {
                dragElement.setPointerCapture(event.pointerId);
            } catch (e) {
            }

            window.addEventListener('pointermove', onMove);
            window.addEventListener('pointerup', stop);
            window.addEventListener('pointercancel', stop);
            apply(percentFromEvent(event));
        });
    });
});
