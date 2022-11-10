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
$managerLivraison = new ManagerLivraison();
$action = $_POST['action'];

switch ($action) {
    case 'load_commande':
        $commande = new Commande($_POST);
        $data = $managerCommande->getOneCommande($commande->getNumcom());
        if (count($data) > 0) {
            $products = '<option value="0">Produits commandés</option> <optgroup label="Produits commandés">';
            foreach ($data as $key => $value) {
                $products .= '<option value=' . $value->getIddetcom() . '>' . $value->getDesignationprod() . '</option>';
            }
            $products .= '</optgroup>';
            echo $products;
        } else
            echo 'Data empty';
        break;

    case 'load_one_commande':
        $commande = new Commande($_POST);
        $data = $managerCommande->getOneDetailCommande($commande->getIddetcom());
        if (count($data) > 0) {
            $quantite = 0;
            foreach ($data as $oneCommande) :
                $quantite = $oneCommande->getQuantitecom();
            endforeach;
            echo $quantite;
        } else {
            echo 'Data empty';
        }
        break;

    case 'add':

        $commande = new Commande($_POST);
        $data1 = $managerCommande->getOneDetailCommande($_POST['ref_detcom']);

        if (isset($_SESSION['livraison'])) {
            $item_array_id = array_column($_SESSION['livraison'], 'ref_detcom');
            if (!in_array($_POST['ref_detcom'], $item_array_id)) {
                $count = count($_SESSION['livraison']);
                $item_array = array();

                $item_array['ref_detcom'] = $_POST['ref_detcom'];
                $item_array['quantite_liv'] = $_POST['quantite_liv'];
                $item_array['quantite_rest'] = $_POST['quantite_rest'];
                $item_array['ref_entl'] = 0;

                foreach ($data1 as $data00) :
                    $item_array['idprod'] = $data00->getIdprod();
                    $item_array['produit'] = $data00->getDesignationprod();
                endforeach;

                $_SESSION['livraison'][$count] = $item_array;
                echo "Commande déjà ajouter.";
            } else {
                echo "Commande déjà ajouter.";
            }
        } else {
            $item_array = array();

            $item_array['ref_detcom'] = $_POST['ref_detcom'];
            $item_array['quantite_liv'] = $_POST['quantite_liv'];
            $item_array['quantite_rest'] = $_POST['quantite_rest'];
            $item_array['ref_entl'] = 0;

            foreach ($data1 as $data00) :
                $item_array['idprod'] = $data00->getIdprod();
                $item_array['produit'] = $data00->getDesignationprod();

            endforeach;

            $_SESSION['livraison'][0] = $item_array;
        }
        foreach ($_SESSION['livraison'] as $key) :
            echo "<option value=" . $key['ref_detcom'] . ">" . $key['produit'] . ' ' . '( ' . $key['quantite_liv'] . ' )' . "</option>";
        endforeach;
        break;

    case 'save':
        $livraison = new Livraison($_POST);
        if (count($_SESSION['livraison']) > 0) {
            $managerLivraison->inertEntlivraison($_POST['actionu'], 'inert_entlivraison', $livraison);
            foreach ($_SESSION['livraison'] as $key => $value) :
                $livraisonsave = new Livraison($value);
                $managerLivraison->createObj($_POST['actionu'], 'obj_livraison', $livraisonsave);
            endforeach;
            unset($_SESSION['livraison']);
            echo 'Livraison enregistrées avec success.';
        } else {
            echo 'Aucune livraison';
        }
        break;

    default:
        # code...
        break;
}
