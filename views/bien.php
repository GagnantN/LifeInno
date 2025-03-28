<?php
// Inclure le fichier functions.php
require_once 'bdd/functions.php';



// Vérifie si un ID est présent dans l'URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $annonces = getAnnoncesById($id);
    $agences = getAgencesById($id);
    $carrousels = getImageByID($id);
    

    if (!$annonces) {
        die("Annonce non trouvé !");
    }
} else {
    die("ID invalide !");
}


?>
<?php var_dump($agences); ?>
<div class="bienImmo">
    <!-- Partie Texte à gauche -->
    <div class="text-container">
        <div class="info-container">
            <p>ADRESSE : <?= htmlspecialchars($annonces['adresse']) ?></p>
            <p>ADRESSE POSTAL : <?= htmlspecialchars($annonces['adresse_postal']) ?></p>
            <br>
        </div>


        <div class="info-container">
            <p>PRIX : <?= number_format($annonces['prix'], 0, '', ' ') ?> €</p>
            <p>PÉRIMÈTRE : <?= htmlspecialchars($annonces['perimetre']) ?> m²</p>
            <br>
        </div>

        <div class="nom-image-container">
            <p>NOM DE L'AGENCE : <?= htmlspecialchars($agences['nom']) ?></p>
            <img src="<?= htmlspecialchars($agences['image']) ?>" alt="Agence">
        </div>

        <?php if (isset($_SESSION["id"])) { ?>
            <form action="index.php?page=ajout_favori" method="POST">
                <input type="hidden" name="id_agences" value="<?= $agences['id']; ?>">
                <button class="contact" type="submit">CONTACT AGENCE</button>
            </form>
        <?php } ?>
    </div>

    <!-- Partie Carrousel à droite -->
    <div class="carousel">
        <?php foreach ($carrousels as $carrousel): ?>
            <?php
            $images = explode("??", $carrousel['images']);
            foreach ($images as $image): ?>
                <div class="slide">
                    <img class="imgCarrousel" src="<?= trim($image) ?>" alt="Game Image">
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</div>

