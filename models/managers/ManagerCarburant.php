<?php
class ManagerCarburant extends Model
{
    public function getCarburants()
    {
        return $this->getAll('get_carburant', 'Carburant');
    }

    public function getMouvementCarburant()
    {
        return $this->getAll('get_mouv_carburant', 'Mouvement');
    }

    /**
     *
     * @param mixed $action
     * @param mixed $procedure
     * @param mixed $object
     *
     * @return mixed
     */
    function createObj($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?)');
        $query->execute(array($action, $object->getIdcarb(), $object->getCarbdesign()));
    }

    function createObjMouv($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?, ?, ?, ?)');
        $query->execute(array(
            $action, $object->getIdmouv(), $object->getTypemiuv(), $object->getQuantite_entr(),
            $object->getQuantite_sort(), $object->getRespo(), $object->getRefcarb()
        ));
    }
}