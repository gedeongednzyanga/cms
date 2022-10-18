<?php
class Page
{
    private $idpage;
    private $designationpage;
    private $refuser;
    private $refpage;
    private $idauto;
    private $designationauto;
    private $codeauto;
    private $refauto;
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
     * Get the value of idpage
     */ 
    public function getIdpage()
    {
        return $this->idpage;
    }

    /**
     * Set the value of idpage
     *
     * @return  self
     */ 
    public function setIdpage($idpage)
    {
        $this->idpage = $idpage;

        return $this;
    }

    /**
     * Get the value of designationpage
     */ 
    public function getDesignationpage()
    {
        return $this->designationpage;
    }

    /**
     * Set the value of designationpage
     *
     * @return  self
     */ 
    public function setDesignationpage($designationpage)
    {
        $this->designationpage = $designationpage;

        return $this;
    }

    /**
     * Get the value of refuser
     */ 
    public function getRefuser()
    {
        return $this->refuser;
    }

    /**
     * Set the value of refuser
     *
     * @return  self
     */ 
    public function setRefuser($refuser)
    {
        $this->refuser = $refuser;

        return $this;
    }

    /**
     * Get the value of refpage
     */ 
    public function getRefpage()
    {
        return $this->refpage;
    }

    /**
     * Set the value of refpage
     *
     * @return  self
     */ 
    public function setRefpage($refpage)
    {
        $this->refpage = $refpage;

        return $this;
    }

    /**
     * Get the value of idauto
     */ 
    public function getIdauto()
    {
        return $this->idauto;
    }

    /**
     * Set the value of idauto
     *
     * @return  self
     */ 
    public function setIdauto($idauto)
    {
        $this->idauto = $idauto;

        return $this;
    }

    /**
     * Get the value of designationauto
     */ 
    public function getDesignationauto()
    {
        return $this->designationauto;
    }

    /**
     * Set the value of designationauto
     *
     * @return  self
     */ 
    public function setDesignationauto($designationauto)
    {
        $this->designationauto = $designationauto;

        return $this;
    }

    /**
     * Get the value of codeauto
     */ 
    public function getCodeauto()
    {
        return $this->codeauto;
    }

    /**
     * Set the value of codeauto
     *
     * @return  self
     */ 
    public function setCodeauto($codeauto)
    {
        $this->codeauto = $codeauto;

        return $this;
    }

    /**
     * Get the value of refauto
     */ 
    public function getRefauto()
    {
        return $this->refauto;
    }

    /**
     * Set the value of refauto
     *
     * @return  self
     */ 
    public function setRefauto($refauto)
    {
        $this->refauto = $refauto;

        return $this;
    }
}