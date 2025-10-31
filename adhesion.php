<?php
// adhesion.php - Traitement du formulaire avec email de confirmation amélioré

require __DIR__ . '/phpmailer/src/Exception.php';
require __DIR__ . '/phpmailer/src/PHPMailer.php';
require __DIR__ . '/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$success_message = '';
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $filiere = htmlspecialchars(trim($_POST['filiere']));
    $niveau = htmlspecialchars(trim($_POST['niveau']));
    $motivation = htmlspecialchars(trim($_POST['motivation']));
    $competences = htmlspecialchars(trim($_POST['competences']));

    if (empty($prenom) || empty($nom) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Veuillez remplir tous les champs obligatoires correctement.';
    } else {
        try {
            $mail = new PHPMailer(true);

            // Configuration SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'davidbocossa23@gmail.com';
            $mail->Password = 'pvdr yvxx dcaw atxi';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->CharSet = 'UTF-8';

            // =====================
            // 1. EMAIL POUR LE CLUB
            // =====================
            $mail->setFrom('ucaotech@gmail.com', 'UCAO-TECH');
            $mail->addAddress('ucaotech@gmail.com');
            $mail->addReplyTo($email, $prenom . ' ' . $nom);

            $mail->isHTML(true);
            $mail->Subject = "🔔 Nouvelle demande d'adhésion - " . $prenom . " " . $nom;

            $club_message = "
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset='UTF-8'>
                <style>
                    body { 
                        font-family: 'Segoe UI', Arial, sans-serif; 
                        line-height: 1.6; 
                        color: #333; 
                        background: #f4f4f4;
                        margin: 0;
                        padding: 20px;
                    }
                    .container {
                        max-width: 700px;
                        margin: 0 auto;
                        background: white;
                        border-radius: 10px;
                        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
                        overflow: hidden;
                    }
                    .header {
                        background: linear-gradient(135deg, #1a237e, #283593);
                        color: white;
                        padding: 30px;
                        text-align: center;
                    }
                    .header h1 {
                        margin: 0;
                        font-size: 28px;
                        font-weight: 700;
                    }
                    .content {
                        padding: 40px;
                    }
                    .info-card {
                        background: #f8f9fa;
                        border-left: 4px solid #1a237e;
                        padding: 20px;
                        margin: 20px 0;
                        border-radius: 5px;
                    }
                    .field {
                        margin-bottom: 15px;
                        padding: 10px 0;
                        border-bottom: 1px solid #eee;
                    }
                    .label {
                        font-weight: 700;
                        color: #1a237e;
                        display: inline-block;
                        width: 150px;
                    }
                    .motivation-box {
                        background: #f8f9fa;
                        padding: 15px;
                        border-radius: 5px;
                        margin: 10px 0;
                        border-left: 3px solid #1a237e;
                    }
                    .footer {
                        background: #2c3e50;
                        color: white;
                        padding: 25px;
                        text-align: center;
                        font-size: 14px;
                    }
                    .action-btn {
                        display: inline-block;
                        background: #1a237e;
                        color: white;
                        padding: 12px 25px;
                        text-decoration: none;
                        border-radius: 5px;
                        margin: 10px 5px;
                        font-weight: 600;
                    }
                </style>
            </head>
            <body>
                <div class='container'>
                    <div class='header'>
                        <h1>🎯 Nouvelle Demande d'Adhésion</h1>
                        <p>Une nouvelle candidature a été soumise</p>
                    </div>
                    
                    <div class='content'>
                        <div class='info-card'>
                            <h3 style='margin-top: 0; color: #1a237e;'>📋 Informations du Candidat</h3>
                            <div class='field'>
                                <span class='label'>👤 Nom complet:</span> " . $prenom . " " . $nom . "
                            </div>
                            <div class='field'>
                                <span class='label'>📧 Email:</span> <a href='mailto:" . $email . "'>" . $email . "</a>
                            </div>
                            <div class='field'>
                                <span class='label'>📞 Téléphone:</span> <a href='tel:" . $telephone . "'>" . $telephone . "</a>
                            </div>
                            <div class='field'>
                                <span class='label'>🎓 Filière:</span> " . $filiere . "
                            </div>
                            <div class='field'>
                                <span class='label'>📚 Niveau:</span> " . $niveau . "
                            </div>
                            <div class='field'>
                                <span class='label'>📅 Date:</span> " . date('d/m/Y à H:i') . "
                            </div>
                        </div>
                        
                        <div style='margin: 25px 0;'>
                            <h3 style='color: #1a237e;'>💡 Motivation</h3>
                            <div class='motivation-box'>
                                " . nl2br($motivation) . "
                            </div>
                        </div>
                        
                        <div style='margin: 25px 0;'>
                            <h3 style='color: #1a237e;'>🛠️ Compétences & Intérêts</h3>
                            <div class='motivation-box'>
                                " . (empty($competences) ? "Non spécifié" : nl2br($competences)) . "
                            </div>
                        </div>
                        
                        <div style='text-align: center; margin: 30px 0;'>
                            <a href='mailto:" . $email . "' class='action-btn'>📧 Répondre au candidat</a>
                            <a href='tel:" . $telephone . "' class='action-btn'>📞 Appeler le candidat</a>
                        </div>
                    </div>
                    
                    <div class='footer'>
                        <p><strong>UCAO-TECH - Association Scientifique</strong><br>
                        📍 Lot 246, rue de l'hôpital St Jean<br>
                        📧 ucaotech@gmail.com | 📞 (229) 01 41637898</p>
                    </div>
                </div>
            </body>
            </html>
            ";

            $mail->Body = $club_message;
            $mail->send();

            // =============================
            // 2. EMAIL DE CONFIRMATION USER
            // =============================
            $mail->clearAddresses();
            $mail->addAddress($email);
            $mail->addReplyTo('ucaotech@gmail.com', 'UCAO-TECH');

            $mail->Subject = "✅ Confirmation de votre demande d'adhésion - UCAO-TECH";

            $user_message = "
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset='UTF-8'>
                <style>
                    body { 
                        font-family: 'Segoe UI', Arial, sans-serif; 
                        line-height: 1.6; 
                        color: #333; 
                        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                        margin: 0;
                        padding: 20px;
                    }
                    .container {
                        max-width: 650px;
                        margin: 0 auto;
                        background: white;
                        border-radius: 15px;
                        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
                        overflow: hidden;
                    }
                    .header {
                        background: linear-gradient(135deg, #1a237e, #283593);
                        color: white;
                        padding: 40px 30px;
                        text-align: center;
                    }
                    .header h1 {
                        margin: 0 0 10px 0;
                        font-size: 32px;
                        font-weight: 800;
                    }
                    .header p {
                        margin: 0;
                        opacity: 0.9;
                        font-size: 18px;
                    }
                    .content {
                        padding: 40px;
                    }
                    .welcome-section {
                        text-align: center;
                        margin-bottom: 30px;
                    }
                    .welcome-icon {
                        font-size: 48px;
                        margin-bottom: 20px;
                    }
                    .steps {
                        background: #f8f9fa;
                        padding: 25px;
                        border-radius: 10px;
                        margin: 25px 0;
                        border-left: 5px solid #1a237e;
                    }
                    .step {
                        display: flex;
                        align-items: flex-start;
                        margin-bottom: 20px;
                        padding: 15px;
                        background: white;
                        border-radius: 8px;
                        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
                    }
                    .step-number {
                        background: #1a237e;
                        color: white;
                        width: 30px;
                        height: 30px;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-weight: bold;
                        margin-right: 15px;
                        flex-shrink: 0;
                    }
                    .step-content h4 {
                        margin: 0 0 8px 0;
                        color: #1a237e;
                    }
                    .step-content p {
                        margin: 0;
                        color: #666;
                    }
                    .summary {
                        background: #e3f2fd;
                        padding: 20px;
                        border-radius: 8px;
                        margin: 25px 0;
                    }
                    .summary-item {
                        display: flex;
                        justify-content: space-between;
                        padding: 8px 0;
                        border-bottom: 1px solid #bbdefb;
                    }
                    .summary-label {
                        font-weight: 600;
                        color: #1a237e;
                    }
                    .cta-section {
                        text-align: center;
                        margin: 30px 0;
                        padding: 25px;
                        background: linear-gradient(135deg, #1a237e, #283593);
                        color: white;
                        border-radius: 10px;
                    }
                    .cta-btn {
                        display: inline-block;
                        background: white;
                        color: #1a237e;
                        padding: 15px 30px;
                        text-decoration: none;
                        border-radius: 8px;
                        font-weight: 700;
                        margin: 10px;
                        transition: transform 0.3s ease;
                    }
                    .cta-btn:hover {
                        transform: translateY(-2px);
                    }
                    .footer {
                        background: #2c3e50;
                        color: white;
                        padding: 30px;
                        text-align: center;
                        font-size: 14px;
                    }
                    .social-links {
                        margin: 20px 0;
                    }
                    .social-links a {
                        color: white;
                        margin: 0 10px;
                        text-decoration: none;
                        font-size: 18px;
                    }
                </style>
            </head>
            <body>
                <div class='container'>
                    <div class='header'>
                        <h1>UCAO-TECH</h1>
                        <p>Confirmation de votre demande d'adhésion</p>
                    </div>
                    
                    <div class='content'>
                        <div class='welcome-section'>
                            <div class='welcome-icon'></div>
                            <h2 style='color: #1a237e; margin-bottom: 10px;'>Bonjour " . $prenom . " " . $nom . " !</h2>
                            <p style='font-size: 18px; color: #666;'>Nous avons bien reçu votre demande d'adhésion et nous vous en remercions.</p>
                        </div>
                        
                        <div class='steps'>
                            <h3 style='color: #1a237e; text-align: center; margin-bottom: 25px;'>📋 Prochaines Étapes</h3>
                            
                            <div class='step'>
                                <div class='step-number'>1</div>
                                <div class='step-content'>
                                    <h4>Examen de votre candidature</h4>
                                    <p>Notre équipe va étudier votre profil sous 24-48 heures</p>
                                </div>
                            </div>
                            
                            <div class='step'>
                                <div class='step-number'>2</div>
                                <div class='step-content'>
                                    <h4>Entretien de motivation</h4>
                                    <p>Nous vous contacterons pour planifier un entretien personnalisé</p>
                                </div>
                            </div>
                            
                            <div class='step'>
                                <div class='step-number'>3</div>
                                <div class='step-content'>
                                    <h4>Intégration officielle</h4>
                                    <p>Vous recevrez votre carte de membre et accéderez à tous les avantages</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class='summary'>
                            <h3 style='color: #1a237e; margin-top: 0;'>📝 Récapitulatif de votre demande</h3>
                            <div class='summary-item'>
                                <span class='summary-label'>Filière :</span>
                                <span>" . $filiere . "</span>
                            </div>
                            <div class='summary-item'>
                                <span class='summary-label'>Niveau :</span>
                                <span>" . $niveau . "</span>
                            </div>
                            <div class='summary-item'>
                                <span class='summary-label'>Téléphone :</span>
                                <span>" . $telephone . "</span>
                            </div>
                            <div class='summary-item'>
                                <span class='summary-label'>Date :</span>
                                <span>" . date('d/m/Y à H:i') . "</span>
                            </div>
                        </div>
                        
                        <div class='cta-section'>
                            <h3 style='margin-top: 0;'>🚀 Prêt à innover avec nous ?</h3>
                            <p>Rejoignez notre communauté de passionnés de technologie</p>
                            <a href='mailto:ucaotech@gmail.com' class='cta-btn'>📧 Nous contacter</a>
                            <a href='https://votresite.com' class='cta-btn'>🌐 Visiter notre site</a>
                        </div>
                    </div>
                    
                    <div class='footer'>
                        <div class='social-links'>
                            <a href='#'>📘 Facebook</a>
                            <a href='#'>📷 Instagram</a>
                            <a href='#'>💼 LinkedIn</a>
                        </div>
                        <p><strong>UCAO-TECH - Association Scientifique</strong><br>
                        📍 Lot 246, rue de l'hôpital St Jean, Cotonou<br>
                        📧 <a href='mailto:ucaotech@gmail.com' style='color: #4fc3f7;'>ucaotech@gmail.com</a> | 
                        📞 <a href='tel:+2290141637898' style='color: #4fc3f7;'>(229) 01 41637898</a></p>
                        <p style='margin-top: 15px; opacity: 0.8; font-size: 12px;'>
                            Cet email a été envoyé automatiquement. Merci de ne pas y répondre.
                        </p>
                    </div>
                </div>
            </body>
            </html>
            ";

            $mail->Body = $user_message;
            $mail->send();

            $success_message = '🎉 Votre demande a été envoyée avec succès ! Vous recevrez un email de confirmation détaillé dans quelques minutes.';
        } catch (Exception $e) {
            $error_message = "❌ Erreur lors de l'envoi: " . $e->getMessage();
            error_log("Erreur PHPMailer: " . $e->getMessage());
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adhésion - Association Scientifique</title>
    <link rel="icon" href="media/ucaotech.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Lien vers la feuille de style externe -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/adhesion.css">
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
                    <!-- Logo temporaire - à remplacer par le vrai logo -->
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


    <!-- Section Contenu Principal -->
    <section class="adhesion-section">
        <div class="adhesion-container">
            <!-- En-tête Hero -->
            <div class="adhesion-hero">
                <h1>Prêt à Nous Rejoindre ?</h1>
                <div class="adhesion-section">
                    <div class="container">
                        <p class="typing-animation">Ne manquez pas cette opportunité de faire partie d'une communauté technologique dynamique et innovante</p>
                    </div>
                </div>
                <div class="cta-buttons">
                    <a href="#formulaire-section" class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                        Adhérer Maintenant
                    </a>
                    <a href="contact.php" class="btn btn-secondary">
                        <i class="fas fa-question-circle"></i>
                        Nous Contacter
                    </a>
                </div>
            </div>

            <!-- Section Avantages -->
            <div class="avantages-section">
                <div class="section-title">
                    <h2>Pourquoi Nous Rejoindre ?</h2>
                    <p>Découvrez tous les avantages d'être membre d'UCAO-TECH</p>
                </div>
                <div class="avantages-grid">
                    <div class="avantage-card">
                        <div class="avantage-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h3>Réseau Professionnel</h3>
                        <p>Connectez-vous avec des passionnés de technologie et des professionnels du secteur</p>
                    </div>
                    <div class="avantage-card">
                        <div class="avantage-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Projets Innovants</h3>
                        <p>Participez à des projets concrets et développez vos compétences techniques</p>
                    </div>
                    <div class="avantage-card">
                        <div class="avantage-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Formations Exclusives</h3>
                        <p>Bénéficiez de workshops et formations avec des experts du domaine</p>
                    </div>
                    <!-- <div class="avantage-card">
                        <div class="avantage-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h3>Hackathons & Compétitions</h3>
                        <p>Participez à des événements compétitifs et montrez votre talent</p>
                    </div>
                    <div class="avantage-card">
                        <div class="avantage-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>Opportunités Professionnelles</h3>
                        <p>Accédez à des offres de stage et d'emploi en partenariat avec nos entreprises</p>
                    </div> -->
                    <div class="avantage-card">
                        <div class="avantage-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Communauté Active</h3>
                        <p>Rejoignez une communauté dynamique et bienveillante d'étudiants passionnés</p>
                    </div>
                </div>
            </div>


            <!-- Section Tarifs -->
            <div class="tarifs-section">
                <div class="section-title">
                    <h2>Conditions d'Adhésion</h2>
                    <p>En rejoignant UCAO-TECH, vous investissez dans votre avenir et celui de la communauté technologique.</p>
                </div>
                <div class="tarifs-grid">
                    <div class="tarif-card">
                        <div class="tarif-type">Étudiant UCAO-EGEI</div>
                        <div class="tarif-prix">200 FCFA<span>/séance</span></div>
                        <ul class="tarif-features">
                            <li>Toute demande d’admission implique l’adhésion sans réserve aux dispositions statutaires et aux règlement intérieur de l’Association</li>
                            <li>Accès à tous les événements</li>
                            <li>Participation aux workshops</li>
                            <li>Support technique de base</li>
                            <li>Certificat de participation</li>
                            <li>Participation aux projets</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Section Formulaire -->
        <div id="formulaire-section" class="formulaire-section">
            <div class="form-header">
                <h2>Formulaire d'Adhésion</h2>
                <p>Remplissez ce formulaire pour rejoindre l'association UCAO-TECH</p>

                <?php if (!empty($success_message)): ?>
                    <div class="alert alert-success" style="background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 20px 0; border: 1px solid #c3e6cb;">
                        <i class="fas fa-check-circle"></i> <?php echo $success_message; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($error_message)): ?>
                    <div class="alert alert-error" style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 20px 0; border: 1px solid #f5c6cb;">
                        <i class="fas fa-exclamation-circle"></i> <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- Modifiez votre formulaire pour inclure les name attributes -->
            <form id="adhesion-form" method="POST" action="">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="prenom">Prénom *</label>
                        <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Jean" required>
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom *</label>
                        <input type="text" id="nom" name="nom" class="form-control" placeholder="Dupont" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone *</label>
                        <input type="tel" id="telephone" name="telephone" class="form-control" placeholder="(+229)" required>
                    </div>
                    <div class="form-group">
                        <label for="filiere">Filière *</label>
                        <select id="filiere" name="filiere" class="form-control form-select" required>
                            <option value="">Sélectionnez votre filière</option>
                            <option value="informatique">Informatique Industriel & Maintenance (IIM)</option>
                            <option value="telecom">Génie Télécoms & TICs (GTTICs)</option>
                            <option value="genie">Electrotechnique (ELT)</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="niveau">Niveau d'études *</label>
                        <select id="niveau" name="niveau" class="form-control form-select" required>
                            <option value="">Sélectionnez votre niveau</option>
                            <option value="licence1">Licence 1</option>
                            <option value="licence2">Licence 2</option>
                            <option value="licence3">Licence 3</option>
                            <option value="master1">Master 1</option>
                            <option value="master2">Master 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="motivation">Motivation *</label>
                    <textarea id="motivation" name="motivation" class="form-control" rows="5" placeholder="Decriver ici votre motiation " required></textarea>
                </div>
                <div class="form-group">
                    <label for="competences">Compétences & Intérêts</label>
                    <textarea id="competences" name="competences" class="form-control" rows="3" placeholder="Vos compétences et Intérêts"></textarea>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="reglement" required>
                    <label for="reglement"><a href="document.php">J'accepte le règlement intérieur du club et m'engage à respecter les valeurs d'UCAO-TECH </a></label>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="newsletter">
                    <label for="newsletter">Je souhaite recevoir la newsletter et les informations sur les événements</label>
                </div>
                <div class="form-submit">
                    <button type="submit" class="btn-submit">
                        <i class="fas fa-paper-plane"></i>
                        Soumettre ma candidature
                    </button>
                </div>
            </form>
        </div>
        <!-- Section CTA -->
        <div class="cta-section">
            <div class="cta-content">
                <h2></h2>
                <p></p>

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
                        Unis pour la technologie, ensemble vers l'innovation!
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
    <script src="js/script.js"></script>
    <script src="js/adhesion.js"></script>
</body>

</html>