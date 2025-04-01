let lastScrollTop = 0;

window.addEventListener("scroll", function() {
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        // Scroll vers le bas : cacher la barre de navigation
        document.querySelector("nav").classList.add("hidden");
    } else {
        // Scroll vers le haut : afficher la barre de navigation
        document.querySelector("nav").classList.remove("hidden");
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Éviter les valeurs négatives
});