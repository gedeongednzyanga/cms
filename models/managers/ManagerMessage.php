<?php
class ManagerMessage extends Model
{

    public function getMessages()
    {
        return $this->getAll('get_message', 'Message');
    }

    public function getOneMessage($id)
    {
        return $this->getOne('get_one_message', $id, 'Message');
    }

    public function createObj($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $query->execute(
            array(
                $action,
                $object->getIdmsg(),
                $object->getSender(),
                $object->getReceiver(),
                $object->getEmails(),
                $object->getSujet(),
                $object->getMessage(),
                $object->getTypemsg(),
                $object->getStatutmsg()
            )
        );
    }
}