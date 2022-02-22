<?php
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
$managerProject = new ManagerProduct();
$action = $_POST['action'];

switch ($action) {
    case 'category':
        $category = new Category($_POST);
        $managerCategory->createObj($_POST['actionu'], 'obj_category', $category);
        echo 'Bien enregistrée';
        break;

    case 'unite':
        $unite = new Unite($_POST);
        $managerUnite->createObj($_POST['actionu'], 'obj_unite', $unite);
        echo 'Bien enregistrée';
        break;

    case 'product':
        $product = new Product($_POST);
        $managerUnite->createObj($_POST['actionu'], 'obj_product', $product);
        echo 'Bien enregistrée';
        break;

    default:
        # code...
        break;
}