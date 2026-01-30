<h2>Ajouter</h2>

<form action="?action=registerStudent" method="POST">

    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" maxlength="50" required>
    </div>

    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" maxlength="100" required>
    </div>

    <div>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" maxlength="50" required>
    </div>

    <div>
        <label for="telephone">Téléphone :</label>
        <input type="tel" id="telephone" name="telephone" maxlength="15">
    </div>

    <div>
        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance">
    </div>

    <div>
        <label for="filiere">Filière :</label>
        <input type="text" id="filiere" name="filiere" maxlength="50">
    </div>

    <div>
        <label for="niveau">Niveau :</label>
        <input type="text" id="niveau" name="niveau" maxlength="50">
    </div>

   

    <select name="statut" id="statut">
        <option value="actif">Actif</option>
        <option value="Inactif">Inactif</option>
        <option value="Diplome">Diplome</option>
    </select>

    

    <div>
        <button type="submit">Envoyer</button>
    </div>

</form>