document.addEventListener("scroll", function () {
    const card = document.querySelector('.glass-card');
    if (window.scrollY > 50) {
        card.classList.add('scrolled');
    } else {
        card.classList.remove('scrolled');
    }
});