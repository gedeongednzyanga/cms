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

$managerCommande = new ManagerCommande();
$action = $_POST['action'];

switch ($action) {
    case 'load_commande':
        $commande = new Commande($_POST);
        $data = $managerCommande->getOneCommande($commande->getNumcom());
        if (count($data) > 0) {
            $products = '<optgroup label="Produits commandés">';
            foreach ($data as $key => $value) {
                $products .= '<option value=' . $value->getIddetcom() . '>' . $value->getDesignationprod() . '</option>';
            }
            $products .= '</optgroup>';
            echo $products;
        } else
            echo 'Data empty';
        break;

    case 'load_one_commande':
        $commande = new Commande($_POST);
        $data = $managerCommande->getOneDetailCommande($commande->getIddetcom());
        if (count($data) > 0) {
            $quantite = 0;
            foreach ($data as $oneCommande) :
                $quantite = $oneCommande->getQuantitecom();
            endforeach;
            echo $quantite;
        } else {
            echo 'Data empty';
        }
        break;

    default:
        # code...
        break;
}