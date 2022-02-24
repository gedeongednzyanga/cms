<?php
class ManagerProduction extends Model
{

    public function getProductions()
    {
        return $this->getAll('get_production', 'Production');
    }

    public function createObj($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?, ?, ?, ?, ?)');
        $query->execute(
            array(
                $action,
                $object->getIdprod(),
                $object->getDesignationprod(),
                $object->getQuantitest(),
                $object->getStalert(),
                $object->getPrixprod(),
                $object->getRefcat(),
                $object->getRefunit(),
            )
        );
    }
}