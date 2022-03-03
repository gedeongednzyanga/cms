<?php
class ControllerDashboard
{
    private $_view;
    private $_productionManager;
    private $_productManager;
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
        $this->_productionManager = new ManagerProduction();
        $this->_productManager = new ManagerProduct();
        $this->_managerCommanade = new ManagerCommande();

        $productions = $this->_productionManager->getProductions();
        $products = $this->_productManager->getProducts();
        $commandes = $this->_managerCommanade->getCommandes();
        $lastProductions = $this->_productionManager->getLastProductions();
        $lastCommandes = $this->_managerCommanade->getLastCommandes();

        $this->_view = new View('Dashboard');
        $this->_view->generate(array(
            'productions' => $productions,
            'products' => $products,
            'commandes' => $commandes,
            'lastProductions' => $lastProductions,
            'lastCommandes' => $lastCommandes
        ));
    }
}