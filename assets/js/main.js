// Système de Carrousel avec 3 seconde de changement

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

document.addEventListener("DOMContentLoaded", function() {
    // Vérifier si le header est présent et visible
    var header = document.querySelector("header");
    
    // Si le header est présent et visible, ajoute un padding-top au body
    if (header && header.offsetParent !== null) {
        document.body.style.paddingTop = "10%";  
    } else {
        document.body.style.paddingTop = "0"; 
    }
});