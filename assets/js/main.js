document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".slide");
    let currentIndex = 0;

    function showNextSlide() {
        slides[currentIndex].style.opacity = 0;
        currentIndex = (currentIndex + 1) % slides.length;
        slides[currentIndex].style.opacity = 1;
    }

    setInterval(showNextSlide, 3000);
});