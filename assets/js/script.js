    document.addEventListener('DOMContentLoaded', function () {

    const sliders = document.querySelectorAll('.before-after-wrapper');

    sliders.forEach(function (slider) {

        const range = slider.querySelector('.before-after-range');
        const beforeImage = slider.querySelector('.before-image');
        const divider = slider.querySelector('.before-after-divider');

        if (!range || !beforeImage || !divider) {
            return;
        }

        function updateSlider() {

            const value = range.value;

            // Before image width
            beforeImage.style.width = value + '%';

            // Divider position
            divider.style.left = value + '%';
        }

        range.addEventListener('input', updateSlider);

        // Initial position
        updateSlider();

    });

});
    