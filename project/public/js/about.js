document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        item.addEventListener('click', () => {
            const answer = item.querySelector('.faq-answer');
            const icon = item.querySelector('.faq-question i');
            const isVisible = answer.style.display === 'block';

            gsap.to(answer, {
                height: isVisible ? 0 : 'auto',
                display: isVisible ? 'none' : 'block',
                duration: 0.3
            });

            gsap.to(icon, {
                rotate: isVisible ? 0 : 180,
                duration: 0.3
            });
        });
    });
});
