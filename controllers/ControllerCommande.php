<?php
class ControllerCommande
{
    private $_view;
    private $_productManager;
    private $_categoryManager;
    private $_uniteManager;
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
        $this->_categoryManager = new ManagerCategory();
        $this->_uniteManager = new ManagerUnite();
        $this->_productManager = new ManagerProduct();
        $this->_managerCommanade = new ManagerCommande();

        $categories = $this->_categoryManager->getCategories();
        $unites = $this->_uniteManager->getUnites();
        $products = $this->_productManager->getProducts();
        $commandes = $this->_managerCommanade->getCommandes();

        $this->_view = new View('Commande');
        $this->_view->generate(array(
            'categories' => $categories,
            'unites' => $unites,
            'products' => $products,
            'commandes' => $commandes
        ));
    }
}