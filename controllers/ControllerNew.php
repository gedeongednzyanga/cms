<?php
class ControllerNew
{
    private $_view;
    private $_managerNews;
    public function __construct($url)
    {
        if (isset($url) && count($url) > 1)
            throw new Exception('Page introuvable');
        else
            $this->show();
    }

    private function show()
    {
        $this->_managerNews = new ManagerNews();
        $rnews = $this->_managerNews->getRecentInformations();
        $this->_view = new View('New');
        $this->_view->generate(array('rnews' => $rnews));
    }
}