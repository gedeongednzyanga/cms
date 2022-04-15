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

    public function getUnreadMessage()
    {
        return $this->getAll('_get_messages_non_l', 'Message');
    }

    public function changeMsgStatus($action, $id)
    {
        try {
            $query = $this->getBdd()->prepare('call change_msg_status (?, ?)');
            $query->execute(array($action, $id));
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
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