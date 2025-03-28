<?php
session_start(); // Démarrer la session si ce n'est pas déjà fait

// Inclure la connexion à la base de données
require_once 'bdd/functions.php'; 

// Vérifier si la connexion a bien été établie
if (!isset($dbh)) {
    die("Erreur : connexion à la base de données non établie.");
}

// Exemple de requête SQL
$stmt = $dbh->prepare("SELECT * FROM Agences_users WHERE id_users = :id_users");
$stmt->bindValue(':id_users', $_SESSION["id"], PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($result);


// Vérification de l'utilisateur connecté
if (!isset($_SESSION["id"])) {
    die("Erreur : utilisateur non authentifié !");
}

if (!isset($_POST["id_agences"]) || empty($_POST["id_agences"])) {
    die("Erreur : aucune agence sélectionnée !");
}

$id_users = intval($_SESSION["id"]);
$id_agences = intval($_POST["id_agences"]);

// Vérifier si l'annonce est déjà en favoris
$stmt = $dbh->prepare("SELECT id FROM Agences_users WHERE id_users = :id_users AND id_agences = :id_agences");
$stmt->bindValue(':id_users', $id_users, PDO::PARAM_INT);
$stmt->bindValue(':id_agences', $id_agences, PDO::PARAM_INT);
$stmt->execute();
$contact = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$contact) {
    $stmt = $dbh->prepare("INSERT INTO Agences_users (id_users, id_agences) VALUES (:id_users, :id_agences)");
    $stmt->bindValue(':id_users', $id_users, PDO::PARAM_INT);
    $stmt->bindValue(':id_agences', $id_agences, PDO::PARAM_INT);

    if (!$stmt->execute()) {
        print_r($stmt->errorInfo());
        exit();
    }
}

// Redirection après insertion réussie
header("Location: index.php?page=annonces&id=" . $id_agences);
exit();
?>


