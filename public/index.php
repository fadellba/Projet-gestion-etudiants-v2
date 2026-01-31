<?php
require_once "./../app/config/Database.php";
require_once "./../app/controllers/EtudiantController.php";
require_once "./../app/models/Etudiant.php";

$database = new Database();
$etudiant = new Etudiant($database->getConnection());
$controller = new EtudiantController($etudiant);

if (isset($_GET["action"]) && !empty($_GET["action"])) {

    switch ($_GET["action"]) {
        case "addStudent":
            $controller->loadAddForm();
            break;
        case "registerStudent":
            $controller->createStudentAction($_POST);
            break;
        case "updateStudent":
            $controller->loadEditForm($_GET["id"]);
            break;
        case "editStudent":
            $controller->editeStudentAction($_POST);
            break;
        case "deleteStudent":
            $controller->deleteStudentAction($_GET["id"]);
            break;
        case "showDetails":
            $controller->getStudentByIdAction($_GET["id"]);
            break;
        default:
            echo "cette action n'existe pas !";
    }
} else {
    $controller->index();
}
