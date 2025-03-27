<?php
// On inclut le fichier functions.php pour obtenir les fonctions
require_once 'bdd/functions.php';
$annonces = getAnnonces();
?>


<!-- Liste des annonces -->
<ul class="annonce-list">
    <?php foreach ($annonces as $annonce): 
        $premiereImage = explode('??', $annonce['images'])[0]; // Prend la première image
    ?>
        <li class="annonce-item">
            <div class="annonce-container">
                <!-- Image du jeu -->
                <div class="image-container">
                    <img src="<?= htmlspecialchars($premiereImage) ?>" alt="Fiche du jeu <?= htmlspecialchars($annonce['prix']) ?>">
                </div>

                <!-- Détails (Prix, Adresse et Adresse Postale) à droite -->
                <div class="details-container">
                    <p class="annonce-prix"><strong>Prix :</strong> <?= number_format($annonce['prix'], 0, '', ' ') ?>€</p>
                    <p class="annonce-adresse"><strong>Adresse :</strong> <?= htmlspecialchars($annonce['adresse']) ?></p>
                    <p class="annonce-adresse"><strong>Adresse Postale :</strong> <?= htmlspecialchars($annonce['adresse_postal']) ?></p>
                    <button class="annonce-button"> <a href="index.php?page=bien&id=<?= $annonce['id'] ?>">Découvrez le Bien</a></button>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
</ul>