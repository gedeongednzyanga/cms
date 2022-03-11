<?php
class Commande extends Product
{
    //Entete
    private $identc;
    private $numcom;
    private $datecom;
    private $customer;
    private $totcom;
    private $statcom;

    //Detail
    private $iddetcom;
    private $quantitecom;
    private $refprodc;
    private $refentcom;

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
     * Get the value of identc
     */
    public function getIdentc()
    {
        return $this->identc;
    }

    /**
     * Set the value of identc
     *
     * @return  self
     */
    public function setIdentc($identc)
    {
        $this->identc = $identc;

        return $this;
    }

    /**
     * Get the value of numcom
     */
    public function getNumcom()
    {
        return $this->numcom;
    }

    /**
     * Set the value of numcom
     *
     * @return  self
     */
    public function setNumcom($numcom)
    {
        $this->numcom = $numcom;

        return $this;
    }

    /**
     * Get the value of datecom
     */
    public function getDatecom()
    {
        return $this->datecom;
    }

    /**
     * Set the value of datecom
     *
     * @return  self
     */
    public function setDatecom($datecom)
    {
        $this->datecom = $datecom;

        return $this;
    }

    /**
     * Get the value of customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set the value of customer
     *
     * @return  self
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get the value of iddetcom
     */
    public function getIddetcom()
    {
        return $this->iddetcom;
    }

    /**
     * Set the value of iddetcom
     *
     * @return  self
     */
    public function setIddetcom($iddetcom)
    {
        $this->iddetcom = $iddetcom;

        return $this;
    }

    /**
     * Get the value of quantitecom
     */
    public function getQuantitecom()
    {
        return $this->quantitecom;
    }

    /**
     * Set the value of quantitecom
     *
     * @return  self
     */
    public function setQuantitecom($quantitecom)
    {
        $this->quantitecom = $quantitecom;

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
     * Get the value of refentcom
     */
    public function getRefentcom()
    {
        return $this->refentcom;
    }

    /**
     * Set the value of refentcom
     *
     * @return  self
     */
    public function setRefentcom($refentcom)
    {
        $this->refentcom = $refentcom;

        return $this;
    }

    /**
     * Get the value of totcom
     */
    public function getTotcom()
    {
        return $this->totcom;
    }

    /**
     * Set the value of totcom
     *
     * @return  self
     */
    public function setTotcom($totcom)
    {
        $this->totcom = $totcom;

        return $this;
    }

    /**
     * Get the value of statcom
     */
    public function getStatcom()
    {
        return $this->statcom;
    }

    /**
     * Set the value of statcom
     *
     * @return  self
     */
    public function setStatcom($statcom)
    {
        $this->statcom = $statcom;

        return $this;
    }
}