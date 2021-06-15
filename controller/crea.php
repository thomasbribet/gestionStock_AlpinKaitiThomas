<?php

include("../conf/db_connect.php");

function userCrea()
{
    global $conn;

    if (isset($_POST["username"]) && isset($_POST["inputpassword"]) && isset($_POST["nom"]) && isset($_POST["prenom"])) {

        // On fait une requête à la bdd
        $conn->query('INSERT INTO users (email, password, nom, prenom) VALUES ("' . $_POST["username"] . '","' . hash('sha256',$_POST["inputpassword"]) . '","' . $_POST["nom"] . '","' . $_POST["prenom"] . '");');
        
        header('location: ../index.php');
    }
}

// On éxécute la fonction de création
userCrea();
