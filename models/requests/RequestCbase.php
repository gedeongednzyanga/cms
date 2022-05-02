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
            $_SESSION['idprod_fiche'] = $data->getPrixprod();
        endforeach;
        break;

    default:
        # code...
        break;
}