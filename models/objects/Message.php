<?php
class Message
{
    private $idmsg, $sender, $receiver, $emails, $sujet, $message, $typemsg, $statutmsg, $datemsg;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    private function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * Get the value of idmsg
     */
    public function getIdmsg()
    {
        return $this->idmsg;
    }

    /**
     * Set the value of idmsg
     *
     * @return  self
     */
    public function setIdmsg($idmsg)
    {
        $this->idmsg = $idmsg;

        return $this;
    }

    /**
     * Get the value of sender
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set the value of sender
     *
     * @return  self
     */
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get the value of receiver
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set the value of receiver
     *
     * @return  self
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get the value of emails
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Set the value of emails
     *
     * @return  self
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;

        return $this;
    }

    /**
     * Get the value of sujet
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set the value of sujet
     *
     * @return  self
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get the value of message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of typemsg
     */
    public function getTypemsg()
    {
        return $this->typemsg;
    }

    /**
     * Set the value of typemsg
     *
     * @return  self
     */
    public function setTypemsg($typemsg)
    {
        $this->typemsg = $typemsg;

        return $this;
    }

    /**
     * Get the value of statutmsg
     */
    public function getStatutmsg()
    {
        return $this->statutmsg;
    }

    /**
     * Set the value of statutmsg
     *
     * @return  self
     */
    public function setStatutmsg($statutmsg)
    {
        $this->statutmsg = $statutmsg;

        return $this;
    }

    /**
     * Get the value of datemsg
     */
    public function getDatemsg()
    {
        return $this->datemsg;
    }

    /**
     * Set the value of datemsg
     *
     * @return  self
     */
    public function setDatemsg($datemsg)
    {
        $this->datemsg = $datemsg;

        return $this;
    }
}