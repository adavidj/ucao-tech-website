<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents - UCAO TECH Association</title>
    <link rel="icon" href="media/ucaotech.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/document.css">
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
                        
                        <li class="active"><a href="document.php">Documents</a></li>
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

    <!-- Bannière Documents -->
    <section class="documents-banner">
        <div class="container">
            <div class="banner-content">
                <h1>Documents & Ressources</h1>
                <p>Tous les documents officiels et ressources de l'association UCAO TECH</p>
            </div>
        </div>
    </section>

    <!-- Section Recherche et Filtres -->
    <section class="search-filters">
        <div class="container">
            <div class="search-container">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" id="search-input" placeholder="Rechercher un document...">
                    <button id="search-btn">Rechercher</button>
                </div>
                
                <div class="filter-options">
                    <select id="category-filter">
                        <option value="all">Toutes les catégories</option>
                        <option value="statuts">Statuts & Règlements</option>
                        <option value="rapports">Rapports d'activités</option>
                        <option value="proces-verbaux">Procès-verbaux</option>
                        <option value="guides">Guides & Tutoriels</option>
                        <option value="presentations">Présentations</option>
                        <option value="divers">Divers</option>
                    </select>
                    
                    <select id="year-filter">
                        <option value="all">Toutes les années</option>
                        <option value = "2025"> 2025 </option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        
                        
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Documents -->

    <section class="documents-section">
        <div class="container">
            <div class="section-header">
                <h2>Documents Officiels</h2>
                <div class="divider"></div>
                <p>Accédez à tous les documents administratifs et ressources de l'association</p>
            </div>

            <!-- Statistiques des documents -->
            <div class="documents-stats">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="stat-info">
                        <span class="stat-number" id="total-docs">10</span>
                        <span class="stat-label">Documents au total</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-download"></i>
                    </div>
                    <div class="stat-info">
                        <span class="stat-number" id="total-downloads">2</span>
                        <span class="stat-label">Téléchargements</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-info">
                        <span class="stat-number" id="active-users">10</span>
                        <span class="stat-label">Utilisateurs actifs</span>
                    </div>
                </div>
            </div>

            <!-- Grille des documents -->
            <div class="documents-grid" id="documents-container">
                <?php
                // Injection PHP - Données des documents
                $documents = [
                    [
                        'id' => 1,
                        'titre' => 'Statut de l\'Association UCAO TECH',
                        'categorie' => 'statuts',
                        'annee' => '',
                        'type_fichier' => 'pdf',
                        'taille' => '334 Ko',
                        'date_publication' => '',
                        'auteur' => 'Bureau Exécutif',
                        'description' => 'Document officiel définissant les statuts et le règlement intérieur de l\'association UCAO TECH.',
                        'fichier' => 'media/documents/STATUT UCAO TECH.pdf',
                        'telechargements' => 10,
                        'est_important' => true
                    ],
                    [
                        'id' => 2,
                        'titre' => 'Rapport d\'Activités ',
                        'categorie' => 'rapports',
                        'annee' => '',
                        'type_fichier' => 'pdf',
                        'taille' => '',
                        'date_publication' => '',
                        'auteur' => 'Comité de Direction',
                        'description' => 'Rapport complet des activités, réalisations et bilan financier de l\'association pour l\'année 2023.',
                        'fichier' => 'media/documents/',
                        'telechargements' => 10,
                        'est_important' => true
                    ],
                    
                    [
                        'id' => 3,
                        'titre' => 'Guide du Membre UCAO TECH',
                        'categorie' => 'guides',
                        'annee' => '',
                        'type_fichier' => 'pdf',
                        'taille' => '379 Ko',
                        'date_publication' => '2024-01-08',
                        'auteur' => 'Comité d\'Accueil',
                        'description' => 'Guide complet pour les nouveaux membres : fonctionnement, avantages et procédures.',
                        'fichier' => 'media/documents/UCAO TECH ASSOCIATION.pdf',
                        'telechargements' => 10,
                        'est_important' => true
                    ],
                    [
                        'id' => 4,
                        'titre' => 'Présentation UCAO TECH 2024',
                        'categorie' => 'presentations',
                        'annee' => '',
                        'type_fichier' => 'pdf',
                        'taille' => '',
                        'date_publication' => '',
                        'auteur' => 'Bureau Exécutif',
                        'description' => 'Présentation officielle de l\'association pour les événements et partenariats 2024.',
                        'fichier' => 'media/documents/UCAO TECH ASSOCIATION.pdf',
                        'telechargements' => 10,
                        'est_important' => false
                    ],
                    
                    [
                        'id' => 5,
                        'titre' => 'Règlement intérieur UCAO TECH',
                        'categorie' => 'statuts',
                        'annee' => '',
                        'type_fichier' => 'pdf',
                        'taille' => '318 Ko',
                        'date_publication' => '',
                        'auteur' => 'Comité des Clubs',
                        'description' => 'Règlement spécifique régissant le fonctionnement des différents clubs de l\'association.',
                        'fichier' => 'media/documents/REGLEMENT INTERIEUR UCAO TECH.pdf',
                        'telechargements' => 10,
                        'est_important' => true
                    ],

                    [
                        'id' => 6,
                        'titre' => 'Charte Graphique UCAO TECH',
                        'categorie' => 'divers',
                        'annee' => '',
                        'type_fichier' => 'zip',
                        'taille' => '12.5 MB',
                        'date_publication' => '',
                        'auteur' => 'Design Club',
                        'description' => 'Pack complet de la charte graphique : logos, couleurs, polices et templates.',
                        'fichier' => 'media/documents/graphic-ucaotech.zip',
                        'telechargements' => 78,
                        'est_important' => true
                    ],
                    
                    [
                        'id' => 7,
                        'titre' => 'Tutoriel Git & GitHub',
                        'categorie' => 'guides',
                        'annee' => '2022',
                        'type_fichier' => 'pdf',
                        'taille' => '4.2 MB',
                        'date_publication' => '',
                        'auteur' => 'Digital Pro Club',
                        'description' => 'Guide complet pour maîtriser Git et GitHub',
                        'fichier' => 'media/documents/intro-git-github.pdf',
                        'telechargements' => 30,
                        'est_important' => false
                    ],

                    [
                        'id' => 8,
                        'titre' => 'Initiation à HTML 5 et CSS3',
                        'categorie' => 'guides',
                        'annee' => '2013',
                        'type_fichier' => 'pdf',
                        'taille' => '11.2 MB',
                        'date_publication' => '',
                        'auteur' => 'Mathieu Nebra, OC',
                        'description' => 'Pack complet de la charte graphique : logos, couleurs, polices et templates.',
                        'fichier' => 'media/documents/apprenez-a-creer-votre-site-web-avec-html5-et-css3.pdf',
                        'telechargements' => 10,
                        'est_important' => false
                    ],
                    

                    [
                        'id' => 9,
                        'titre' => 'Classroom Projets',
                        'categorie' => 'divers',
                        'annee' => '2024',
                        'type_fichier' => 'pdf',
                        'taille' => '407 Ko',
                        'date_publication' => '',
                        'auteur' => 'Club Digital Pro',
                        'description' => 'Projets',
                        'fichier' => 'media/documents/UCAO Classroom.pdf',
                        'telechargements' => 10,
                        'est_important' => false
                    ],
                    
                ];

                // Fonction pour obtenir l'icône du type de fichier
                function getFileIcon($type) {
                    $icons = [
                        'pdf' => 'fas fa-file-pdf',
                        'docx' => 'fas fa-file-word',
                        'xlsx' => 'fas fa-file-excel',
                        'pptx' => 'fas fa-file-powerpoint',
                        'zip' => 'fas fa-file-archive',
                        'default' => 'fas fa-file'
                    ];
                    return $icons[$type] ?? $icons['default'];
                }

                // Fonction pour obtenir la couleur du type de fichier
                function getFileColor($type) {
                    $colors = [
                        'pdf' => '#e74c3c',
                        'docx' => '#2c5aa0',
                        'xlsx' => '#217346',
                        'pptx' => '#d24726',
                        'zip' => '#f39c12',
                        'default' => '#7f8c8d'
                    ];
                    return $colors[$type] ?? $colors['default'];
                }

                // Affichage des documents
                foreach ($documents as $doc) {
                    $fileIcon = getFileIcon($doc['type_fichier']);
                    $fileColor = getFileColor($doc['type_fichier']);
                    $importantClass = $doc['est_important'] ? 'important' : '';
                    
                    echo '
                    <div class="document-card ' . $importantClass . '" data-category="' . $doc['categorie'] . '" data-year="' . $doc['annee'] . '">
                        ' . ($doc['est_important'] ? '<div class="important-badge"><i class="fas fa-star"></i> Important</div>' : '') . '
                        
                        <div class="document-header">
                            <div class="file-icon" style="color: ' . $fileColor . '">
                                <i class="' . $fileIcon . '"></i>
                            </div>
                            <div class="document-meta">
                                <span class="file-type">.' . strtoupper($doc['type_fichier']) . '</span>
                                <span class="file-size">' . $doc['taille'] . '</span>
                            </div>
                        </div>
                        
                        <div class="document-content">
                            <h3 class="document-title">' . $doc['titre'] . '</h3>
                            <p class="document-description">' . $doc['description'] . '</p>
                            
                            <div class="document-info">
                                <div class="info-item">
                                    <i class="fas fa-calendar"></i>
                                    <span>' . date('d/m/Y', strtotime($doc['date_publication'])) . '</span>
                                </div>
                                <div class="info-item">
                                    <i class="fas fa-user"></i>
                                    <span>' . $doc['auteur'] . '</span>
                                </div>
                                <div class="info-item">
                                    <i class="fas fa-download"></i>
                                    <span>' . $doc['telechargements'] . ' téléchargements</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="document-actions">
                            <a href="' . $doc['fichier'] . '" class="btn-download" data-doc-id="' . $doc['id'] . '" download>
                                <i class="fas fa-download"></i>
                                Télécharger
                            </a>
                            <button class="btn-preview" data-doc-id="' . $doc['id'] . '">
                                <i class="fas fa-eye"></i>
                                Aperçu
                            </button>
                        </div>
                    </div>';
                    
                }
                ?>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <span class="page-dots">...</span>
                <button class="page-btn">Suivant <i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!-- Section Documents Récents -->
    <section class="recent-documents">
        <div class="container">
            <div class="section-header">
                <h2>Documents Récents</h2>
                <div class="divider"></div>
                <p>Les derniers documents ajoutés à la bibliothèque</p>
            </div>

            <div class="recent-grid">
                <?php
                // Trier les documents par date de publication (plus récents d'abord)
                usort($documents, function($a, $b) {
                    return strtotime($b['date_publication']) - strtotime($a['date_publication']);
                });

                // Afficher les 4 documents les plus récents
                $recentDocs = array_slice($documents, 0, 4);
                
                foreach ($recentDocs as $doc) {
                    $fileIcon = getFileIcon($doc['type_fichier']);
                    $fileColor = getFileColor($doc['type_fichier']);
                    
                    echo '
                    <div class="recent-card">
                        <div class="recent-icon" style="color: ' . $fileColor . '">
                            <i class="' . $fileIcon . '"></i>
                        </div>
                        <div class="recent-content">
                            <h4>' . $doc['titre'] . '</h4>
                            <p>' . date('d/m/Y', strtotime($doc['date_publication'])) . '</p>
                            <a href="' . $doc['fichier'] . '" class="recent-link" download>
                                <i class="fas fa-download"></i>
                                Télécharger
                            </a>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Section Upload (Admin seulement) -->
    <?php
    // Simulation de vérification admin
    $isAdmin = true; // À remplacer par une vraie vérification de session
    if ($isAdmin) {
        echo '
        <section class="upload-section">
            <div class="container">
                <div class="upload-container">
                    <h3>Ajouter un nouveau document</h3>
                    <form class="upload-form" id="uploadForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="doc-title">Titre du document *</label>
                                <input type="text" id="doc-title" name="doc-title" required>
                            </div>
                            <div class="form-group">
                                <label for="doc-category">Catégorie *</label>
                                <select id="doc-category" name="doc-category" required>
                                    <option value="">Sélectionnez une catégorie</option>
                                    <option value="statuts">Statuts & Règlements</option>
                                    <option value="rapports">Rapports d\'activités</option>
                                    <option value="proces-verbaux">Procès-verbaux</option>
                                    <option value="guides">Guides & Tutoriels</option>
                                    <option value="presentations">Présentations</option>
                                    <option value="divers">Divers</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="doc-file">Fichier *</label>
                                <input type="file" id="doc-file" name="doc-file" accept=".pdf,.docx,.xlsx,.pptx,.zip" required>
                            </div>
                            <div class="form-group">
                                <label for="doc-description">Description</label>
                                <textarea id="doc-description" name="doc-description" rows="3" placeholder="Brève description du document..."></textarea>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn-upload">
                                <i class="fas fa-upload"></i>
                                Publier le document
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>';
    }
    ?>

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

    <!-- Lien vers les fichiers JavaScript -->
    <script src="js/script.js"></script>
    <script src="js/document.js"></script>
</body>
</html>
