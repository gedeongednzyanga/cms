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

$extension = array('image/jpeg', 'image/jpg', 'image/png');
$managerNews = new ManagerNews();
$managerCommentaire = new ManagerCommentaire();
$action = $_POST['action'];

switch ($action) {
    case 'publish':

        $news = new News($_POST);
        if (in_array($_FILES['infoimage']['type'], $extension)) {
            $infoimage = time() . '_' . $_FILES['infoimage']['name'];
            $depot = "../../views/pages/assets/images/news/" . $infoimage;
            $news->setInfoimage($infoimage);

            if (move_uploaded_file($_FILES['infoimage']['tmp_name'], $depot)) {
                $managerNews->createObj($_POST['actionu'], "obj_information", $news);
                echo 'Information publiée avec succès.';
            } else {
                echo "Impossible de charger la photo.";
            }
        } else {
            echo "Fichier image non autorisé. (.jpg, .jpeg et .png sont autorisés.)";
        }
        break;

    case 'comment':
        $commentaire = new Commentaire($_POST);
        $managerCommentaire->createObj($_POST['actionu'], 'obj_commentaire', $commentaire);
        if ($_POST['actionu'] == 1)
            echo 'Commentaire envoyé avec succès.';
        else if ($_POST['actionu'] == 3)
            echo 'Commentaire supprimé avec succès.';
        break;

    default:
        # code...
        break;
}