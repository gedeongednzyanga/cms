<?php
class ControllerCarburant
{
    private $_view;
    private $_managerCarburant;

    public function __construct($url)
    {
        if (isset($url) && count($url) > 1)
            throw new Exception('Page introuvable');
        else
            $this->show();
    }

    private function show()
    {
        $this->_managerCarburant = new ManagerCarburant();
        $carburant = $this->_managerCarburant->getCarburants();
        $mouvements = $this->_managerCarburant->getMouvementCarburant();

        $this->_view = new View('Carburant');
        $this->_view->generate(array(
            'carburant' => $carburant,
            'mouvements' => $mouvements
        ));
    }
}