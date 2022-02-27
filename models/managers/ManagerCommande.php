<?php
class ManagerCommande extends Model
{

    public function getCommandes()
    {
        return $this->getAll('get_commandes', 'Commande');
    }

    public function getOneProduct($id)
    {
        return $this->getTrie('get_oneProduct', 4, $id, 'Commande');
    }

    public function inertCommande($action, $procedure, $objet)
    {
        try {
            $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?)');
            $query->execute(array(
                $action,
                $objet->getIdentc(),
                $objet->getTotcom(),
                $objet->getCustomer()
            ));
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function createObj($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?)');
        $query->execute(
            array(
                $action,
                $object->getIddetcom(),
                $object->getQuantitecom(),
                $object->getRefprodc()
            )
        );
    }
}