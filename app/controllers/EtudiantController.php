<?php
class EtudiantController
{
    private $etudiant;

    public function __construct($etudiant)
    {
        $this->etudiant = $etudiant;
    }

    public function index()
    {
        $students = $this->etudiant->getAll();
        require_once("./../app/views/etudiants/index.php");
    }

    public function loadAddForm()
    {
        require_once "./../app/views/etudiants/create.php";
    }

    function createStudentAction($data)
    {
        $nom = htmlspecialchars(trim($data['nom'] ?? ''));
        $prenom = htmlspecialchars(trim($data['prenom'] ?? ''));
        $email = filter_var(trim($data['email'] ?? ''), FILTER_SANITIZE_EMAIL);
        $telephone = htmlspecialchars(trim($data['telephone'] ?? ''));
        $date_naissance = htmlspecialchars(trim($data['date_naissance'] ?? ''));
        $filiere = htmlspecialchars(trim($data['filiere'] ?? ''));
        $niveau = htmlspecialchars(trim($data['niveau'] ?? ''));
        $statut = htmlspecialchars(trim($data['statut'] ?? ''));

        if (!empty($date_naissance)) {
            $dateEntrer = new DateTime($date_naissance);
            $dateInscription = new DateTime('today');

            if ($dateEntrer >= $dateInscription) {
                header("Location: index.php?message=Erreur : La date de naissance doit etre anterieure a la date d'inscription");
                return;
            }
        }

        $result = $this->etudiant->add($nom, $prenom, $email, $telephone, $date_naissance, $filiere, $niveau, $statut);
        $message = $result ? "Ajout avec succes" : "Ajout avec echec";
        header("Location: index.php?message=$message");
    }

    public function loadEditForm($id)
    {
        $id = (int)$id;
        if ($id > 0) {
            $student = $this->etudiant->getById($id);
            require_once "./../app/views/etudiants/edit.php";
        } else {
            header("Location: index.php?message=Etudiant introuvable !");
        }
        
    }

    function editeStudentAction($data)
    {
        $id = (int)($data['id'] ?? 0);
        $nom = htmlspecialchars(trim($data['nom'] ?? ''));
        $prenom = htmlspecialchars(trim($data['prenom'] ?? ''));
        $email = filter_var(trim($data['email'] ?? ''), FILTER_SANITIZE_EMAIL);
        $telephone = htmlspecialchars(trim($data['telephone'] ?? ''));
        $filiere = htmlspecialchars(trim($data['filiere'] ?? ''));
        $niveau = htmlspecialchars(trim($data['niveau'] ?? ''));
        $statut = htmlspecialchars(trim($data['statut'] ?? ''));
        $date_naissance = htmlspecialchars(trim($data['date_naissance'] ?? ''));

        if (!empty($date_naissance)) {
            $dateEntrer = new DateTime($date_naissance);
            $dateInscription = new DateTime('today');

            if ($dateEntrer >= $dateInscription) {
                header("Location: index.php?message=Erreur : La date de naissance doit etre anterieure a la date d'inscription");
                return;
            }
        }

        $result = $this->etudiant->update($id, $nom, $prenom, $email, $telephone, $date_naissance, $filiere, $niveau, $statut);
        $message = $result ? "Mis a jour avec succes" : "echec de la mis a jour";
        header("Location: index.php?message=$message");
    }

    function deleteStudentAction($id)
    {
        $id = (int)$id;
        if ($id > 0) {
            $result = $this->etudiant->delete($id);
            $message = $result ? "Suppression avec succes" : "echec de la suppression";
        }
        header("Location: index.php?message=$message");
    }

    function getStudentByIdAction($id)
    {
        $id = (int)$id;
        if ($id > 0) {
            $student = $this->etudiant->getById($id);
            require_once "./../app/views/etudiants/show.php";
        } else {
            header("Location: index.php?message=Etudiant introuvable !");
        }
    }

    public function searchByName($nom)
    {
        $nom = htmlspecialchars(trim($nom ?? ''));
        $result = $this->etudiant->searchByName($nom);
    }
}
