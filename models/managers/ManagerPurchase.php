<?php
class ManagerProduction extends Model
{

    public function getProductions()
    {
        return $this->getAll('get_approvisionnement', 'Purchase');
    }

    public function inertApprov($action, $procedure, $objet)
    {
        try {
            $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?)');
            $query->execute(array($action, $objet->getIdapprov(), $objet->getQuantiteapp()));
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function createObj($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?, ?)');
        $query->execute(
            array(
                $action,
                $object->getIddetapp(),
                $object->getQuantiteapp(),
                $object->getQuantitecmd(),
                $object->getRefprodc()
            )
        );
    }
}