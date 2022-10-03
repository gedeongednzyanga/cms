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
$managerProduction = new ManagerProduction();
$managerCommande = new ManagerCommande();
$action = $_POST['action'];

switch ($action) {
    case 'category':
        $category = new Category($_POST);
        $managerCategory->createObj($_POST['actionu'], 'obj_category', $category);
        echo 'Catégorie enregistrée avec succès.';
        break;

    case 'unite':
        $unite = new Unite($_POST);
        $managerUnite->createObj($_POST['actionu'], 'obj_unite', $unite);
        echo 'Mesure enregistrée avec succès.';
        break;

    case 'product':
        $product = new Product($_POST);
        $managerProduct->createObj($_POST['actionu'], 'obj_product', $product);
        echo 'Produit enregistré avec succès.';
        break;

    case 'loading':
        $product = $managerProduct->getOneProduct($_POST['refprodc']);
        foreach ($product as $prod) :
            echo $prod->getQuantitest();
        endforeach;
        break;

    case 'oneprod':
        $product = $managerProduct->getOneProduct($_POST['idprod']);
        $prodc = [];
        foreach ($product as $data) :
            $prodc['prix'] = $data->getPrixprod();
            $prodc['alertSt'] = $data->getStalert();
        endforeach;
        echo json_encode($prodc);
        break;

    case 'oneprod2':
        $product = $managerProduct->getOneProduct($_POST['refproduit']);
        foreach ($product as $data) :
            $_SESSION['idprod_fiche'] = $data->getIdprod();
        endforeach;
        break;

    case 'chatProduction':

        //CHAT PRODUCTION
        $_cProduction = [];
        for ($i = 1; $i <= 12; $i++) {
            $datChat = $managerProduction->chatProduction($i, 2022);
            if ($i < 10) {
                foreach ($datChat as $cProd) :
                    $row = 'm' . $cProd->getMois();
                    $_cProduction[$row] = $cProd->getSomme();
                endforeach;
            }
        }

        for ($j = 1; $j <= 12; $j++) {
            if ($j < 10) {
                $rw = 'm0' . $j;
                if (!array_key_exists($rw, $_cProduction))
                    $_cProduction[$rw]  = 0;
            } else {
                $rw = 'm' . $j;
                if (!array_key_exists($rw, $_cProduction))
                    $_cProduction[$rw]  = 0;
            }
        }

        //CHAT COMMANDE
        for ($i = 1; $i <= 12; $i++) {
            $datChat1 = $managerCommande->chatCommande($i, 2022);
            if ($i < 10) {
                foreach ($datChat1 as $cCom) :
                    $row = 'c' . $cCom->getMois();
                    $_cProduction[$row] = $cCom->getSomme();
                endforeach;
            }
        }
        for ($j = 1; $j <= 12; $j++) {
            if ($j < 10) {
                $rw = 'c0' . $j;
                if (!array_key_exists($rw, $_cProduction))
                    $_cProduction[$rw]  = 0;
            } else {
                $rw = 'c' . $j;
                if (!array_key_exists($rw, $_cProduction))
                    $_cProduction[$rw]  = 0;
            }
        }

        echo json_encode($_cProduction);
        break;

    default:
        # code...
        break;
}