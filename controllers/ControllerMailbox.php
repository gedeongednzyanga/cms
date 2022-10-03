<?php
class ControllerMailbox
{
    private $_view;
    private $_managerMessage;

    public function __construct($url)
    {
        if (isset($url) && count($url) > 1)
            throw new Exception('Page introuvable');
        else
            $this->show();
    }

    private function show()
    {
        $this->_managerMessage = new ManagerMessage();
        $messages = $this->_managerMessage->getMessages();
        $this->_view = new View('Mailbox');
        $this->_view->generate(array('messages' => $messages));
    }
}