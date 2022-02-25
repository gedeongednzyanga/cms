<?php
class Purchase
{
    //Entete
    private $idapprov;
    private $numapprov;
    private $quantiteapp;
    private $dateapprov;

    //Detail
    private $iddetapp;
    private $quantitecmd;
    private $refprodc;
    private $refdetapp;

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
     * Get the value of numapprov
     */
    public function getNumapprov()
    {
        return $this->numapprov;
    }

    /**
     * Set the value of numapprov
     *
     * @return  self
     */
    public function setNumapprov($numapprov)
    {
        $this->numapprov = $numapprov;

        return $this;
    }

    /**
     * Get the value of quantiteapp
     */
    public function getQuantiteapp()
    {
        return $this->quantiteapp;
    }

    /**
     * Set the value of quantiteapp
     *
     * @return  self
     */
    public function setQuantiteapp($quantiteapp)
    {
        $this->quantiteapp = $quantiteapp;

        return $this;
    }

    /**
     * Get the value of dateapprov
     */
    public function getDateapprov()
    {
        return $this->dateapprov;
    }

    /**
     * Set the value of dateapprov
     *
     * @return  self
     */
    public function setDateapprov($dateapprov)
    {
        $this->dateapprov = $dateapprov;

        return $this;
    }

    /**
     * Get the value of iddetapp
     */
    public function getIddetapp()
    {
        return $this->iddetapp;
    }

    /**
     * Set the value of iddetapp
     *
     * @return  self
     */
    public function setIddetapp($iddetapp)
    {
        $this->iddetapp = $iddetapp;

        return $this;
    }

    /**
     * Get the value of quantitecmd
     */
    public function getQuantitecmd()
    {
        return $this->quantitecmd;
    }

    /**
     * Set the value of quantitecmd
     *
     * @return  self
     */
    public function setQuantitecmd($quantitecmd)
    {
        $this->quantitecmd = $quantitecmd;

        return $this;
    }

    /**
     * Get the value of refprodc
     */
    public function getRefprodc()
    {
        return $this->refprodc;
    }

    /**
     * Set the value of refprodc
     *
     * @return  self
     */
    public function setRefprodc($refprodc)
    {
        $this->refprodc = $refprodc;

        return $this;
    }

    /**
     * Get the value of refdetapp
     */
    public function getRefdetapp()
    {
        return $this->refdetapp;
    }

    /**
     * Set the value of refdetapp
     *
     * @return  self
     */
    public function setRefdetapp($refdetapp)
    {
        $this->refdetapp = $refdetapp;

        return $this;
    }

    /**
     * Get the value of idapprov
     */
    public function getIdapprov()
    {
        return $this->idapprov;
    }

    /**
     * Set the value of idapprov
     *
     * @return  self
     */
    public function setIdapprov($idapprov)
    {
        $this->idapprov = $idapprov;

        return $this;
    }
}