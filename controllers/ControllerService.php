<?php
class ControllerService
{
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count($url) > 1)
            throw new Exception('Page introuvable');
        else
            $this->show();
    }

    private function show()
    {
        $this->_view = new View('Service');
        $this->_view->generate1();
    }
}