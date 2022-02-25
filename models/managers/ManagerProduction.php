<?php
class ManagerProduction extends Model
{

    public function getProductions()
    {
        return $this->getAll('get_production', 'Production');
    }

    public function inertEntete($action, $procedure, $objet)
    {
        try {
            $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?)');
            $query->execute(array($action, $objet->getIdentp(), $objet->getTotprod()));
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function createObj($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?, ?, ?)');
        $query->execute(
            array(
                $action,
                $object->getIddetprod(),
                $object->getQuantiteprod(),
                $object->getQuantiteperd(),
                $object->getCarburant(),
                $object->getRefprod()
            )
        );
    }
}