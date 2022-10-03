<?php
class ManagerCommande extends Model
{

    public function getCommandes()
    {
        return $this->getAll('get_commandes', 'Commande');
    }

    public function getLastCommandes()
    {
        return $this->getAll('get_last_commande', 'Commande');
    }

    public function getOneCommande($id)
    {
        return $this->getOne('get_one_commande',  $id, 'Commande');
    }

    public function getOneEntCommande($id)
    {
        return $this->getOne('get_one_ent_commande', $id, 'Commande');
    }

    public function getOneDetailCommande($id)
    {
        return $this->getOne('get_one_detail_com', $id, 'Commande');
    }

    public function getOneProduct($id)
    {
        return $this->getTrie('get_oneProduct', 4, $id, 'Commande');
    }

    public function getEntCommande()
    {
        return $this->getAll('get_ent_commande', 'Commande');
    }

    public function getClientWithCredit()
    {
        return $this->getAll('get_credit_client', 'Commande');
    }

    public function getClientNoCredit()
    {
        return $this->getAll('get_client_no_credit', 'Commande');
    }

    public function calculSommetotcommande($id)
    {
        $sum  = 0;
        try {
            $query = $this->getBdd()->prepare('CALL calcul_totalmc (?)');
            $query->execute(array($id));
            $sum = $query->fetchColumn();
            return round((float) $sum, 2);
        } catch (PDOException $ex) {
            throw new Exception('Error : ' . $ex->getMessage());
        }
    }

    public function chatCommande($mois, $annee)
    {
        return $this->getTrie('get_chat1', $mois, $annee, 'Commande');
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