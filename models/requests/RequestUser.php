<?php
session_start();
spl_autoload_register(function ($class) {
    $fileManager = '../managers/' . $class . '.php';
    $fileObject = '../objects/' . $class . '.php';

    if (file_exists($fileManager)) {
        require($fileManager);
    } else if (file_exists($fileObject)) {
        require($fileObject);
    } else {
        echo 'Fichier ' . $class . '.php n\'existe pas.';
    }
});

$managerUser = new ManagerUser();
$managerPage = new ManagerPage();
$action = $_POST['action'];

switch ($action) {
    case 'create':
        $user = new User($_POST);
        $managerUser->createObj($_POST['actionu'], 'obj_user', $user);
        echo 'Utilisateur enregistré avec succès.'.$managerUser->getLastUserId();
        if(isset($_SESSION['pages'])){
            $page = new Page([]);
            foreach($_SESSION['pages'] as $key){
                $page->setRefuser($managerUser->getLastUserId());
                $page->setRefpage($key['refpage']);
                $managerPage->createObj(1, 'obj_acceder', $page);
            }
            unset($_SESSION['pages']);
        }
        if(isset($_SESSION['autorisation'])){
            $page = new Page([]);
            foreach ($_SESSION['autorisation'] as $key) {
                $page->setRefpage($key['refpage']);
                $page->setRefauto($key['refauto']);
                $managerPage->createAcces('obj_avoiracc', $page);
            }
            unset($_SESSION['autorisations']);
        }
        break;

    case 'connexion':
        $login = $managerUser->connexion($_POST['username'], $_POST['password'], 'User');
        if (count($login) > 0) {
            foreach ($login as $user) :
                $_SESSION['iduser'] = $user->getIduser();
                $_SESSION['user'] = $user->getNomuser() . ' ' . $user->getPrenomuser();
                $_SESSION['compte'] = $user->getCompteuser();
            endforeach;
            echo 1;
        } else
            echo 0;
        break;

    default:
        # code...
        break;
}