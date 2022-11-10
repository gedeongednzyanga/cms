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
$managerCommande = new ManagerCommande();
$action = $_POST['action'];

switch ($action) {
    case 'payement':
        $payement = new Payement($_POST);
        if ($payement->getRestepaye() == 0)
            $payement->setStatc(1);
        $managerPayement->createObj($_POST['actionu'], 'obj_payement', $payement);
        echo 'Payement enregistré avec succès.';
        break;

    case 'detail':
        $dataCommande = $managerCommande->getOneEntCommande($_POST['refentc']);
        $personne = [];
        foreach ($dataCommande as $data) :
            $personne['refentc'] = $data->getIdentc();
            $personne['numcom'] = $data->getNumcom();
            $personne['customer'] = $data->getCustomer();
            $personne['totcommande'] = $data->getTotcom();
            $personne['reste'] = $managerCommande->calculSommetotcommande($data->getIdentc()) - $managerPayement->getMontantPayer($data->getIdentc());
        endforeach;
        echo json_encode($personne);
        break;
    default:
        # code...
        break;
}
