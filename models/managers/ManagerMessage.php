<?php
class ManagerMessage extends Model
{

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