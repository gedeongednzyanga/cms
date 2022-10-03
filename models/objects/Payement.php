<?php

class Payement
{
    private $idpaye, $montantpaye, $restepaye, $datepaye, $refentc, $statc;

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
     * Get the value of idpaye
     */
    public function getIdpaye()
    {
        return $this->idpaye;
    }

    /**
     * Set the value of idpaye
     *
     * @return  self
     */
    public function setIdpaye($idpaye)
    {
        $this->idpaye = $idpaye;

        return $this;
    }

    /**
     * Get the value of montantpaye
     */
    public function getMontantpaye()
    {
        return $this->montantpaye;
    }

    /**
     * Set the value of montantpaye
     *
     * @return  self
     */
    public function setMontantpaye($montantpaye)
    {
        $this->montantpaye = $montantpaye;

        return $this;
    }

    /**
     * Get the value of restepaye
     */
    public function getRestepaye()
    {
        return $this->restepaye;
    }

    /**
     * Set the value of restepaye
     *
     * @return  self
     */
    public function setRestepaye($restepaye)
    {
        $this->restepaye = $restepaye;

        return $this;
    }

    /**
     * Get the value of datepaye
     */
    public function getDatepaye()
    {
        return $this->datepaye;
    }

    /**
     * Set the value of datepaye
     *
     * @return  self
     */
    public function setDatepaye($datepaye)
    {
        $this->datepaye = $datepaye;

        return $this;
    }

    /**
     * Get the value of refentc
     */
    public function getRefentc()
    {
        return $this->refentc;
    }

    /**
     * Set the value of refentc
     *
     * @return  self
     */
    public function setRefentc($refentc)
    {
        $this->refentc = $refentc;

        return $this;
    }

    /**
     * Get the value of statc
     */
    public function getStatc()
    {
        return $this->statc;
    }

    /**
     * Set the value of statc
     *
     * @return  self
     */
    public function setStatc($statc)
    {
        $this->statc = $statc;

        return $this;
    }
}