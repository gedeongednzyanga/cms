<?php
class ManagerCategory extends Model
{
    public function getCategories()
    {
        return $this->getAll('', 'Category');
    }

    public function createObj($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?)');
        $query->execute(
            array(
                $action,
                $object->getId(),
                $object->getDesignation()
            )
        );
    }
}