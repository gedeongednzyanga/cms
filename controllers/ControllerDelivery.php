<?php
class ControllerDelivery
{
    private $_view;
    private $_managerCommanade;

    public function __construct($url)
    {
        if (isset($url) && count($url) > 1)
            throw new Exception('Page introuvable');
        else
            $this->show();
    }

    private function show()
    {
        $this->_managerCommanade = new ManagerCommande();
        $commandes = $this->_managerCommanade->getEntCommande();

        $this->_view = new View('Delivery');
        $this->_view->generate(array(
            'commandes' => $commandes,
        ));
    }
}