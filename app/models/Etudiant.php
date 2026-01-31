<?php
class Etudiant
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function add($nom, $prenom, $email, $tel, $dnais, $filiere, $niv, $statut)
    {
        $sql = "INSERT INTO etudiants (nom, prenom, email, telephone, date_naissance, filiere, niveau, statut) 
                VALUES (:nom, :prenom, :email, :tel, :dnais, :filiere, :niv, :statut)";

        $stmt = $this->database->prepare($sql);
        return $stmt->execute([
            ':nom'    => $nom,
            ':prenom' => $prenom,
            ':email'  => $email,
            ':tel'    => $tel,
            ':dnais'  => $dnais,
            ':filiere' => $filiere,
            ':niv'    => $niv,
            ':statut' => $statut
        ]);
    }

    public function update($id, $nom, $prenom, $email, $tel, $dnais, $filiere, $niv, $statut)
    {
        $sql = "UPDATE etudiants SET 
                nom = :nom, prenom = :prenom, email = :email, telephone = :tel, 
                date_naissance = :dnais, filiere = :filiere, niveau = :niv, statut = :statut 
                WHERE id = :id";

        $stmt = $this->database->prepare($sql);
        return $stmt->execute([
            ':id'     => $id,
            ':nom'    => $nom,
            ':prenom' => $prenom,
            ':email'  => $email,
            ':tel'    => $tel,
            ':dnais'  => $dnais,
            ':filiere' => $filiere,
            ':niv'    => $niv,
            ':statut' => $statut
        ]);
    }

    public function delete($id)
    {
        $stmt = $this->database->prepare("DELETE FROM etudiants WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }

    public function getAll()
    {
        $stmt = $this->database->query("SELECT * FROM etudiants");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $stmt = $this->database->prepare("SELECT * FROM etudiants WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function searchByName($nom)
    {
        $stmt = $this->database->prepare("SELECT * FROM etudiants WHERE nom LIKE :nom");
        return $stmt->execute([':nom' => "%$nom%"]) ? $stmt->fetchAll(PDO::FETCH_OBJ) : [];
    }
}
