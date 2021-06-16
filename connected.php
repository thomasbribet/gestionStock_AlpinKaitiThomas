<?php
require_once("./views/header.php");
?>
<div class="d-flex justify-content-around align-items-center col-12" style="height: 80vh;">
    <div class="col-2 d-flex flex-wrap justify-content-center align-items-end" style="height: 50vh;">

        <h2 class="m-3 p-0">Tableau de bord</h1>

            <div class="bg-success m-2 d-flex flex-column justify-content-center align-items-center" style="width: 110px; height: 110px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="white" class="bi bi-bag-plus" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                </svg>
                <p class="mt-1 mb-0 p-0 text-white">Entrée</p>
            </div>

            <div class="bg-danger m-2 d-flex flex-column justify-content-center align-items-center" style="width: 110px; height: 110px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="white" class="bi bi-bag-dash" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M5.5 10a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z" />
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                </svg>
                <p class="mt-1 mb-0 p-0 text-white">Sortie</p>
            </div>

            <div class="bg-primary m-2 d-flex flex-column justify-content-center align-items-center" style="width: 110px; height: 110px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="white" class="bi bi-box-seam" viewBox="0 0 16 16">
                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                </svg>
                <p class="mt-1 mb-0 p-0 text-white">Stock</p>
            </div>

            <div class="bg-warning m-2 d-flex flex-column justify-content-center align-items-center" style="width: 110px; height: 110px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
                <p class="mt-1 mb-0 p-0 text-white">Utilisateurs</p>
            </div>

    </div>

    <!-- ============================================================================== -->
    <!-- ============================================================================== -->
    <!-- ============================================================================== -->
    <!-- ============================================================================== -->
    <!-- ============================================================================== -->

    <div class="col-8">

        <?php
            require_once("./views/usertab.php");
            require_once("./views/prodtab.php");

        ?>

    </div>
</div>

<?php
require_once("./views/footer.php");
?>