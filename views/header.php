<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Gestion de stock</title>
</head>

<body>
    <header class="col-12 d-flex justify-content-between align-items-center bg-secondary text-white px-3" style="height: 10vh;">
        <a style="height: 100%;" class="d-flex align-items-center" href="./index.php"><img src="./assets/logo" alt="" style="height: 80%; width: auto; border-radius: 5px;"></a>
        <p class="m-0 p-0 fs-4">Bonjour<?php if (!isset($_SESSION["username"])) {
                                            echo " à vous";
                                        } else {
                                            echo " " . $_SESSION["username"];
                                        }
                                        ?> !
        </p>
        <?php if (isset($_SESSION["username"])) {
            echo '<a class="text-white" href="./controller/deconnexion.php">Déconnexion</a>';
        }
        ?>
    </header>