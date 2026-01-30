<?php if(!empty($student)) ?>
<h2>Editer</h2>

<form action="?action=editStudent" method="POST">

    <div>
        <input hidden value="<?= $student->id ?>" type="text" id="id" name="id">
    </div>

    <div>
        <label for="nom">Nom :</label>
        <input value="<?= $student->nom ?>" type="text" id="nom" name="nom" maxlength="50" required>
    </div>

    <div>
        <label for="prenom">Prénom :</label>
        <input value="<?= $student->prenom ?>" type="text" id="prenom" name="prenom" maxlength="100" required>
    </div>

    <div>
        <label for="email">Email :</label>
        <input value="<?= $student->email ?>" type="email" id="email" name="email" maxlength="50" required>
    </div>

    <div>
        <label for="telephone">Téléphone :</label>
        <input value="<?= $student->telephone ?>" type="tel" id="telephone" name="telephone" maxlength="15">
    </div>

    <div>
        <label for="date_naissance">Date de naissance :</label>
        <input value="<?= $student->date_naissance ?>" type="date" id="date_naissance" name="date_naissance">
    </div>

    <div>
        <label for="filiere">Filière :</label>
        <input value="<?= $student->filiere ?>" type="text" id="filiere" name="filiere" maxlength="50">
    </div>

    <div>
        <label for="niveau">Niveau :</label>
        <input value="<?= $student->niveau ?>" type="text" id="niveau" name="niveau" maxlength="50">
    </div>


    <select name="statut" id="statut">
        <option value="actif" <?= $student->getStatut() == 'Actif' ? "selected" : "" ?>>Actif</option>
        <option value="Inactif" <?= $student->getStatut() == 'Inactif' ? "selected" : "" ?>>Inactif</option>
        <option value="Diplome" <?= $student->getStatut() == 'Diplome' ? "selected" : "" ?>>Diplome</option>
    </select>


    <div>
        <button type="submit">Envoyer</button>
    </div>

</form>