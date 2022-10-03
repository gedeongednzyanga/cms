<?php
class ControllerProduction
{
    private $_view;
    private $_productionManager;
    private $_productManager;
    private $_categoryManager;
    private $_uniteManager;

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
        $this->_productionManager = new ManagerProduction();
        $this->_productManager = new ManagerProduct();

        $categories = $this->_categoryManager->getCategories();
        $unites = $this->_uniteManager->getUnites();
        $productions = $this->_productionManager->getProductions();
        $products = $this->_productManager->getProducts();

        $this->_view = new View('Production');
        $this->_view->generate(array(
            'categories' => $categories,
            'unites' => $unites,
            'productions' => $productions,
            'products' => $products,
        ));
    }
}