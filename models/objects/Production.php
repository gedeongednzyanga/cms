<?php
class Production extends Product
{
    //entete
    private $identp;
    private $numprod;
    private $totprod;
    private $dateprod;

    //detail
    private $iddetprod;
    private $quantiteprod;
    private $quantiteperd;
    private $carburant;
    private $refprod;
    private $refentprod;
    private $quantiteets;

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
     * Get the value of entp
     */
    public function getIdentp()
    {
        return $this->identp;
    }

    /**
     * Set the value of entp
     *
     * @return  self
     */
    public function setIdentp($entp)
    {
        $this->identp = $entp;

        return $this;
    }

    /**
     * Get the value of numprod
     */
    public function getNumprod()
    {
        return $this->numprod;
    }

    /**
     * Set the value of numprod
     *
     * @return  self
     */
    public function setNumprod($numprod)
    {
        $this->numprod = $numprod;

        return $this;
    }

    /**
     * Get the value of totprod
     */
    public function getTotprod()
    {
        return $this->totprod;
    }

    /**
     * Set the value of totprod
     *
     * @return  self
     */
    public function setTotprod($totprod)
    {
        $this->totprod = $totprod;

        return $this;
    }

    /**
     * Get the value of dateprod
     */
    public function getDateprod()
    {
        return $this->dateprod;
    }

    /**
     * Set the value of dateprod
     *
     * @return  self
     */
    public function setDateprod($dateprod)
    {
        $this->dateprod = $dateprod;

        return $this;
    }

    /**
     * Get the value of iddetprod
     */
    public function getIddetprod()
    {
        return $this->iddetprod;
    }

    /**
     * Set the value of iddetprod
     *
     * @return  self
     */
    public function setIddetprod($iddetprod)
    {
        $this->iddetprod = $iddetprod;

        return $this;
    }

    /**
     * Get the value of quantiteprod
     */
    public function getQuantiteprod()
    {
        return $this->quantiteprod;
    }

    /**
     * Set the value of quantiteprod
     *
     * @return  self
     */
    public function setQuantiteprod($quantiteprod)
    {
        $this->quantiteprod = $quantiteprod;

        return $this;
    }

    /**
     * Get the value of quantiteperd
     */
    public function getQuantiteperd()
    {
        return $this->quantiteperd;
    }

    /**
     * Set the value of quantiteperd
     *
     * @return  self
     */
    public function setQuantiteperd($quantiteperd)
    {
        $this->quantiteperd = $quantiteperd;

        return $this;
    }

    /**
     * Get the value of carburant
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * Set the value of carburant
     *
     * @return  self
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;

        return $this;
    }

    /**
     * Get the value of refprod
     */
    public function getRefprod()
    {
        return $this->refprod;
    }

    /**
     * Set the value of refprod
     *
     * @return  self
     */
    public function setRefprod($refprod)
    {
        $this->refprod = $refprod;

        return $this;
    }

    /**
     * Get the value of refentprod
     */
    public function getRefentprod()
    {
        return $this->refentprod;
    }

    /**
     * Set the value of refentprod
     *
     * @return  self
     */
    public function setRefentprod($refentprod)
    {
        $this->refentprod = $refentprod;

        return $this;
    }

    /**
     * Get the value of quantiteets
     */
    public function getQuantiteets()
    {
        return $this->quantiteets;
    }

    /**
     * Set the value of quantiteets
     *
     * @return  self
     */
    public function setQuantiteets($quantiteets)
    {
        $this->quantiteets = $quantiteets;

        return $this;
    }
}