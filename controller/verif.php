<?php

include("../conf/db_connect.php");

function userVerif()
{
    global $conn;

    // On fait une requête à la bdd, et on stocke le résultat dans $result (sous forme de tableau)
    $result = $conn->query('SELECT * FROM users WHERE email="' . $_POST["username"] . '" AND password="' . $_POST["inputpassword"] . '";');

    // On parcours le tableau $result grâce à fetch_row(), et on le stocke ce résultat dans $row (qui est un tableau lui aussi)
    $row = $result->fetch_row();

    // On vérifie si le tableau $row est vide ( grâce à empty() ) => on vérifie donc si les données (entrées dans le formulaire de connexion) sont présentes dans la bdd
    if (empty($row)) {
        echo "pas ok";
        // si $row est vide, on redirige vers la page d'accueil
        header("Location: ../index.php");
    } else {
        echo "ok";
    }
}

// On éxécute la fonction de vérification
userVerif();
