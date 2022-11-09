<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/accueilAdmin.css">
    <link rel="stylesheet" href="../assets/css/utilisateurAdministrateur.css">
    <link rel="stylesheet" href="../assets/css/adminAddClient.css"></link>
    <title>Ajouter un client</title>
</head>
<body>
<nav>
    <img src="../assets/img/logo.png" alt="logo">
    <ul>
        <li><a href="/accueil/admin">Accueil</a></li>
        <li class="hover"><a href="/admin/utilisateur">Utilisateur</a></li>
        <li><a href="#">Tarification</a></li>
        <li><a href="#">Stock</a></li>
        <li ><a href="/admin/interventionPlanning">Intervention</a></li>
        <li><a href="#">Deconnexion</a></li>
    </ul>
</nav>
<main>
    <aside>
        <section class="liste">
            <a href="/admin/utilisateur" class="aListeOptionAdmin"><p>Tableau de bord</p></a>

            <a href="#" class=" aListeOptionAdmin hoverli "><p>Client</p></a>
            <section class="sousListeSection">
                <a class="hoverliSousList" href="#"><p>Ajouter un client</p></a>
                <a href="/admin/editClient"><p>Modifier un client</p></a>
                <a href="/admin/removeClient"><p>Supprimer un client</p></a>
            </section>
            <a href="/admin/addEmploye" class="aListeOptionAdmin"><p>Garage</p></a>
        </section>
    </aside>
    <section class="addClientWindow">
        <section class="sectionCenterAddClient">
            <form>
            <h1>Créer un client</h1>
                <section class="inputAddClient">
                    <h2>Nom du client : </h2>
                    <input type="text">
                </section>
                <section class="inputAddClient">
                    <h2>Prénom du client : </h2>
                    <input type="text">
                </section>
                <section class="inputAddClient">
                    <h2>Age du client : </h2>
                    <input type="text">
                </section>
                <section class="inputAddClient">
                    <h2>Téléphone du client : </h2>
                    <input type="text">
                </section>
                <section class="inputAddClient">
                    <h2>Email du client : </h2>
                    <input type="text">
                </section>
                <input type="submit" class="submitFormAddClient" value="Créer un client">
            </form>
        </section>
    </section>
</main>

</body>
</html>