<?php
class ManagerPage extends Model
{

	/**
	 *
	 * @param mixed $action
	 * @param mixed $procedure
	 * @param mixed $object
	 *
	 * @return mixed
	 */
	function createObj($action, $procedure, $object)
	{
		try {
			$query = $this->getBdd()->prepare('call ' . $procedure . ' (?, ?)');
			$query->execute(array($object->getRefuser(), $object->getRefpage()));
		} catch (PDOException $ex) {
			die($ex->getMessage());
		}
	}

	public function createAcces($procedure, $object)
	{
		try {
			$query = $this->getBdd()->prepare('call ' . $procedure . '(?, ?)');
			$query->execute(array($object->getRefpage(), $object->getRefauto()));
		} catch (PDOException $ex) {
			die($ex->getMessage());
		}
	}

	public function getOnePage($idpage)
	{
		return $this->getOne('getOnePage', $idpage, 'Page');
	}
	public function getOneAutorisation($idauto)
	{
		return $this->getOne('getOneAuto', $idauto, 'Page');
	}

	public function getAccessPage($refUser)
	{
		return $this->getOne('getPageAccess', $refUser, 'Page');
	}

	public function testUserAccessPage($iduser, $page, $object)
	{
		try {
			$obj = [];
			$query = $this->getBdd()->prepare("CALL test_user_access (?, ?)");
			$query->execute(array($iduser, $page));
			while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
				$obj[] = new $object($data);
			}
			$query->closeCursor();
			return $obj;
		} catch (PDOException $ex) {
			throw new Exception("Error " . $ex);
		}
	}
}
