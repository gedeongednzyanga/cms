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

$managerProduction = new ManagerProduction();
$managerProduct = new ManagerProduct();
$action = $_POST['action'];

switch ($action) {
    case 'add':
        $product = $managerProduct->getOneProduct($_POST['refprod']);
        if (isset($_SESSION['production'])) {
            $item_array_id = array_column($_SESSION['production'], 'refprod');
            if (!in_array($_POST['refprod'], $item_array_id)) {
                $count = count($_SESSION['production']);
                $item_array = array();
                foreach ($product as $onep) :
                    $item_array['refprod'] = $onep->getIdprod();
                    $item_array['designationprod'] = $onep->getDesignationprod();
                    $item_array['quantiteprod1'] = $_POST['quantiteprod'] . ' ' . $onep->getDesignationu();
                    $item_array['quantiteprod'] = $_POST['quantiteprod'];
                    $item_array['quantiteperd'] = $_POST['quantiteperd'];
                    $item_array['carburant'] = $_POST['carburant'];
                endforeach;
                $_SESSION['production'][$count] = $item_array;
                echo "Production déjà ajouter.";
            } else {
                echo "Production déjà ajouter.";
            }
        } else {
            $item_array = array();
            foreach ($product as $onep) :
                $item_array['refprod'] = $onep->getIdprod();
                $item_array['designationprod'] = $onep->getDesignationprod();
                $item_array['quantiteprod1'] = $_POST['quantiteprod'] . ' ' . $onep->getDesignationu();
                $item_array['quantiteprod'] = $_POST['quantiteprod'];
                $item_array['quantiteperd'] = $_POST['quantiteperd'];
                $item_array['carburant'] = $_POST['carburant'];
            endforeach;
            $_SESSION['production'][0] = $item_array;
        }
        foreach ($_SESSION['production'] as $key) :
            echo "<option value=" . $key['refprod'] . ">" . $key['designationprod'] . ' ' . '( ' . $key['quantiteprod1'] . ' )' . "</option>";
        endforeach;
        break;

    case 'save':
        if (isset($_SESSION['production']) && count($_SESSION['production']) > 0) {
            $production = new Production($_POST);
            $production->setTotprod(count($_SESSION['production']));
            $managerProduction->inertEntete($_POST['actionu'], 'inert_entprod ', $production);
            foreach ($_SESSION['production'] as $key => $value) :
                $productionsave = new Production($value);
                $managerProduction->createObj($_POST['actionu'], 'obj_production', $productionsave);
            endforeach;
            unset($_SESSION['production']);
            echo 'Production enregistrée avec succès.';
        } else {
            echo 'Aucune production dans le panier.';
        }

        break;

    default:
        # code...
        break;
}