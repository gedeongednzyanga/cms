<?php
class News
{
    private $idn;
    private $titleinfo;
    private $information;
    private $infoimage;
    private $infotype;
    private $dateinfo;

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
     * Get the value of idn
     */
    public function getIdn()
    {
        return $this->idn;
    }

    /**
     * Set the value of idn
     *
     * @return  self
     */
    public function setIdn($idn)
    {
        $this->idn = $idn;

        return $this;
    }

    /**
     * Get the value of titleinfo
     */
    public function getTitleinfo()
    {
        return $this->titleinfo;
    }

    /**
     * Set the value of titleinfo
     *
     * @return  self
     */
    public function setTitleinfo($titleinfo)
    {
        $this->titleinfo = $titleinfo;

        return $this;
    }

    /**
     * Get the value of information
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set the value of information
     *
     * @return  self
     */
    public function setInformation($information)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get the value of infoimage
     */
    public function getInfoimage()
    {
        return $this->infoimage;
    }

    /**
     * Set the value of infoimage
     *
     * @return  self
     */
    public function setInfoimage($infoimage)
    {
        $this->infoimage = $infoimage;

        return $this;
    }

    /**
     * Get the value of infotype
     */
    public function getInfotype()
    {
        return $this->infotype;
    }

    /**
     * Set the value of infotype
     *
     * @return  self
     */
    public function setInfotype($infotype)
    {
        $this->infotype = $infotype;

        return $this;
    }

    /**
     * Get the value of dateinfo
     */
    public function getDateinfo()
    {
        return $this->dateinfo;
    }

    /**
     * Set the value of dateinfo
     *
     * @return  self
     */
    public function setDateinfo($dateinfo)
    {
        $this->dateinfo = $dateinfo;

        return $this;
    }
}