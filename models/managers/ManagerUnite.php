<?php
class ManagerUnite extends Model
{
    public function getUnites()
    {
        return $this->getAll('', 'Unite');
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