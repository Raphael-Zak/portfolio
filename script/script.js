document.addEventListener('DOMContentLoaded', function() {
    function checkVisibility() {
        const elements = document.querySelectorAll('.reveal, .checkpoint');
        const windowHeight = window.innerHeight;
        const triggerBottom = windowHeight * 0.8;
        
        elements.forEach((element, index) => {
            const elementTop = element.getBoundingClientRect().top;
            
            if (elementTop < triggerBottom) {
                if (element.classList.contains('checkpoint')) {
                    setTimeout(() => {
                        element.classList.add('active');
                    }, index * 200);
                } else {
                    element.classList.add('active');
                }
            }
        });
    }
    
    window.addEventListener('load', checkVisibility);
    window.addEventListener('scroll', checkVisibility);
    
    let isScrolling;
    window.addEventListener('scroll', function() {
        window.clearTimeout(isScrolling);
        isScrolling = setTimeout(checkVisibility, 100);
    });
    
    let navbar = document.querySelector('nav');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset <= 200) {
            navbar.classList.remove('hidden');
        } else {
            navbar.classList.add('hidden');
        }
    });
    
    // Ajouter une zone sensible de 20px pour afficher la navbar
    let hoverZone = document.createElement('div');
    hoverZone.style.position = 'fixed';
    hoverZone.style.top = '0';
    hoverZone.style.left = '0';
    hoverZone.style.width = '100%';
    hoverZone.style.height = '20px';
    hoverZone.style.zIndex = '1000';
    hoverZone.style.background = 'transparent';
    document.body.appendChild(hoverZone);
    
    hoverZone.addEventListener('mouseenter', function() {
        navbar.classList.remove('hidden');
    });
    
    navbar.addEventListener('mouseleave', function() {
        if (window.pageYOffset > 200) {
            navbar.classList.add('hidden');
        }
    });
});
