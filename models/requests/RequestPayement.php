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

$managerPayement = new ManagerPayement();
$action = $_POST['action'];

switch ($action) {
    case 'payement':
        $payement = new Payement($_POST);
        if ($payement->getRestepaye() == 0)
            $payement->setStatc(1);
        $managerPayement->createObj($_POST['actionu'], 'obj_payement', $payement);
        echo 'Bien enregistrée';
        break;
    default:
        # code...
        break;
}