<?php
class ManagerUser extends Model
{
    public function getUsers()
    {
        return $this->getAll('get_users', 'User');
    }

    public function createObj($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?, ?, ?, ?)');
        $query->execute(
            array(
                $action,
                $object->getIduser(),
                $object->getNomuser(),
                $object->getPrenomuser(),
                $object->getUsername(),
                $object->getPassuser(),
                $object->getCompteuser()
            )
        );
    }
}