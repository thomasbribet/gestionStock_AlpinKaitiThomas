<main>

    <div class="col-3 d-flex flex-column align-items-center justify-content-center mx-auto" style="height: 80vh;">
        <img src="./assets/logo" alt="" style="height: 50%; width: auto;">
        <h1 class="text-center">Connexion</h1>

        <form method="POST" action="http://localhost/workspace/gestionStock/controller/verif.php" class="text-center col-9">
            <div class="form-group my-2">
                <input type="email" class="form-control" name="username" aria-describedby="usernameHelp" placeholder="Adresse email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="inputpassword" placeholder="Mot de passe">
            </div>
            <div class="col-12 form-group my-2">
                <button type="submit" class="btn btn-primary col-12">Connexion</button>
            </div>
        </form>

        <div class="col-9 d-flex justify-content-center">
            <p class="text-primary">Mot de passe oublié ?</p>
            <p class="mx-2"> . </p>
            <a class="text-primary" href="http://localhost/workspace/gestionStock/creation.php">Créer un compte</a>
        </div>
        <p class="text-secondary">&copy;2021</p>

    </div>

</main>