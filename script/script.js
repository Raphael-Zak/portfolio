document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour vérifier la visibilité des éléments
    function checkVisibility() {
        const elements = document.querySelectorAll('.reveal, .checkpoint');
        const windowHeight = window.innerHeight;
        const triggerBottom = windowHeight * 0.8; // Déclenche quand l'élément est à 80% de la fenêtre
        
        elements.forEach((element, index) => {
            const elementTop = element.getBoundingClientRect().top;
            
            if (elementTop < triggerBottom) {
                // Pour les éléments de la timeline, on ajoute un délai
                if (element.classList.contains('checkpoint')) {
                    setTimeout(() => {
                        element.classList.add('active');
                    }, index * 200); // 200ms de délai entre chaque élément
                } else {
                    element.classList.add('active');
                }
            }
        });
    }
    
    // Vérifier au chargement et lors du scroll
    window.addEventListener('load', checkVisibility);
    window.addEventListener('scroll', checkVisibility);
    
    // Vérifier aussi toutes les 300ms pendant le scroll pour plus de fluidité
    let isScrolling;
    window.addEventListener('scroll', function() {
        window.clearTimeout(isScrolling);
        isScrolling = setTimeout(checkVisibility, 100);
    });
    
    // Animation pour la navbar qui disparaît/reapparaît au scroll
    let lastScroll = 0;
    const navbar = document.querySelector('nav');
    
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll <= 0) {
            navbar.classList.remove('hidden');
            return;
        }
        
        if (currentScroll > lastScroll && !navbar.classList.contains('hidden')) {
            // Scroll vers le bas
            navbar.classList.add('hidden');
        } else if (currentScroll < lastScroll && navbar.classList.contains('hidden')) {
            // Scroll vers le haut
            navbar.classList.remove('hidden');
        }
        
        lastScroll = currentScroll;
    });
});