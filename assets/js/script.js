document.addEventListener('DOMContentLoaded', function () {

    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(function (question) {

        question.addEventListener('click', function () {

            const currentItem = this.closest('.faq-item');

            // Close other FAQs
            document.querySelectorAll('.faq-item').forEach(function (item) {
                if (item !== currentItem) {
                    item.classList.remove('active');
                }
            });

            // Open / close current FAQ
            currentItem.classList.toggle('active');

        });

    });

});