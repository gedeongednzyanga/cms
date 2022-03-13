<?php
class Livraison
{
    //Entete Livraison

    private $id_entl;
    private $num_liv;
    private $expediteur;
    private $destinateur;
    private $transporteur;
    private $num_camion;
    private $plaque;
    private $date_liv;

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
     * Get the value of id_entl
     */
    public function getId_entl()
    {
        return $this->id_entl;
    }

    /**
     * Set the value of id_entl
     *
     * @return  self
     */
    public function setId_entl($id_entl)
    {
        $this->id_entl = $id_entl;

        return $this;
    }

    /**
     * Get the value of num_liv
     */
    public function getNum_liv()
    {
        return $this->num_liv;
    }

    /**
     * Set the value of num_liv
     *
     * @return  self
     */
    public function setNum_liv($num_liv)
    {
        $this->num_liv = $num_liv;

        return $this;
    }

    /**
     * Get the value of expediteur
     */
    public function getExpediteur()
    {
        return $this->expediteur;
    }

    /**
     * Set the value of expediteur
     *
     * @return  self
     */
    public function setExpediteur($expediteur)
    {
        $this->expediteur = $expediteur;

        return $this;
    }

    /**
     * Get the value of destinateur
     */
    public function getDestinateur()
    {
        return $this->destinateur;
    }

    /**
     * Set the value of destinateur
     *
     * @return  self
     */
    public function setDestinateur($destinateur)
    {
        $this->destinateur = $destinateur;

        return $this;
    }

    /**
     * Get the value of transporteur
     */
    public function getTransporteur()
    {
        return $this->transporteur;
    }

    /**
     * Set the value of transporteur
     *
     * @return  self
     */
    public function setTransporteur($transporteur)
    {
        $this->transporteur = $transporteur;

        return $this;
    }

    /**
     * Get the value of num_camion
     */
    public function getNum_camion()
    {
        return $this->num_camion;
    }

    /**
     * Set the value of num_camion
     *
     * @return  self
     */
    public function setNum_camion($num_camion)
    {
        $this->num_camion = $num_camion;

        return $this;
    }

    /**
     * Get the value of plaque
     */
    public function getPlaque()
    {
        return $this->plaque;
    }

    /**
     * Set the value of plaque
     *
     * @return  self
     */
    public function setPlaque($plaque)
    {
        $this->plaque = $plaque;

        return $this;
    }

    /**
     * Get the value of date_liv
     */
    public function getDate_liv()
    {
        return $this->date_liv;
    }

    /**
     * Set the value of date_liv
     *
     * @return  self
     */
    public function setDate_liv($date_liv)
    {
        $this->date_liv = $date_liv;

        return $this;
    }
}