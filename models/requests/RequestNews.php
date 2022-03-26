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

$managerNews = new ManagerNews();
$action = $_POST['action'];

switch ($action) {
    case 'publish':
        $news = new News($_POST);
        break;

    default:
        # code...
        break;
}