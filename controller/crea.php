<?php

include("../conf/db_connect.php");

function userCrea()
{
    global $conn;

    if (isset($_POST["username"]) && isset($_POST["inputpassword"]) && isset($_POST["nom"]) && isset($_POST["prenom"])) {

        // On fait une requête à la bdd, et on stocke le résultat dans $result (sous forme de tableau)
        $conn->query('INSERT INTO ');

        // On parcours le tableau $result grâce à fetch_row(), et on le stocke ce résultat dans $row (qui est un tableau lui aussi)
        

        // On vérifie si le tableau $row est vide ( grâce à empty() ) => on vérifie donc si les données (entrées dans le formulaire de connexion) sont présentes dans la bdd
        if (empty($row)) {
            // si $row est vide, on redirige vers la page d'accueil
            header("Location: ../index.php");
        } else {
            session_start();
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["inputpassword"] = $_POST["inputpassword"];
            header("Location: ../connected.php");
        }
    }
}

// On éxécute la fonction de vérification
userCrea();
