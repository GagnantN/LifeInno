<?php

require_once 'bdd/functions.php';

// Si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $dbh->prepare("INSERT INTO Users (nom, prenom, adresse, adresse_postal, mail, password) VALUES (:nom, :prenom, :adresse, :adresse_postal, :mail, :password)");
    $stmt->execute([
        ':nom' => $_POST['nom'],
        ':prenom' => $_POST['prenom'],
        ':adresse' => $_POST['adresse'],
        ':adresse_postal' => $_POST['adresse_postal'],
        ':mail' => $_POST['mail'],
        ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ]);

    echo "Connexion Réussi";
    redirect('index.php?page=accueil');
}
?>

<div class="inscription">
    <a href="index.php?page=connexion"><img src="assets/images/logo.png" class="logoInscription" alt="Photo du Site Re-Direction Connexion" ></a>
        <form class="formInscrip" method="POST">
            <label class="labelInscription">NOM<input class="inscrNom" type="text" name="nom" placeholder=" Nom" required></label>
            <label class="labelInscription">PRENOM<input class="inscrPrenom" type="text" name="prenom" placeholder=" Prénom" required></label>
            <label class="labelInscription">ADESSE<input class="inscrAdr" type="text" name="adresse" placeholder=" Adresse" required></label>
            <label class="labelInscription">ADRESSE POSTAL<input class="inscrAdrP" type="text" name="adresse_postal" placeholder=" Adresse Postal" required></label>
            <label class="labelInscription">E-MAIL<input class="inscrMail" type="email" name="mail" placeholder=" Email (obligatoire)" required></label>
            <label class="labelInscription">MOT DE PASSE<input class="inscrPass" type="password" name="password" placeholder=" Mot de passe (obligatoire)" required></label>
            <button class="buttonInscription" type="submit">INSCRIPTION</button>
        </form>
    </div>