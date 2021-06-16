<?php
require_once("./views/header.php");
?>

<div class="col-12 d-flex flex-column justify-content-center align-items-center" style="height: 80vh;">

    <form method="POST" action="./controller/crea.php" class="text-center col-3">
        <div class="form-group my-2">
            <input type="text" class="form-control" name="nom" aria-describedby="usernameHelp" placeholder="Nom">
        </div>
        <div class="form-group my-2">
            <input type="text" class="form-control" name="prenom" aria-describedby="usernameHelp" placeholder="Prénom">
        </div>
        <div class="form-group my-2">
            <input type="email" class="form-control" name="username" aria-describedby="usernameHelp" placeholder="Adresse email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="inputpassword" placeholder="Mot de passe">
        </div>
        <div class="col-12 form-group my-2">
            <button type="submit" class="btn btn-primary col-12">Inscription</button>
        </div>
    </form>

</div>



<?php
require_once("./views/footer.php");
?>