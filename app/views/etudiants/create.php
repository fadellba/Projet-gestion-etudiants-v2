<?php include_once "./../app/views/layouts/header.php"; ?>

<h2 class="mb-4">Formulaire d'ajout etudiant</h2>

<form action="?action=registerStudent" method="POST">

    <div class="mb-3">
        <label for="nom" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom" maxlength="50" required>
    </div>

    <div class="mb-3">
        <label for="prenom" class="form-label">Prenom :</label>
        <input type="text" class="form-control" id="prenom" name="prenom" maxlength="100" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email :</label>
        <input type="email" class="form-control" id="email" name="email" maxlength="50" required>
    </div>

    <div class="mb-3">
        <label for="telephone" class="form-label">Telephone :</label>
        <input type="tel" class="form-control" id="telephone" name="telephone" maxlength="15">
    </div>

    <div class="mb-3">
        <label for="date_naissance" class="form-label">Date de naissance :</label>
        <input type="date" class="form-control" id="date_naissance" name="date_naissance">
    </div>

    <div class="mb-3">
        <label for="filiere" class="form-label">Filiere :</label>
        <input type="text" class="form-control" id="filiere" name="filiere" maxlength="50">
    </div>

    <div class="mb-3">
        <label for="niveau" class="form-label">Niveau :</label>
        <input type="text" class="form-control" id="niveau" name="niveau" maxlength="50">
    </div>

    <div class="mb-3">
        <select class="form-select" name="statut">
            <option selected>Open this select menu</option>
            <option value="Actif">Actif</option>
            <option value="Inactif">Inactif</option>
            <option value="Diplome">Diplome</option>
        </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Envoyer</button>
        <a href="index.php" class="btn btn-secondary">Annuler</a>
    </div>

</form>

<?php include_once "./../app/views/layouts/footer.php"; ?>