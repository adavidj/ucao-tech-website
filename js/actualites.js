// JavaScript pour la page Actualités

document.addEventListener('DOMContentLoaded', function() {
    // Filtrage des actualités
    const filterBtns = document.querySelectorAll('.filter-btn');
    const actualiteCards = document.querySelectorAll('.actualite-card');
    const categoryLinks = document.querySelectorAll('.categories-list a');
    
    // Filtrage par boutons
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Mettre à jour les boutons actifs
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filtrer les cartes
            actualiteCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
    
    // Filtrage par liens de catégories
    categoryLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const filter = this.getAttribute('data-filter');
            
            // Trouver et déclencher le bouton de filtre correspondant
            filterBtns.forEach(btn => {
                if (btn.getAttribute('data-filter') === filter) {
                    btn.click();
                }
            });
            
            // Faire défiler jusqu'aux actualités
            document.querySelector('.all-actualites').scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
    
    // Pagination
    const paginationBtns = document.querySelectorAll('.pagination-btn');
    
    paginationBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            if (this.classList.contains('active')) return;
            
            // Mettre à jour les boutons actifs
            paginationBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Simuler le chargement de nouvelles actualités
            simulatePageLoad();
        });
    });
    
    function simulatePageLoad() {
        const grid = document.querySelector('.actualites-grid');
        grid.style.opacity = '0.5';
        
        setTimeout(() => {
            grid.style.opacity = '1';
        }, 500);
    }
    
    // Animation au défilement
    function revealOnScroll() {
        const reveals = document.querySelectorAll('.actualite-card, .recent-item, .sidebar > div');
        const windowHeight = window.innerHeight;
        
        reveals.forEach(reveal => {
            const elementTop = reveal.getBoundingClientRect().top;
            if (elementTop < windowHeight - 100) {
                reveal.style.opacity = '1';
                reveal.style.transform = 'translateY(0)';
            }
        });
    }
    
    // Configuration des animations initiales
    const actualiteCardsInitial = document.querySelectorAll('.actualite-card');
    actualiteCardsInitial.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = `opacity 0.6s ease, transform 0.6s ease ${index * 0.1}s`;
    });
    
    const sidebarItems = document.querySelectorAll('.sidebar > div, .recent-item');
    sidebarItems.forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateX(30px)';
        item.style.transition = `opacity 0.6s ease, transform 0.6s ease ${index * 0.1}s`;
    });
    
    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();
    
    // Gestion des formulaires
    const newsletterForms = document.querySelectorAll('.newsletter-form, .sidebar-newsletter-form');
    
    newsletterForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            // Simulation d'envoi
            const button = this.querySelector('button');
            const originalText = button.textContent;
            
            button.textContent = 'Abonnement...';
            button.disabled = true;
            
            setTimeout(() => {
                button.textContent = 'Abonné !';
                button.style.background = 'var(--bleu-nuit)';
                
                setTimeout(() => {
                    button.textContent = originalText;
                    button.disabled = false;
                    button.style.background = '';
                    this.reset();
                }, 2000);
            }, 1500);
        });
    });
    
    // Effet de survol amélioré pour les cartes
    actualiteCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.zIndex = '10';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
    });
    
    // Mise à jour de l'année dans le footer
    const currentYearElement = document.getElementById('current-year');
    if (currentYearElement) {
        currentYearElement.textContent = new Date().getFullYear();
    }
    
    // Recherche (fonctionnalité future)
    const searchIcon = document.querySelector('.search-icon');
    if (searchIcon) {
        searchIcon.addEventListener('click', function() {
            alert('Fonctionnalité de recherche à venir!');
        });
    }
    
    // Chargement progressif des images
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        img.addEventListener('load', function() {
            this.style.opacity = '1';
        });
        
        if (img.complete) {
            img.style.opacity = '1';
        } else {
            img.style.opacity = '0';
            img.style.transition = 'opacity 0.3s ease';
        }
    });
});