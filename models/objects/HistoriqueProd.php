<?php
class HistoriqueProd
{
    private $idh;
    private $libelle;
    private $quantite_entr;
    private $prix_entr;
    private $quantite_sort;
    private $prix_sort;
    private $stockp;
    private $date_op;
    private $refprodh;

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
     * Get the value of idh
     */
    public function getIdh()
    {
        return $this->idh;
    }

    /**
     * Set the value of idh
     *
     * @return  self
     */
    public function setIdh($idh)
    {
        $this->idh = $idh;

        return $this;
    }

    /**
     * Get the value of libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of quantite_entr
     */
    public function getQuantite_entr()
    {
        return $this->quantite_entr;
    }

    /**
     * Set the value of quantite_entr
     *
     * @return  self
     */
    public function setQuantite_entr($quantite_entr)
    {
        $this->quantite_entr = $quantite_entr;

        return $this;
    }

    /**
     * Get the value of prix_entr
     */
    public function getPrix_entr()
    {
        return $this->prix_entr;
    }

    /**
     * Set the value of prix_entr
     *
     * @return  self
     */
    public function setPrix_entr($prix_entr)
    {
        $this->prix_entr = $prix_entr;

        return $this;
    }

    /**
     * Get the value of quantite_sort
     */
    public function getQuantite_sort()
    {
        return $this->quantite_sort;
    }

    /**
     * Set the value of quantite_sort
     *
     * @return  self
     */
    public function setQuantite_sort($quantite_sort)
    {
        $this->quantite_sort = $quantite_sort;

        return $this;
    }

    /**
     * Get the value of prix_sort
     */
    public function getPrix_sort()
    {
        return $this->prix_sort;
    }

    /**
     * Set the value of prix_sort
     *
     * @return  self
     */
    public function setPrix_sort($prix_sort)
    {
        $this->prix_sort = $prix_sort;

        return $this;
    }

    /**
     * Get the value of stockp
     */
    public function getStockp()
    {
        return $this->stockp;
    }

    /**
     * Set the value of stockp
     *
     * @return  self
     */
    public function setStockp($stockp)
    {
        $this->stockp = $stockp;

        return $this;
    }

    /**
     * Get the value of date_op
     */
    public function getDate_op()
    {
        return $this->date_op;
    }

    /**
     * Set the value of date_op
     *
     * @return  self
     */
    public function setDate_op($date_op)
    {
        $this->date_op = $date_op;

        return $this;
    }

    /**
     * Get the value of refprodh
     */
    public function getRefprodh()
    {
        return $this->refprodh;
    }

    /**
     * Set the value of refprodh
     *
     * @return  self
     */
    public function setRefprodh($refprodh)
    {
        $this->refprodh = $refprodh;

        return $this;
    }
}