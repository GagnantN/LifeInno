<?php

// Je récupère la page où je suis
$page = $_GET['page'] ?? 'accueil';

// Inclusion de l'Header
include('includes/header.php');

?>

<!-- Ajout d'une classe sur <body> en fonction de la page -->
<body class="page-<?php echo htmlspecialchars($page); ?>">

<?php
// Chemin du fichier à inclure
$pageFile = __DIR__ . '/views/' . $page . '.php';

// Vérifier si le fichier de la page demandée existe
if (file_exists($pageFile)) {
    include($pageFile); // Charger le contenu de la page demandée
} else {
    echo "<p>La page demandée n'existe pas.</p>"; // Message d'erreur si la page n'existe pas
}

// Inclusion du footer
include('includes/footer.php');
?>
