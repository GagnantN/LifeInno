
<?php
//require_once '../bdd/functions.php'; // Fichier contenant la connexion à la base

// if (isset($_SESSION["id_user"])) {
//     redirect ('index.php?page=PageUser');
//     exit();
// } else {
//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//         $stmt = $dbh->prepare("SELECT * FROM USER WHERE mail = :mail");
//         $stmt->execute([':mail' => $_POST['mail']]);
//         $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
//         if ($user && password_verify($_POST['password'], $user['password'])) {
//             $_SESSION['id_user'] = $user['id'];
//             $_SESSION['nom'] = $user['nom'];
//             $_SESSION['prenom'] = $user['prenom'];
//             $_SESSION['mail'] = $user['mail'];
//             $_SESSION['pseudo'] = $user['pseudo'];
//             $_SESSION['image_profil'] = $user['image_profil'];

//             redirect('index.php?page=Accueil');
//         } else {
//             $error = "Identifiants incorrects.";
//         }
//     }
// }
?>
<div class ="pageConnexion">
    <div class ="connexion">
        <a href="index.php?page=accueil"><img src="assets/images/logo.png" class="logoConnexion" alt="Photo du Site Direction Accueil" ></a>
        <form action="POST">
            <label>E-mail  <input class="mail" type="text" name="mail" placeholder="Email (obligatoire)" required></label>
            <label>Mot de passe  <input class="passwd" type="password" name="password" placeholder="Mot de passe (obligatoire)" required></label>
            <div class ="buttonConnexion">
                <button type="submit">CONNEXION</button>
                <button><a href="index.php?page=inscription">PAS DE COMPTE ?</a></button>
            </div> 
        </form>
    </div>
    <img src="https://preview.free3d.com/img/2020/04/2408251409532192372/ujibfo48.jpg" class="presentation" alt="Photo d'un appartement moderne">
</div>