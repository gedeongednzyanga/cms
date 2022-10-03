<?php
class ManagerProduction extends Model
{

    public function getProductions()
    {
        return $this->getAll('get_production', 'Production');
    }

    public function getLastProductions()
    {
        return $this->getAll('get_last_production', 'Production');
    }

    public function _getOneProductionDate($date)
    {
        return $this->getOne('_get_production_date', $date, 'Production');
    }

    public function _getProductionBetweenTwoDate($date1, $date2, $object)
    {
        try {
            $obj = [];
            $query = $this->getBdd()->prepare("CALL _get_production_two_date(?, ?)");
            $query->execute(array($date1, $date2));
            while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                $obj[] = new $object($data);
            }
            $query->closeCursor();
            return $obj;
        } catch (PDOException $ex) {
            throw new Exception("Error " . $ex);
        }
    }

    public function chatProduction($mois, $annee)
    {
        return $this->getTrie('get_chat', $mois, $annee, 'Production');
    }

    public function inertEntete($action, $procedure, $objet)
    {
        try {
            $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?)');
            $query->execute(array($action, $objet->getIdentp(), $objet->getTotprod()));
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function createObj($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?, ?, ?)');
        $query->execute(
            array(
                $action,
                $object->getIddetprod(),
                $object->getQuantiteprod(),
                $object->getQuantiteperd(),
                $object->getCarburant(),
                $object->getRefprod(),
            )
        );
    }
}