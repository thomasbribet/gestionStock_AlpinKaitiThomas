<?php

include("../conf/db_connect.php");

function userVerif()
{
    global $conn;

    if (isset($_POST["username"]) && isset($_POST["inputpassword"])) {

        // On fait une requête à la bdd, et on stocke le résultat dans $result (sous forme de tableau)
        $result = $conn->query('SELECT * FROM users WHERE email="' . $_POST["username"] . '" AND password="' . hash('sha256', $_POST["inputpassword"]) . '";');

        $prenom_db = $conn->query('SELECT prenom FROM users WHERE email="' . $_POST["username"] . '" AND password="' . hash('sha256', $_POST["inputpassword"]) . '";');
        // On parcours le tableau $result grâce à fetch_row(), et on le stocke ce résultat dans $row (qui est un tableau lui aussi)
        $row = $result->fetch_row();

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
userVerif();
