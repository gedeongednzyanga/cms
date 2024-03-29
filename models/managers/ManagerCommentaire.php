<?php
class ManagerCommentaire extends Model
{
    public function getCommentaires()
    {
        return $this->getAll('get_commentaires', 'Commentaire');
    }

    public function getCommentaireForNew($id)
    {
        return $this->getOne('get_commentaire_for_new', $id, 'Commentaire');
    }

    public function createObj($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?, ?, ?)');
        $query->execute(
            array(
                $action,
                $object->getIdcmt(),
                $object->getNomcm(),
                $object->getMailcm(),
                $object->getCommentaire(),
                $object->getRefnew()
            )
        );
    }
}