<?php include_once "./../app/views/layouts/header.php"; ?>

<?php if (!empty($_GET["message"])): ?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <?= htmlspecialchars($_GET["message"]) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<h2 class="mb-4">Liste des etudiants</h2>
<a href="?action=addStudent" class="btn btn-primary mb-3">Ajouter un etudiant</a>

<table class="table table-striped table-hover table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Date_naissance</th>
            <th>Filiere</th>
            <th>Niveau</th>
            <th>Date_inscription</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student->id ?></td>
                <td><?= $student->nom ?></td>
                <td><?= $student->prenom ?></td>
                <td><?= $student->email ?></td>
                <td><?= $student->telephone ?></td>
                <td><?= $student->date_naissance ?></td>
                <td><?= $student->filiere ?></td>
                <td><?= $student->niveau ?></td>
                <td><?= $student->date_inscription ?></td>
                <td><?= $student->statut ?></td>
                <td>
                    <a href="?action=showDetails&id=<?= $student->id ?>" class="btn btn-info btn-sm text-white">Details</a>
                    <a href="?action=updateStudent&id=<?= $student->id ?>" class="btn btn-warning btn-sm">Editer</a>
                    <a href="?action=deleteStudent&id=<?= $student->id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer cet étudiant ?')">Supprimer</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include_once "./../app/views/layouts/footer.php"; ?>