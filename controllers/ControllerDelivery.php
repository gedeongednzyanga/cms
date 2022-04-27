<?php
class ControllerDelivery
{
    private $_view;
    private $_managerLivraison;
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
        $this->_managerLivraison = new ManagerLivraison();

        $commandes = $this->_managerCommanade->getClientNoCredit();
        $livraisons = $this->_managerLivraison->getEntLivraison();

        $this->_view = new View('Delivery');
        $this->_view->generate(
            array(
                'livraisons' => $livraisons,
                'commandes' => $commandes
            )
        );
    }
}