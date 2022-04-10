<?php
class ControllerFaq
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
        $recentNews = $this->_managerNews->getRecentInformations();
        $this->_view = new View('Faq');
        $this->_view->generate(array('recentNews' => $recentNews));
    }
}