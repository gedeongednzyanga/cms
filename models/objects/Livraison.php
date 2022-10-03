<?php
class Livraison extends Product
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

    //Detatil Livraison
    private $id_detl;
    private $quantite_liv;
    private $quantite_rest;
    private $ref_detcom;
    private $ref_entli;
    private $ref_entl;

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

    /**
     * Get the value of id_detl
     */
    public function getId_detl()
    {
        return $this->id_detl;
    }

    /**
     * Set the value of id_detl
     *
     * @return  self
     */
    public function setId_detl($id_detl)
    {
        $this->id_detl = $id_detl;

        return $this;
    }

    /**
     * Get the value of quantite_liv
     */
    public function getQuantite_liv()
    {
        return $this->quantite_liv;
    }

    /**
     * Set the value of quantite_liv
     *
     * @return  self
     */
    public function setQuantite_liv($quantite_liv)
    {
        $this->quantite_liv = $quantite_liv;

        return $this;
    }

    /**
     * Get the value of quantite_rest
     */
    public function getQuantite_rest()
    {
        return $this->quantite_rest;
    }

    /**
     * Set the value of quantite_rest
     *
     * @return  self
     */
    public function setQuantite_rest($quantite_rest)
    {
        $this->quantite_rest = $quantite_rest;

        return $this;
    }

    /**
     * Get the value of ref_detcom
     */
    public function getRef_detcom()
    {
        return $this->ref_detcom;
    }

    /**
     * Set the value of ref_detcom
     *
     * @return  self
     */
    public function setRef_detcom($ref_detcom)
    {
        $this->ref_detcom = $ref_detcom;

        return $this;
    }

    /**
     * Get the value of ref_entli
     */
    public function getRef_entli()
    {
        return $this->ref_entli;
    }

    /**
     * Set the value of ref_entli
     *
     * @return  self
     */
    public function setRef_entli($ref_entli)
    {
        $this->ref_entli = $ref_entli;

        return $this;
    }

    /**
     * Get the value of ref_entl
     */
    public function getRef_entl()
    {
        return $this->ref_entl;
    }

    /**
     * Set the value of ref_entl
     *
     * @return  self
     */
    public function setRef_entl($ref_entl)
    {
        $this->ref_entl = $ref_entl;

        return $this;
    }
}