<?php
if (!empty($e))
    ?>
<div>
    <p>ID : <?= $e->id ?></p>
    <p>Nom : <?= $e->nom ?></p>
    <p>Prenom : <?= $e->prenom ?></p>
    <p>Email : <?= $e->email ?></p>
    <p>Telephone : <?= $e->telephone ?></p>
    <p>Date Naissance : <?= $e->date_naissance ?></p>
    <p>Filiere : <?= $e->filiere ?></p>
    <p>Niveau : <?= $e->niveau ?></p>
    <p>Date Inscription : <?= $e->date_inscription ?></p>
    <p>Statut : <?= $e->statut ?></p>
</div>