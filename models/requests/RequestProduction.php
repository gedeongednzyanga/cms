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

$managerCategory = new ManagerCategory();
$managerUnite = new ManagerUnite();
$managerProduct = new ManagerProduct();
$action = $_POST['action'];

switch ($action) {
    case 'add':
        $product = $managerProduct->getOnePoduct($_POST['refprod']);
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
            // echo "Production ajoutée";
            /// echo ($_SESSION['production']['designationprod']);
        }
        foreach ($_SESSION['production'] as $key) :
            echo "<option value=" . $key['refprod'] . ">" . $key['designationprod'] . ' ' . $key['designationprod'] . "</option>";
        endforeach;
        break;

    case 'unite':
        $unite = new Unite($_POST);
        $managerUnite->createObj($_POST['actionu'], 'obj_unite', $unite);
        echo 'Bien enregistrée';
        break;

    case 'product':
        $product = new Product($_POST);
        // $product->setQuantitest(0);
        $managerProduct->createObj($_POST['actionu'], 'obj_product', $product);
        echo 'Bien enregistrée';
        break;

    default:
        # code...
        break;
}