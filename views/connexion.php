
<?php
require_once 'bdd/functions.php'; // Fichier contenant la connexion à la base

if (isset($_SESSION["id"])) {
    redirect ('index.php?page=pageUser');
    exit();
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $stmt = $dbh->prepare("SELECT * FROM Users WHERE mail = :mail");
        $stmt->execute([':mail' => $_POST['mail']]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($user && password_verify($_POST['password'], $user['password'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['adresse'] = $user['adresse'];
            $_SESSION['adresse_postal'] = $user['adresse_postal'];
            $_SESSION['mail'] = $user['mail'];

            redirect('index.php?page=accueil');
        } else {
            $error = "Identifiants incorrects.";
        }
    }
}
?>
<div class ="pageConnexion">
    <div class ="connexion">
        <a href="index.php?page=accueil"><img src="assets/images/logo.png" class="logoConnexion" alt="Photo du Site Re-Direction Accueil" ></a>
        <form class="formConnexion" method="POST">
            <label class="labelConnection">E-mail  <input class="mail" type="text" name="mail" placeholder=" Email (obligatoire)" required></label>
            <label class="labelConnection">Mot de passe  <input class="passwd" type="password" name="password" placeholder=" Mot de passe (obligatoire)" required></label>
            <button class ="bottomConnex" type="submit">CONNEXION</button>
            <div class ="buttonConnexion">
                <button class ="bottomConnex"><!--<a href="index.php?page=inscriptionAgence">-->PAS DE COMPTE D'AGENCE?</a></button>
                <button class ="bottomConnex"><a href="index.php?page=inscriptionUser">PAS DE COMPTE UTILISATEUR?</a></button>
            </div> 
        </form>
    </div>
    <img src="https://preview.free3d.com/img/2020/04/2408251409532192372/ujibfo48.jpg" class="presentation" alt="Photo d'un appartement moderne">
</div>