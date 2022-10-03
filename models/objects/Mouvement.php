<?php
class Mouvement extends Carburant
{
    //Mouvement

    private $idmouv;
    private $typemiuv;
    private $quantite_entr;
    private $quantite_sort;
    private $quantite_stoc;
    private $respo;
    private $refcarb;
    private $datemouv;
    private $quantite;

    /**
     * Get the value of idmouv
     */
    public function getIdmouv()
    {
        return $this->idmouv;
    }

    /**
     * Set the value of idmouv
     *
     * @return  self
     */
    public function setIdmouv($idmouv)
    {
        $this->idmouv = $idmouv;

        return $this;
    }

    /**
     * Get the value of typemiuv
     */
    public function getTypemiuv()
    {
        return $this->typemiuv;
    }

    /**
     * Set the value of typemiuv
     *
     * @return  self
     */
    public function setTypemiuv($typemiuv)
    {
        $this->typemiuv = $typemiuv;

        return $this;
    }

    /**
     * Get the value of quantite_entr
     */
    public function getQuantite_entr()
    {
        return $this->quantite_entr;
    }

    /**
     * Set the value of quantite_entr
     *
     * @return  self
     */
    public function setQuantite_entr($quantite_entr)
    {
        $this->quantite_entr = $quantite_entr;

        return $this;
    }

    /**
     * Get the value of quantite_sort
     */
    public function getQuantite_sort()
    {
        return $this->quantite_sort;
    }

    /**
     * Set the value of quantite_sort
     *
     * @return  self
     */
    public function setQuantite_sort($quantite_sort)
    {
        $this->quantite_sort = $quantite_sort;

        return $this;
    }

    /**
     * Get the value of quantite_stoc
     */
    public function getQuantite_stoc()
    {
        return $this->quantite_stoc;
    }

    /**
     * Set the value of quantite_stoc
     *
     * @return  self
     */
    public function setQuantite_stoc($quantite_stoc)
    {
        $this->quantite_stoc = $quantite_stoc;

        return $this;
    }

    /**
     * Get the value of respo
     */
    public function getRespo()
    {
        return $this->respo;
    }

    /**
     * Set the value of respo
     *
     * @return  self
     */
    public function setRespo($respo)
    {
        $this->respo = $respo;

        return $this;
    }

    /**
     * Get the value of refcarb
     */
    public function getRefcarb()
    {
        return $this->refcarb;
    }

    /**
     * Set the value of refcarb
     *
     * @return  self
     */
    public function setRefcarb($refcarb)
    {
        $this->refcarb = $refcarb;

        return $this;
    }

    /**
     * Get the value of datemouv
     */
    public function getDatemouv()
    {
        return $this->datemouv;
    }

    /**
     * Set the value of datemouv
     *
     * @return  self
     */
    public function setDatemouv($datemouv)
    {
        $this->datemouv = $datemouv;

        return $this;
    }

    /**
     * Get the value of quantite
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of quantite
     *
     * @return  self
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }
}