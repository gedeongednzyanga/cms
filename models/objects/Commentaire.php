<?php
class Commentaire
{
    private $idcmt;
    private $nomcm;
    private $mailcm;
    private $commentaire;
    private $refnew;

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
     * Get the value of idcmt
     */
    public function getIdcmt()
    {
        return $this->idcmt;
    }

    /**
     * Set the value of idcmt
     *
     * @return  self
     */
    public function setIdcmt($idcmt)
    {
        $this->idcmt = $idcmt;

        return $this;
    }

    /**
     * Get the value of nomcm
     */
    public function getNomcm()
    {
        return $this->nomcm;
    }

    /**
     * Set the value of nomcm
     *
     * @return  self
     */
    public function setNomcm($nomcm)
    {
        $this->nomcm = $nomcm;

        return $this;
    }

    /**
     * Get the value of mailcm
     */
    public function getMailcm()
    {
        return $this->mailcm;
    }

    /**
     * Set the value of mailcm
     *
     * @return  self
     */
    public function setMailcm($mailcm)
    {
        $this->mailcm = $mailcm;

        return $this;
    }

    /**
     * Get the value of commentaire
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set the value of commentaire
     *
     * @return  self
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get the value of refnew
     */
    public function getRefnew()
    {
        return $this->refnew;
    }

    /**
     * Set the value of refnew
     *
     * @return  self
     */
    public function setRefnew($refnew)
    {
        $this->refnew = $refnew;

        return $this;
    }
}