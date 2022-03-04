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
        $product = $managerProduct->getOneProduct($_POST['refprodc']);
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
            echo "<option value=" . $key['refprodc'] . ">" . $key['designationprod'] . ' (' . $key['quantitecom1'] . ')' . "</option>";
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
        unset($_SESSION['commande']);
        echo 'Commande enregistrée avec succès.';
        break;

    case 'historique':
        $data = $managerCommande->getOneProduct($_POST['idprod']);
        if (count($data) == 0) {
            echo '<option value="0">Aucune sortie pour ce produit</option>';
        } else {
            $productinfo = '<option value="0">' . count($data) . ' sortie(s) pour ce produit</option>';
            foreach ($data as $data) :
                $productinfo .= '<option value="0">' . $data->getCustomer() . '(' . $data->getQuantitecom() . $data->getDesignationu() . ' le ' . $data->getDatecom() . ')</option>';
            endforeach;
            echo $productinfo;
        }
        break;

    case 'facture':
        $data = $managerCommande->getOneCommande($_POST['numcom']);
        $rows = '';
        foreach ($data as $com) :
            $rows .= '
            <tr>
                <td>
                    <div><strong>' . $com->getDesignationprod() . '</strong></div><small>
                </td>
                <td>' . $com->getQuantitecom() . '' . $com->getDesignationu() . '</td>
                <td>' . $com->getPrixprod() . '$ </td>
                <td>' . $com->getPrixprod() * $com->getQuantitecom() . '$ </td>
            </tr>
            ';
        endforeach;
        echo $rows;
        break;
    default:
        # code...
        break;
}