<?php
session_start();
spl_autoload_register(function ($class) {
    $fileManager = '../managers/' . $class . '.php';
    $fileObject = '../objects/' . $class . '.php';

    if (file_exists($fileManager)) {
        require($fileManager);
    }
    else if (file_exists($fileObject)) {
        require($fileObject);
    }
    else {
        echo 'Fichier ' . $class . '.php n\'existe pas.';
    }
});

$managerPage = new ManagerPage();
// $managerProduct = new ManagerProduct();
$action = $_POST['action'];

switch ($action) {
    case 'add':
        $page = $managerPage->getOnePage($_POST['refpage']);
        if (isset($_SESSION['pages'])) {
            $item_array_id = array_column($_SESSION['pages'], 'refpage');
            if (!in_array($_POST['refpage'], $item_array_id)) {
                $count = count($_SESSION['pages']);
                $item_array = array();
                foreach ($page as $onep) :
                    $item_array['refpage'] = $onep->getIdpage();
                    $item_array['designationpage'] = $onep->getDesignationpage();
                endforeach;
                $_SESSION['pages'][$count] = $item_array;
                // echo "Page déjà ajouter.";
            } else {
                echo "Page déjà ajouter.";
            }
        } else {
            $item_array = array();
            foreach ($page as $onep) :
                $item_array['refpage'] = $onep->getIdpage();
                $item_array['designationpage'] = $onep->getDesignationpage();
            endforeach;
            $_SESSION['pages'][0] = $item_array;
        }
        foreach ($_SESSION['pages'] as $key) :
            echo "<a class='dropdown-item' href='javascript:;'>".$key['designationpage']."</a>";
        endforeach;
        break;

    case 'autorisations':
        
        $autorisations = $managerPage->getOneAutorisation($_POST['refauto']);
        if (isset($_SESSION['autorisation'])) {
            $count = count($_SESSION['autorisation']);
            $item_array = array();
            foreach ($autorisations as $oneauto) :
                $item_array['refpage'] = $_POST['refpage'];
                $item_array['refauto'] = $oneauto->getIdauto();
                $item_array['designationauto'] = $oneauto->getDesignationauto();
            endforeach;
            $_SESSION['autorisation'][$count] = $item_array;

        } else {
            $item_array = array();
            foreach ($autorisations as $oneauto) :
                $item_array['refpage'] = $_POST['refpage'];
                $item_array['refauto'] = $oneauto->getIdauto();
                $item_array['designationauto'] = $oneauto->getDesignationauto();
            endforeach;
            $_SESSION['autorisation'][0] = $item_array;
        }
        // foreach ($_SESSION['autorisation'] as $key) :
        //     echo "<a class='dropdown-item' href='javascript:;'>".$key['refpage'].' auto : '.$key['designationauto']."</a>";
        // endforeach;
        // $commande = new Commande($_POST);
        // $commande->setIdentc(0);
        // $commande->setTotcom(count($_SESSION['commande']));
        // $commande->setCustomer($_POST['customer']);
        // $managerCommande->inertCommande($_POST['actionu'], 'inert_entcommande ', $commande);
        // foreach ($_SESSION['commande'] as $key => $value) :
        //     $commandesave = new Commande($value);
        //     $managerCommande->createObj($_POST['actionu'], 'obj_commande', $commandesave);
        // endforeach;
        // unset($_SESSION['commande']);
        // echo 'Commande enregistrée avec succès.';
        break;
    default:
        # code...
        break;
}