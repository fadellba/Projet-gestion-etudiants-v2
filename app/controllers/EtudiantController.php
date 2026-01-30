<?php

use Doctrine\ORM\EntityManager;
use models\Etudiant;

class EtudiantController
{
    private $etudiant;

    public function __construct($etudiant)
    {
        $this->etudiant = $etudiant;
    }

    public function index()
    {
        $students = $this->etudiant->getAllStudent();
        require_once("./../views/etudiant/index.php");
    }

    public function loadAddForm()
    {
        require_once "./../views/etudiant/create.php";
    }

    public function createStudentAction($nom, $prenom, $email, $telephone, $dateNaissance, $filiere, $niveau, $statut)
    {
        $dateNaissance = new DateTime($dateNaissance);
        $this->etudiant->addStudent($nom, $prenom, $email, $telephone, $dateNaissance, $filiere, $niveau, $statut);
        header("Location: index.php");
    }

    public function loadEditForm($id)
    {
        $student = $this->etudiant->getStudentById($id);
        require_once "./../views/etudiant/edit.php";
    }

    public function editStudentAction($id, $nom, $prenom, $email, $telephone, $dateNaissance, $filiere, $niveau, $statut) 
    {
        $dateNaissance = new DateTime($dateNaissance);
        $this->etudiant->updateStudent($id, $nom, $prenom, $email, $telephone, $dateNaissance, $filiere, $niveau, $statut);
        header("Location: index.php");
    }

    public function deleteStudentAction($id)
    {
        $this->etudiant->deleteStudent($id);
        header("Location: index.php");
    }

    public function searchByName($nom)
    {
        $result = $this->etudiant->getStudentByName($nom);
    }
}
