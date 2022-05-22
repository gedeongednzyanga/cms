<?php
class Carburant
{
    //Carburant
    private $idcarb;
    private $carbstok;

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
     * Get the value of idcarb
     */
    public function getIdcarb()
    {
        return $this->idcarb;
    }

    /**
     * Set the value of idcarb
     *
     * @return  self
     */
    public function setIdcarb($idcarb)
    {
        $this->idcarb = $idcarb;

        return $this;
    }

    /**
     * Get the value of carbdesign
     */
    public function getCarbdesign()
    {
        return $this->carbdesign;
    }

    /**
     * Set the value of carbdesign
     *
     * @return  self
     */
    public function setCarbdesign($carbdesign)
    {
        $this->carbdesign = $carbdesign;

        return $this;
    }

    /**
     * Get the value of carbstock
     */

    /**
     * Get the value of carbstok
     */
    public function getCarbstok()
    {
        return $this->carbstok;
    }

    /**
     * Set the value of carbstok
     *
     * @return  self
     */
    public function setCarbstok($carbstok)
    {
        $this->carbstok = $carbstok;

        return $this;
    }
}