<?php
class ManagerNews extends Model
{
    public function getInformations()
    {
        return $this->getAll('get_informations', 'News');
    }

    public function getInformationDateF()
    {
        return $this->getAll('get_informations_dateformat', 'News');
    }
    public function getOneInformation($id)
    {
        return $this->getOne('get_one_information', $id, 'News');
    }

    public function createObj($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?, ?, ?)');
        $query->execute(
            array(
                $action,
                $object->getIdn(),
                $object->getTitleinfo(),
                $object->getInformation(),
                $object->getInfoimage(),
                $object->getInfotype()
            )
        );
    }
}