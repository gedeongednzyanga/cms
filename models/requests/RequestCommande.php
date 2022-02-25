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
$managerProduct = new ManagerProduct();
$action = $_POST['action'];

switch ($action) {
    case 'add':
        $product = $managerProduct->getOnePoduct($_POST['refprodc']);
        if (isset($_SESSION['commande'])) {
            $item_array_id = array_column($_SESSION['commande'], 'refprodc');
            if (!in_array($_POST['refprodc'], $item_array_id)) {
                $count = count($_SESSION['commande']);
                $item_array = array();
                foreach ($product as $onep) :
                    $item_array['refprodc'] = $onep->getIdprod();
                    $item_array['designationprod'] = $onep->getDesignationprod();
                    $item_array['quantitecom1'] = $_POST['quantitecom'] . ' ' . $onep->getDesignationu();
                    $item_array['quantitecom'] = $_POST['quantitecom'];
                endforeach;
                $_SESSION['commande'][$count] = $item_array;
                echo "Commande déjà ajouter.";
            } else {
                echo "Commande déjà ajouter.";
            }
        } else {
            $item_array = array();
            foreach ($product as $onep) :
                $item_array['refprodc'] = $onep->getIdprod();
                $item_array['designationprod'] = $onep->getDesignationprod();
                $item_array['quantitecom1'] = $_POST['quantitecom'] . ' ' . $onep->getDesignationu();
                $item_array['quantitecom'] = $_POST['quantitecom'];
            endforeach;
            $_SESSION['commande'][0] = $item_array;
        }
        foreach ($_SESSION['commande'] as $key) :
            echo "<option value=" . $key['refprodc'] . ">" . $key['designationprod'] . "</option>";
        endforeach;
        break;

    case 'save':
        $commande = new Commande($_POST);
        $commande->setIdentc(0);
        $commande->setTotcom(count($_SESSION['commande']));
        $commande->setCustomer($_POST['customer']);
        $managerCommande->inertCommande($_POST['actionu'], 'inert_entcommande ', $commande);
        foreach ($_SESSION['commande'] as $key => $value) :
            $commandesave = new Commande($value);
            $managerCommande->createObj($_POST['actionu'], 'obj_commande', $commandesave);
        endforeach;
        echo 'Bien enregistrée.';
        break;

    default:
        # code...
        break;
}