<?php

include("../conf/db_connect.php");
include("../views/prodtab.php");

global $conn;
global $ligne;

// On fait une requête à la bdd
$conn->query('DELETE FROM prod WHERE id=' . $ligne["id"]);

