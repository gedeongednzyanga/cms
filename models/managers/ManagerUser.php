<?php
class ManagerUser extends Model
{
    public function getUsers()
    {
        return $this->getAll('get_users', 'User');
    }

    public function getLastUserId(){
        $query = $this->getBdd()->query('SELECT MAX(iduser) idu FROM utilisateur;');
        $query->execute();
        $id = $query->fetchColumn();
        return $id;
    }

    public function connexion($username, $password, $obj)
    {
        try {
            $rows = [];
            $query = $this->getBdd()->prepare('call test_user (?, ?)');
            $query->execute(array($username, $password));
            while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                $rows[] = new $obj($data);
            }
            $query->closeCursor();
            return $rows;
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
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