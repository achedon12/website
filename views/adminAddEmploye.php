<?php

use app\users\Auth;

require_once "assets/php/database/DatabaseManager.php";
require_once "assets/php/managers/UserManager.php";

$userManager = new UserManager(DatabaseManager::getInstance());

if(session_status() !== 2){
    session_start();
}

if(!Auth::isConnected()){
    render("connexion.php");
    return;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Ajouter un employé</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/accueilAdmin.css">
    <link rel="stylesheet" href="../assets/css/utilisateurAdministrateur.css">
    <link rel="stylesheet" href="../assets/css/adminAddClient.css">
    <link rel="shortcut icon" href="../assets/img/logo.png">
</head>
<body>
<nav>
    <img src="../assets/img/logo.png" alt="logo">
    <ul>
        <li><a href="/accueil/admin" >Accueil</a></li>
        <li class="hover"><a href="/admin/utilisateur">Utilisateur</a></li>
        <li><a href="#">Tarification</a></li>
        <li><a href="#">Stock</a></li>
        <li><a href="/admin/interventionPlanning">Intervention</a></li>
        <li><a href="/disconnect">Deconnexion</a></li>
    </ul>
</nav>
<main>
    <aside>
        <section class="liste">
            <a href="/admin/utilisateur" class="aListeOptionAdmin"><p>Tableau de bord</p></a>

            <a href="/admin/addClient" class=" aListeOptionAdmin  "><p>Client</p></a>
            <a href="/admin/addEmploye" class="aListeOptionAdmin hoverli"><p>Garage</p></a>
            <section class="sousListeSection">
                <a class="hoverliSousList" href="/admin/addEmploye"><p>Ajouter un employé</p></a>
                <a href="/admin/editEmploye"><p>Modifier un employé</p></a>
                <a href="/admin/removeEmploye"><p>Supprimer un employé</p></a>
            </section>
        </section>
    </aside>
    <section class="addClientWindow">
        <section class="sectionCenterAddClient">
            <form>
                <h1>Créer un employé</h1>
                <section class="inputAddClient">
                    <h2>Nom de l'employé : </h2>
                    <input type="text">
                </section>
                <section class="inputAddClient">
                    <h2>Prénom de l'employé : </h2>
                    <input type="text">
                </section>
                <section class="inputAddClient">
                    <h2>Age de l'employé : </h2>
                    <input type="text">
                </section>
                <section class="inputAddClient">
                    <h2>Téléphone de l'employé : </h2>
                    <input type="text">
                </section>
                <section class="inputAddClient">
                    <h2>Email de l'employé : </h2>
                    <input type="text">
                </section>
                <section class="inputAddClient">
                    <h2>Rôle de l'employé : </h2>
                    <input type="text">
                </section>
                <input type="submit" class="submitFormAddClient" value="Créer un employé">
            </form>
        </section>
    </section>
</main>

</body>
</html>