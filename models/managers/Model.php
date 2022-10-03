<?php
abstract class Model
{
    private static $_bdd;

    private static function setBdd()
    {
        self::$_bdd = new PDO('mysql:host=localhost; dbname=cms_db; charset=UTF8', 'root', 'Go_fori9');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBdd()
    {
        if (self::$_bdd == null)
            self::setBdd();
        return self::$_bdd;
    }

    protected function getAll($procedure, $object)
    {
        try {
            $obj = [];
            $query = $this->getBdd()->prepare("CALL " . $procedure);
            $query->execute();
            while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                $obj[] = new $object($data);
            }
            $query->closeCursor();
            return $obj;
        } catch (PDOException $ex) {
            throw new Exception('Error : ' + $ex);
        }
    }

    protected function count($procedure, $field)
    {
        $row  = 0;
        try {
            $query = $this->getBdd()->prepare('CALL ' . $procedure . ' (?)');
            $query->execute(array($field));
            $row = $query->fetchColumn();
            return (int) $row;
        } catch (PDOException $ex) {
            throw new Exception('Error : ' . $ex->getMessage());
        }
    }

    protected function getOne($procedure, $id, $object)
    {
        try {
            $obj = [];
            $query = $this->getBdd()->prepare("CALL " . $procedure . " (?)");
            $query->execute(array($id));
            while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                $obj[] = new $object($data);
            }
            $query->closeCursor();
            return $obj;
        } catch (PDOException $ex) {
            throw new Exception("Error " . $ex);
        }
    }

    protected function getTrie($procedure, $actionu, $id, $object)
    {
        try {
            $obj = [];
            $query = $this->getBdd()->prepare("CALL " . $procedure . " (?, ?)");
            $query->execute(array($actionu, $id));
            while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                $obj[] = new $object($data);
            }
            $query->closeCursor();
            return $obj;
        } catch (PDOException $ex) {
            throw new Exception("Error " . $ex);
        }
    }

    protected abstract function createObj($action, $procedure, $object);
}