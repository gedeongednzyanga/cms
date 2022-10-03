<?php
class ManagerPayement extends Model
{

    public function getMontantPayer($refcommande)
    {
        $sum  = 0;
        try {
            $query = $this->getBdd()->prepare('CALL get_montant_paye (?)');
            $query->execute(array($refcommande));
            $sum = $query->fetchColumn();
            return round((float) $sum, 2);
        } catch (PDOException $ex) {
            throw new Exception('Error : ' . $ex->getMessage());
        }
    }

    public function createObj($action, $procedure, $object)
    {
        $query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?, ?, ?, ?, ?)');
        $query->execute(array(
            $action,
            $object->getIdpaye(),
            $object->getMontantpaye(),
            $object->getRestepaye(),
            $object->getRefentc(),
            $object->getStatc()
        ));
    }
}