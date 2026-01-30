<table>
    <thead>
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
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <a href="?action=addStudent">Ajouter</a>
        <?php if (isset($students) && !empty($students)): ?>
            <?php
            foreach ($students as $student):
            ?>
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
                        <a href="?action=showDetails&id=<?= $student->getId() ?>">Details</a>
                        <a href="?action=updateStudent&id=<?= $student->getId() ?>">Modifier</a>
                        <a href="?action=deleteStudent&id=<?= $student->getId() ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach ?>

        <?php else: ?>
            <tr>
                <td colspan="5">Aucun étudiant trouvé ou erreur de chargement.</td>
            </tr>
        <?php endif; ?>
        <?php if (!empty($results)): ?>
            <?php
            foreach ($results as $result):
            ?>
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
                        <a href="?action=showDetails&id=<?= $student->id ?>">Details</a>
                        <a href="?action=updateStudent&id=<?= $student->id ?>">Modifier</a>
                        <a href="?action=deleteStudent&id=<?= $student->id ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php endif; ?>
    </tbody>
</table>