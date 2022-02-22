<?php
class Unite extends Cbase
{
    private $idu;
    private $designationu;

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
     * Get the value of idu
     */
    public function getIdu()
    {
        return $this->idu;
    }

    /**
     * Set the value of idu
     *
     * @return  self
     */
    public function setIdu($idu)
    {
        $this->idu = $idu;

        return $this;
    }

    /**
     * Get the value of designationu
     */
    public function getDesignationu()
    {
        return $this->designationu;
    }

    /**
     * Set the value of designationu
     *
     * @return  self
     */
    public function setDesignationu($designationu)
    {
        $this->designationu = $designationu;

        return $this;
    }
}