<?php include_once "./../app/views/layouts/header.php"; ?>

<div class="container">
    <h2 class="mb-4">Details de l'etudiant</h2>

    <div class="card">
        <div class="card-header bg-info text-white">
            Informations de l'etudiant #<?= $student->id ?>
            <span class="badge text-bg-danger float-end"><?= $student->statut ?></span>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-3 fw-bold">Nom complet :</div>
                <div class="col-md-9"><?= $student->nom ?> <?= $student->prenom ?></div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3 fw-bold">Email :</div>
                <div class="col-md-9"><?= $student->email ?></div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3 fw-bold">Telephone :</div>
                <div class="col-md-9"><?= $student->telephone ?></div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3 fw-bold">Filiere & Niveau :</div>
                <div class="col-md-9"><?= $student->filiere ?> - <?= $student->niveau ?></div>
            </div>

            <hr>
            <a href="index.php" class="btn btn-secondary">Retour a la liste</a>
            <a href="?action=updateStudent&id=<?= $student->id ?>" class="btn btn-warning">Modifier</a>
        </div>
    </div>
</div>

<?php include_once "./../app/views/layouts/footer.php"; ?>