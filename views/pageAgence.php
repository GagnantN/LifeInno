<?php
session_start(); // Démarrer la session si ce n'est pas déjà fait

// Inclure la connexion à la base de données
require_once 'bdd/functions.php'; 

// Vérifier si la connexion a bien été établie
if (!isset($dbh)) {
    die("Erreur : connexion à la base de données non établie.");
}

if (!isset($_SESSION["id"])) {
    header("Location: index.php?page=accueil");
    exit();
} 

$annonces = getAnnonces();

$user_id = $_SESSION["id"];
$nom = $_SESSION["nom"];
$prenom = $_SESSION["prenom"];
$adresse = $_SESSION["adresse"];
$adresse_postal = $_SESSION["adresse_postal"];

$annonces = getAnnoncesFavoris($user_id, $dbh);
?>



    <!-- Conteneur du profil (image + bouton) -->
    <!-- <div class="profile-container">
        <button class="deconnexion"><a href="index.php?page=logout">Déconnexion</a></button>
    </div> -->

    <!-- Nettoyage du float -->
    <!-- <div class="descriptionProfil">

        <p>Bienvenue : <?php echo htmlspecialchars($nom . " " . $prenom); ?> !</p>
        <p>Vous habitez au : <?php echo htmlspecialchars($adresse . " " . $adresse_postal); ?>.</p>

        <p class="favoris">Annonces mis en favoris :</p>
    </div> -->


<!-- Liste des annonces -->
<!-- <ul class="annonce-list">
        <?php if (empty($annonces)): ?>
            <p>Aucune annonce mise en favoris.</p>
        <?php else: ?>
            <?php foreach ($annonces as $annonce): 
                $premiereImage = explode('??', $annonce['images'])[0]; // Prend la première image
            ?>
                <li class="annonce-item">
                    <div class="annonce-container"> -->
                        <!-- Image du bien -->
                        <!-- <div class="image-container">
                            <img src="<?= htmlspecialchars($premiereImage) ?>" alt="Fiche du jeu <?= htmlspecialchars($annonce['prix']) ?>">
                        </div> -->

                        <!-- Détails -->
                        <!-- <div class="details-container">
                            <p class="annonce-prix"><strong>Prix :</strong> <?= number_format($annonce['prix'], 0, '', ' ') ?> €</p>
                            <p class="annonce-adresse"><strong>Adresse :</strong> <?= htmlspecialchars($annonce['adresse']) ?></p>
                            <p class="annonce-adresse"><strong>Adresse Postale :</strong> <?= htmlspecialchars($annonce['adresse_postal']) ?></p>
                            <button class="annonce-button"> <a href="index.php?page=bien&id=<?= $annonce['id'] ?>">Découvrez le Bien</a></button>
                            <form class="annonce-button" action="index.php?page=supprimer" method="POST">
                                <input type="hidden" name="id_agences" value="<?php echo $annonce['id']; ?>">
                                <button class="suppr-button" type="submit">Supprimer le Favoris</button>
                            </form>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul> -->

    <h1>UNE MISE A JOUR FUTUR ARRIVERA</h1>
    <h1>BIENTOT</h1>
