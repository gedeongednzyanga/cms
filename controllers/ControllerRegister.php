<?php
class ControllerRegister
{
    private $_view;
    private $_managerUser;

    public function __construct($url)
    {
        if (isset($url) && count($url) > 1)
            throw new Exception('Page introuvable');
        else
            $this->show();
    }

    private function show()
    {
        $this->_managerUser = new ManagerUser();
        $users = $this->_managerUser->getUsers();
        $this->_view = new View('Register');
        $this->_view->generate(array('users' => $users,));
    }
}