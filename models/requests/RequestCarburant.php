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

$managerCarburant = new ManagerCarburant();
$action = $_POST['action'];

switch ($action) {
    case 'save_carb':
        $carburant = new Carburant($_POST);
        $managerCarburant->createObj($_POST['actionu'], 'obj_carburant', $carburant);
        echo 'Bien enregistré !!!';
        break;

    case 'save_mouv':
        $mouvement = new Mouvement($_POST);
        $message = '';
        if ($_POST['actionu'] == 1) {
            $mouvement->setQuantite_entr($mouvement->getQuantite());
            $mouvement->setQuantite_sort(0);
            $mouvement->setTypemiuv('entree');
            $message = 'Approvisionnement enregistré avec succès.';
        } else {
            $mouvement->setQuantite_sort($mouvement->getQuantite());
            $mouvement->setQuantite_entr(0);
            $mouvement->setTypemiuv('sortie');
            $message = 'Sortie enregistrée avec succès.';
        }
        $managerCarburant->createObjMouv($_POST['actionu'], 'obj_mouvcarb', $mouvement);
        echo $message;
        break;

    case 'load_chat':
        $dataCarbEntete = [];
        $data = $managerCarburant->getCarburants();
        foreach ($data as $dat) :
            $rw = $dat->getCarbdesign();
            $dataCarbChat[$rw] = $dat->getCarbstok();
        endforeach;
        echo json_encode($dataCarbChat);
        break;

    default:
        # code...
        break;
}