<table class="table">
    <thead>
        <tr>
            <th scope="col">Email</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
        </tr>
    </thead>
    <tbody>
        <!-- ============================================ -->
        <?php
        include("./conf/db_connect.php");

        global $conn;

        // On fait une requête à la bdd
        $result = $conn->query("SELECT * FROM users");

        while ($ligne = $result->fetch_array()) {
        ?>
            <!-- ============================================ -->
            <tr>
                <td><?php echo $ligne["email"]; ?></td>
                <td><?php echo $ligne["nom"]; ?></td>
                <td><?php echo $ligne["prenom"]; ?></td>
            </tr>
            <!-- ============================================ -->
        <?php
        }
        ?>
        <!-- ============================================ -->
    </tbody>
</table>