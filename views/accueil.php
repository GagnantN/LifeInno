<?php
// Inclure le fichier functions.php
require_once '../bdd/functions.php';


// Vérifie si un ID est présent dans l'URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $jeux = getJeuById($id);
    $carrousels = getImageByID($id);
    

    if (!$jeux) {
        die("Jeu non trouvé !");
    }
} else {
    die("ID invalide !");
}
?>


<section class ="carrousel">

<?php foreach ($carrousels as $carrousel): ?>
        <?php
        // Séparer les images
        $images = explode("??", $carrousel['images']);
        foreach ($images as $image): ?>
            <div class="slide">
                <img class="imgCarrousel" src="<?= trim($image) ?>" alt="Game Image">
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>

</section>