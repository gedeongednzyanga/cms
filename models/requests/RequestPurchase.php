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

$managerPurchase = new ManagerPurchase();
$managerProduct = new ManagerProduct();
$action = $_POST['action'];

switch ($action) {
    case 'add':
        $product = $managerProduct->getOneProduct($_POST['refprodc']);
        if (isset($_SESSION['purchase'])) {
            $item_array_id = array_column($_SESSION['purchase'], 'refprodc');
            if (!in_array($_POST['refprodc'], $item_array_id)) {
                $count = count($_SESSION['purchase']);
                $item_array = array();
                foreach ($product as $onep) :
                    $item_array['refprodc'] = $onep->getIdprod();
                    $item_array['designationprod'] = $onep->getDesignationprod();
                    $item_array['quantiteapp1'] = $_POST['quantiteapp'] . ' ' . $onep->getDesignationu();
                    $item_array['quantiteapp'] = $_POST['quantiteapp'];
                    $item_array['quantitecmd'] = $_POST['quantitecmd'];
                endforeach;
                $_SESSION['purchase'][$count] = $item_array;
                echo "Approv. déjà ajouter.";
            } else {
                echo "Approv déjà ajouter.";
            }
        } else {
            $item_array = array();
            foreach ($product as $onep) :
                $item_array['refprodc'] = $onep->getIdprod();
                $item_array['designationprod'] = $onep->getDesignationprod();
                $item_array['quantiteapp1'] = $_POST['quantiteapp'] . ' ' . $onep->getDesignationu();
                $item_array['quantiteapp'] = $_POST['quantiteapp'];
                $item_array['quantitecmd'] = $_POST['quantitecmd'];
            endforeach;
            $_SESSION['purchase'][0] = $item_array;
        }
        foreach ($_SESSION['purchase'] as $key) :
            echo "<option value=" . $key['refprodc'] . ">" . $key['designationprod'] . "</option>";
        endforeach;
        break;

    case 'save':
        $purchase = new Purchase($_POST);
        $purchase->setQuantiteapp(count($_SESSION['purchase']));
        $managerPurchase->inertApprov($_POST['actionu'], 'inert_entapprov ', $purchase);
        foreach ($_SESSION['purchase'] as $key => $value) :
            $purchasesave = new Purchase($value);
            $managerPurchase->createObj($_POST['actionu'], 'obj_approvisionnement', $purchasesave);
        endforeach;
        echo 'Bien enregistrée.';
        break;

    default:
        # code...
        break;
}