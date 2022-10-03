<?php
class ControllerStock
{
    private $_view;
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
        $this->_productManager = new ManagerProduct();

        $categories = $this->_categoryManager->getCategories();
        $unites = $this->_uniteManager->getUnites();
        $product = $this->_productManager->getProducts();

        $this->_view = new View('Stock');
        $this->_view->generate(array(
            'categories' => $categories,
            'unites' => $unites,
            'product' => $product,
        ));
    }
}