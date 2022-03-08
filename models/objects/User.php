<?php
class User
{
    private $iduser;
    private $nomuser;
    private $prenomuser;
    private $username;
    private $passuser;
    private $compteuser;

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
     * Get the value of iduser
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set the value of iduser
     *
     * @return  self
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get the value of nomuser
     */
    public function getNomuser()
    {
        return $this->nomuser;
    }

    /**
     * Set the value of nomuser
     *
     * @return  self
     */
    public function setNomuser($nomuser)
    {
        $this->nomuser = $nomuser;

        return $this;
    }

    /**
     * Get the value of prenomuser
     */
    public function getPrenomuser()
    {
        return $this->prenomuser;
    }

    /**
     * Set the value of prenomuser
     *
     * @return  self
     */
    public function setPrenomuser($prenomuser)
    {
        $this->prenomuser = $prenomuser;

        return $this;
    }

    /**
     * Get the value of username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of passuser
     */
    public function getPassuser()
    {
        return $this->passuser;
    }

    /**
     * Set the value of passuser
     *
     * @return  self
     */
    public function setPassuser($passuser)
    {
        $this->passuser = $passuser;

        return $this;
    }

    /**
     * Get the value of compteuser
     */
    public function getCompteuser()
    {
        return $this->compteuser;
    }

    /**
     * Set the value of compteuser
     *
     * @return  self
     */
    public function setCompteuser($compteuser)
    {
        $this->compteuser = $compteuser;

        return $this;
    }
}