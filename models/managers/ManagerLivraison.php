<?php
class ManagerLivraison extends Model
{
    public function getEntLivraison()
    {
        return  $this->getAll('get_ent_livraison', 'Livraison');
    }

    public function inertEntlivraison($action, $procedure, $object)
    {
        try {
            $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?, ?, ?, ?)');
            $query->execute(
                array(
                    $action,
                    $object->getId_entl(),
                    $object->getExpediteur(),
                    $object->getDestinateur(),
                    $object->getTransporteur(),
                    $object->getNum_camion(),
                    $object->getPlaque()
                )
            );
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
    }

    public function createObj($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?, ?, ?, ?)');
        $query->execute(
            array(
                $action,
                $object->getId_detl(),
                $object->getQuantite_liv(),
                $object->getQuantite_rest(),
                $object->getRef_detcom(),
                $object->getRef_entl(),
                $object->getIdprod()
            )
        );
    }
}