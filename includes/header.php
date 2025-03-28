<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php
        if (isset($_GET['page'])) {
            $page = htmlspecialchars($_GET['page']);

            switch ($page) {
                case 'accueil':
                    echo "Accueil du site Life Immo";
                    break;
                case 'inscriptionUser':
                    echo "Inscription - Life Immo";
                    break;
                case 'inscriptionAgence':
                    echo "Inscription Agence - Life Immo";
                    break;
                case 'annonces':
                    echo "Listes Annonces - Life Immo";
                    break;
                case 'connexion':
                    echo "Connexion - Life Immo";
                    break;  
                case 'bien':
                    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                        require_once "bdd/functions.php";
                        $bien = getAnnoncesById($_GET['id']);
                        echo $bien ? "Fiche du Bien : ".htmlspecialchars($bien['adresse']) : "Bien introuvable - Life Immo";
                    } else {
                        echo "Fiche du Bien : Vide";
                    }
                    break;
                case 'pageUser':
                    echo "Profil Utilisateur - LifeImmo";
                    break;
                case 'pageAgence':
                    echo "Profil Agence - LifeImmo";
                    break;
                default:
                    echo "Page inconnue - Life Immo";
                    break;
            }
        } else {
            echo "Accueil - Life Immo";
        }
        ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
   

    <!-- Fonts Atkinson Import de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class ="container">
            <a href="index.php?page=accueil"><img src="assets/images/logo.png" class="logo" alt="Photo du Site Direction Accueil"></a>
            <ul>
                <li><a href="index.php?page=annonces">Annonces</a></li>
                <li><a href="index.php?page=pageAgence">Agences</a></li>
                <li><a href="index.php?page=connexion">Utilisateur</a></li>
            </ul>
        </div>
        <hr class ="separation"/>
    </header>
    