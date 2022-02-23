<?php
class ManagerProduct extends Model
{
    public function getProducts()
    {
        return $this->getAll('', 'Product');
    }

    public function get8Products()
    {
        return $this->getAll('get_8product', 'Product');
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