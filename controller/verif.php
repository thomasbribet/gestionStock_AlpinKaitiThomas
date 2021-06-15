<?php

include("../conf/db_connect.php");

function userVerif()
{
    global $conn;

    $result = $conn->query('SELECT * FROM users WHERE email="' . $_POST["username"] . '" AND password="' . $_POST["inputpassword"] . '";');
    $row = $result->fetch_row();
    var_dump($row);

    if (empty($row)) {
        echo "pas ok";
        header("Location: http://localhost/workspace/gestionStock/");
    } else {
        echo "ok";
    }
}

userVerif();
