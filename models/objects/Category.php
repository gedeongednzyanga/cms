<?php
class Category extends Cbase
{
    private $idcat;
    private $designationcat;

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
     * Get the value of idcat
     */
    public function getIdcat()
    {
        return $this->idcat;
    }

    /**
     * Set the value of idcat
     *
     * @return  self
     */
    public function setIdcat($idcat)
    {
        $this->idcat = $idcat;

        return $this;
    }

    /**
     * Get the value of designationcat
     */
    public function getDesignationcat()
    {
        return $this->designationcat;
    }

    /**
     * Set the value of designationcat
     *
     * @return  self
     */
    public function setDesignationcat($designationcat)
    {
        $this->designationcat = ucfirst(strtolower($designationcat));

        return $this;
    }
}