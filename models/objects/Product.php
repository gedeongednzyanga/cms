<?php
class Product
{
    private $idprod;
    private $designationprod;
    private $quantitest;
    private $stalert;
    private $prixprod;
    private $refcat;
    private $refunit;

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
     * Get the value of idprod
     */
    public function getIdprod()
    {
        return $this->idprod;
    }

    /**
     * Set the value of idprod
     *
     * @return  self
     */
    public function setIdprod($idprod)
    {
        $this->idprod = $idprod;

        return $this;
    }

    /**
     * Get the value of designationprod
     */
    public function getDesignationprod()
    {
        return $this->designationprod;
    }

    /**
     * Set the value of designationprod
     *
     * @return  self
     */
    public function setDesignationprod($designationprod)
    {
        $this->designationprod = $designationprod;

        return $this;
    }

    /**
     * Get the value of quantitest
     */
    public function getQuantitest()
    {
        return $this->quantitest;
    }

    /**
     * Set the value of quantitest
     *
     * @return  self
     */
    public function setQuantitest($quantitest)
    {
        $this->quantitest = $quantitest;

        return $this;
    }

    /**
     * Get the value of stalert
     */
    public function getStalert()
    {
        return $this->stalert;
    }

    /**
     * Set the value of stalert
     *
     * @return  self
     */
    public function setStalert($stalert)
    {
        $this->stalert = $stalert;

        return $this;
    }

    /**
     * Get the value of prixprod
     */
    public function getPrixprod()
    {
        return $this->prixprod;
    }

    /**
     * Set the value of prixprod
     *
     * @return  self
     */
    public function setPrixprod($prixprod)
    {
        $this->prixprod = $prixprod;

        return $this;
    }

    /**
     * Get the value of refcat
     */
    public function getRefcat()
    {
        return $this->refcat;
    }

    /**
     * Set the value of refcat
     *
     * @return  self
     */
    public function setRefcat($refcat)
    {
        $this->refcat = $refcat;

        return $this;
    }

    /**
     * Get the value of refunit
     */
    public function getRefunit()
    {
        return $this->refunit;
    }

    /**
     * Set the value of refunit
     *
     * @return  self
     */
    public function setRefunit($refunit)
    {
        $this->refunit = $refunit;

        return $this;
    }
}