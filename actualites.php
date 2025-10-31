<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les dernières actualités de l'Association Scientifique UCAO-TECH : événements, projets, séminaires et activités étudiantes.">
    <title>Actualités - Association Scientifique UCAO-TECH</title>
    <link rel="icon" href="media/ucaotech.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Lien vers la feuille de style externe -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/actualites.css">
</head>
<body>
    <!-- Header supérieur -->
    <div class="header-top">
        <div class="container">
            <div class="info-scroll">
                <span class="info-label">Information</span>
                <div class="info-scroll-content">
                    Inscriptions ouvertes pour le prochain séminaire sur l'intelligence artificielle
                    <span>|</span> Date limite: 15 décembre 2023
                    <span>|</span> Résultats du concours d'innovation disponible
                    <span>|</span> Prochain hackathon le 20 janvier 2024
                </div>
            </div>
        </div>
    </div>

    <!-- Header principal -->
    <header class="header-main">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="index.php"><img src="media/UCAO-TECH.png" alt="Logo AS UCAO-TECH"></a>
                </div>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
                <nav>
                    <ul class="nav-menu">
                        <li class="dropdown">
                            <a href="index.php">Accueil <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="ucao-tech.php">UCAO-TECH</a></li>
                                <li><a href="egei.php">EGEI</a></li>
                            </ul>
                        </li>
                        <li><a href="adhesion.php">Adhésion</a></li>
                        <li class="dropdown">
                            <a href="staff.php">Staff <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="anciens.php">Anciens Membres</a></li>
                            </ul>
                        </li>
                        <li><a href="document.php">Documents</a></li>
                        <li><a href="actualites.php">Actualités</a></li>
                        <li><a href="galerie.php">Galerie</a></li>
                        <li class="dropdown">
                            <a href="contact.php">Contact <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="faqs.php">FAQs</a></li>
                            </ul>
                        </li>
                        <li class="search-icon">
                            <i class="fas fa-search"></i>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- ################################### Contenu de la page #################################### -->
    
    <!-- Bannière de la page -->
    <section class="page-banner">
        <div class="container">
            <div class="banner-content">
                <h1>Actualités UCAO-TECH</h1>
                <p>Restez informé des dernières nouvelles, événements et activités de notre association</p>
            </div>
        </div>
    </section>

    <!-- Section Contenu Principal -->
    <main class="actualites-main">
        <div class="container">
            <div class="actualites-layout">
                <!-- Section principale des actualités -->
                <section class="all-actualites">
                    <h2 class="section-title">Toutes les Actualités</h2>
                    
                    <div class="filters">
                        <button class="filter-btn active" data-filter="all">Toutes</button>
                        <button class="filter-btn" data-filter="evenements">Événements</button>
                        <button class="filter-btn" data-filter="projets">Projets</button>
                        <button class="filter-btn" data-filter="seminaires">Séminaires</button>
                        <button class="filter-btn" data-filter="partenariats">Partenariats</button>
                    </div>
                    
                    <div class="actualites-grid">
                        <!-- Actualité 1 -->
                        <article class="actualite-card" data-category="seminaires">
                            <div class="actualite-image">
                                <div class="actualite-date">15 Nov 2023</div>
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Séminaire IA">
                            </div>
                            <div class="actualite-content">
                                <span class="actualite-category">Séminaire</span>
                                <h3 class="actualite-title">Séminaire sur l'Intelligence Artificielle</h3>
                                <p class="actualite-excerpt">Un séminaire exclusif sur les applications de l'IA dans l'industrie moderne avec des experts du secteur.</p>
                                <div class="actualite-meta">
                                    <span><i class="far fa-clock"></i> 2h de lecture</span>
                                    <span><i class="far fa-eye"></i> 245 vues</span>
                                </div>
                                <a href="#" class="actualite-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>
                        
                        <!-- Actualité 2 -->
                        <article class="actualite-card" data-category="evenements">
                            <div class="actualite-image">
                                <div class="actualite-date">5 Nov 2023</div>
                                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Hackathon">
                            </div>
                            <div class="actualite-content">
                                <span class="actualite-category">Événement</span>
                                <h3 class="actualite-title">Hackathon Innovation 2023</h3>
                                <p class="actualite-excerpt">Notre hackathon annuel a réuni plus de 50 participants pour développer des solutions technologiques innovantes.</p>
                                <div class="actualite-meta">
                                    <span><i class="far fa-clock"></i> 3h de lecture</span>
                                    <span><i class="far fa-eye"></i> 312 vues</span>
                                </div>
                                <a href="#" class="actualite-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>
                        
                        <!-- Actualité 3 -->
                        <article class="actualite-card" data-category="partenariats">
                            <div class="actualite-image">
                                <div class="actualite-date">28 Oct 2023</div>
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Partenariat">
                            </div>
                            <div class="actualite-content">
                                <span class="actualite-category">Partenariat</span>
                                <h3 class="actualite-title">Nouveau Partenariat avec TechCorp</h3>
                                <p class="actualite-excerpt">Signature d'un partenariat stratégique avec TechCorp pour des stages et projets collaboratifs.</p>
                                <div class="actualite-meta">
                                    <span><i class="far fa-clock"></i> 4min de lecture</span>
                                    <span><i class="far fa-eye"></i> 189 vues</span>
                                </div>
                                <a href="#" class="actualite-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>
                        
                        <!-- Actualité 4 -->
                        <article class="actualite-card" data-category="seminaires">
                            <div class="actualite-image">
                                <div class="actualite-date">15 Oct 2023</div>
                                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Conférence">
                            </div>
                            <div class="actualite-content">
                                <span class="actualite-category">Séminaire</span>
                                <h3 class="actualite-title">Conférence sur la Cybersécurité</h3>
                                <p class="actualite-excerpt">Une journée dédiée aux enjeux de la cybersécurité avec des experts internationaux.</p>
                                <div class="actualite-meta">
                                    <span><i class="far fa-clock"></i> 5min de lecture</span>
                                    <span><i class="far fa-eye"></i> 276 vues</span>
                                </div>
                                <a href="#" class="actualite-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>
                        
                        <!-- Actualité 5 -->
                        <article class="actualite-card" data-category="projets">
                            <div class="actualite-image">
                                <div class="actualite-date">2 Oct 2023</div>
                                <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Projet Robotique">
                            </div>
                            <div class="actualite-content">
                                <span class="actualite-category">Projet</span>
                                <h3 class="actualite-title">Projet Robotique: Premiers Tests</h3>
                                <p class="actualite-excerpt">L'équipe robotique a réalisé avec succès les premiers tests de son prototype autonome.</p>
                                <div class="actualite-meta">
                                    <span><i class="far fa-clock"></i> 3min de lecture</span>
                                    <span><i class="far fa-eye"></i> 198 vues</span>
                                </div>
                                <a href="#" class="actualite-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>
                        
                        <!-- Actualité 6 -->
                        <article class="actualite-card" data-category="evenements">
                            <div class="actualite-image">
                                <div class="actualite-date">20 Sep 2023</div>
                                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Rentrée">
                            </div>
                            <div class="actualite-content">
                                <span class="actualite-category">Événement</span>
                                <h3 class="actualite-title">Rentrée Universitaire 2023-2024</h3>
                                <p class="actualite-excerpt">Cérémonie d'accueil des nouveaux membres et présentation du programme de l'année.</p>
                                <div class="actualite-meta">
                                    <span><i class="far fa-clock"></i> 4min de lecture</span>
                                    <span><i class="far fa-eye"></i> 324 vues</span>
                                </div>
                                <a href="#" class="actualite-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>
                        
                        <!-- Actualité 7 -->
                        <article class="actualite-card" data-category="projets">
                            <div class="actualite-image">
                                <div class="actualite-date">10 Sep 2023</div>
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Projet IoT">
                            </div>
                            <div class="actualite-content">
                                <span class="actualite-category">Projet</span>
                                <h3 class="actualite-title">Lancement du Projet IoT Smart Campus</h3>
                                <p class="actualite-excerpt">Début du projet d'Internet des Objets pour optimiser la consommation énergétique du campus.</p>
                                <div class="actualite-meta">
                                    <span><i class="far fa-clock"></i> 6min de lecture</span>
                                    <span><i class="far fa-eye"></i> 156 vues</span>
                                </div>
                                <a href="#" class="actualite-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>
                        
                        <!-- Actualité 8 -->
                        <article class="actualite-card" data-category="partenariats">
                            <div class="actualite-image">
                                <div class="actualite-date">25 Août 2023</div>
                                <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Workshop">
                            </div>
                            <div class="actualite-content">
                                <span class="actualite-category">Partenariat</span>
                                <h3 class="actualite-title">Workshop avec Google Developers</h3>
                                <p class="actualite-excerpt">Collaboration avec Google Developers Group pour un workshop sur le développement mobile.</p>
                                <div class="actualite-meta">
                                    <span><i class="far fa-clock"></i> 3min de lecture</span>
                                    <span><i class="far fa-eye"></i> 287 vues</span>
                                </div>
                                <a href="#" class="actualite-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
                    
                    <div class="pagination">
                        <button class="pagination-btn active">1</button>
                        <button class="pagination-btn">2</button>
                        <button class="pagination-btn">3</button>
                        <button class="pagination-btn next">Suivant <i class="fas fa-chevron-right"></i></button>
                    </div>
                </section>
                
                <!-- Sidebar avec actualités récentes -->
                <aside class="sidebar">
                    <div class="recent-actualites">
                        <h3 class="sidebar-title">Actualités Récentes</h3>
                        <div class="recent-list">
                            <div class="recent-item">
                                <div class="recent-image">
                                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Séminaire IA">
                                </div>
                                <div class="recent-content">
                                    <h4>Séminaire sur l'Intelligence Artificielle</h4>
                                    <span class="recent-date">15 Nov 2023</span>
                                </div>
                            </div>
                            
                            <div class="recent-item">
                                <div class="recent-image">
                                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Hackathon">
                                </div>
                                <div class="recent-content">
                                    <h4>Hackathon Innovation 2023</h4>
                                    <span class="recent-date">5 Nov 2023</span>
                                </div>
                            </div>
                            
                            <div class="recent-item">
                                <div class="recent-image">
                                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Partenariat">
                                </div>
                                <div class="recent-content">
                                    <h4>Nouveau Partenariat avec TechCorp</h4>
                                    <span class="recent-date">28 Oct 2023</span>
                                </div>
                            </div>
                            
                            <div class="recent-item">
                                <div class="recent-image">
                                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Conférence">
                                </div>
                                <div class="recent-content">
                                    <h4>Conférence sur la Cybersécurité</h4>
                                    <span class="recent-date">15 Oct 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="newsletter-sidebar">
                        <h3 class="sidebar-title">Newsletter</h3>
                        <p>Ne manquez aucune actualité ! Abonnez-vous à notre newsletter.</p>
                        <form class="sidebar-newsletter-form">
                            <input type="email" placeholder="Votre email" required>
                            <button type="submit">S'abonner</button>
                        </form>
                    </div>
                    
                    <div class="categories-sidebar">
                        <h3 class="sidebar-title">Catégories</h3>
                        <ul class="categories-list">
                            <li><a href="#" data-filter="evenements">Événements <span>12</span></a></li>
                            <li><a href="#" data-filter="projets">Projets <span>8</span></a></li>
                            <li><a href="#" data-filter="seminaires">Séminaires <span>15</span></a></li>
                            <li><a href="#" data-filter="partenariats">Partenariats <span>6</span></a></li>
                            <li><a href="#" data-filter="all">Toutes les actualités <span>41</span></a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </main>

    <!-- Newsletter -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content">
                <h2>Restez informé</h2>
                <p>Abonnez-vous à notre newsletter pour recevoir les dernières actualités et événements de l'association</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Votre adresse email" required>
                    <button type="submit">S'abonner</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <div class="footer-logo">
                        <img src="media/ucaotech.png" alt="Logo AS UCAO-TECH">
                    </div>
                    <div class="footer-slogan">
                        Unis pour la technologie, ensemble vers l'innovation
                    </div>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Menu</h3>
                    <ul class="footer-links">
                        <li><a href="ucao-tech.php">UCAO-TECH</a></li>
                        <li><a href="egei.php">EGEI</a></li>
                        <li><a href="adhesion.php">Adhésion</a></li>
                        <li><a href="document.php">Documents</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Liens rapides</h3>
                    <ul class="footer-links">
                        <li><a href="https://ucaobenin.org/" target="_blank">Site UCAO-UUC</a></li>
                        <li><a href="https://ucaobeninlmd360.odoo.com/admission" target="_blank">Admission UCAO</a></li>
                        <li><a href="https://ucaobenin.org/pages/contact" target="_blank">Contact UCAO</a></li>
                        <li><a href="https://media.ucaobenin.org/" target="_blank">Media UCAO</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul class="footer-links footer-contact">
                        <li><i class="fas fa-phone"></i> (229) 01 41637898</li>
                        <li><i class="fas fa-envelope"></i> ucaotech@gmail.com</li>
                        <li><i class="fas fa-envelope"></i> tech@ucaobenin.org</li>
                        <li><i class="fas fa-map-marker-alt"></i> Lot 246, rue de l'hôpital St Jean</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <span id="current-year"></span> AS UCAO-TECH. Tous droits réservés par le <a href="ucao-tech.php">Digital-Pro</a></p>
            </div>
        </div>
    </footer>

    <!-- Lien vers le fichier JavaScript externe -->
    <script src="js/actualites.js"></script>

</body>
</html>