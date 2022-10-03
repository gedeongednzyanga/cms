<?php
session_start();
spl_autoload_register(function ($class) {
    $fileManager = '../managers/' . $class . '.php';
    $fileObject = '../objects/' . $class . '.php';

    if (file_exists($fileManager)) {
        require($fileManager);
    } else if (file_exists($fileObject)) {
        require($fileObject);
    } else {
        echo 'Fichier ' . $class . '.php n\'existe pas.';
    }
});

include('../../views/includes/cal_time.php');

$messageManager = new ManagerMessage();
$action = $_POST['action'];

switch ($action) {
    case 'send':
        $messages = new Message($_POST);
        $messageManager->createObj($_POST['actionu'], 'obj_message', $messages);
        echo 'Message envoyé avec succès';
        break;

    case 'trier_message':
        $messages = $messageManager->getMessageByTypeMsg($_POST['tmsg']);
        $datam = '';
        foreach ($messages as $message) {
            if ($message->getStatutmsg() == 0)
                $datam .= '<tr class="unread" data-id="2">';
            else
                $datam .= '<tr data-id="2">';
            $datam .= '
                <td class="check-cell">
                    <label class="ui-checkbox ui-checkbox-info">
                        <input class="mail-check" type="checkbox">
                        <span class="input-span"></span>
                    </label>
                </td>
                <td><a href="mailview-' . $message->getIdmsg() . '">' . $message->getSender() . '</a></td>
                <td class="mail-message">' . $message->getSujet() . '</td>';
            if ($message->getStatutmsg() == 0)
                $datam .= '<td class="mail-label hidden-xs"><i class="fa fa-circle text-warning"></i></td>';
            else
                $datam .= '<td class="mail-label hidden-xs"></td>';
            $datam .= '<td class="text-right">' . cal_time_ago($message->getDatemsg()) . '</td>
            </tr>';
        }

        echo $datam;
        break;

    default:
        # code...
        break;
}