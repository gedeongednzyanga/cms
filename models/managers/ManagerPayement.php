<?php
class ManagerPayement extends Model
{

    public function createObj($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?, ?, ?)');
        $query->execute(array(
            $action,
            $object->getIdpaye(),
            $object->getMontantpaye(),
            $object->getRestepaye(),
            $object->getRefentc(),
            $object->getStatc()
        ));
    }
}