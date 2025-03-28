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

$id_users = $_SESSION["id"];
$id_agences = $_POST["id_agences"];

// Préparer la requête avec des marqueurs nommés
$stmt = $dbh->prepare("DELETE FROM Agences_users WHERE id_users = :id_users AND id_agences = :id_agences");
$stmt->bindValue(':id_users', $id_users, PDO::PARAM_INT);
$stmt->bindValue(':id_agences', $id_agences, PDO::PARAM_INT);
$stmt->execute();

header("Location: index.php?page=pageUser");
exit();
?>