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

$messageManager = new ManagerMessage();
$action = $_POST['action'];

switch ($action) {
    case 'send':
        $message = new Message($_POST);
        $messageManager->createObj($_POST['actionu'], 'obj_message', $message);
        echo 'Message envoyé avec succès';
        break;

    default:
        # code...
        break;
}