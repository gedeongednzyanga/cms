<?php
class ControllerPurchases
{
    private $_view;
    private $_productManager;
    private $_categoryManager;
    private $_uniteManager;
    private $_managerPurchase;

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
        $this->_managerPurchase = new ManagerPurchase();

        $categories = $this->_categoryManager->getCategories();
        $unites = $this->_uniteManager->getUnites();
        $productss = $this->_productManager->getProducts();
        $purchases = $this->_managerPurchase->getPurchases();

        $this->_view = new View('Purchases');
        $this->_view->generate(array(
            'categories' => $categories,
            'unites' => $unites,
            'productss' => $productss,
            'purchases' => $purchases,
        ));
    }
}