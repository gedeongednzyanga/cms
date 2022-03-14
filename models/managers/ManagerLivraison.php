<?php
class ManagerLivraison extends Model
{

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
                    $object->setNum_camion(),
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
            array()
        );
    }
}