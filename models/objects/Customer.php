<?php
class Customer
{
    private $idc;
    private $customerName;

    private function __construct(array $data)
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
     * Get the value of idc
     */
    public function getIdc()
    {
        return $this->idc;
    }

    /**
     * Set the value of idc
     *
     * @return  self
     */
    public function setIdc($idc)
    {
        $this->idc = $idc;

        return $this;
    }

    /**
     * Get the value of customerName
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set the value of customerName
     *
     * @return  self
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }
}