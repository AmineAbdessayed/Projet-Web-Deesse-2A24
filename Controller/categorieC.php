<?php
	include 'C:/xampp/htdocs/temp/config.php';
	include_once 'C:/xampp/htdocs/temp/Model/categorie.php';

	
	class categorieC {
		public function afficherproduits ($id_categorie) {
			try {
				$pdo=getConnection();
				$query=$pdo->prepare(
					'SELECT *FROM produit where categorie = :id '
				);
				$query->execute([
					'id' => $id_categorie
				]);
				return $query->fetchAll();
	
			}catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function affichercategorie(){
			$sql="SELECT * FROM categorie";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimercategorie($id_categorie){
			$sql="DELETE FROM categorie WHERE id_categorie=:id_categorie";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_categorie', $id_categorie);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajoutercategorie($categorie){
			$sql="INSERT INTO categorie (id_categorie,nom) 
			VALUES (:id_categorie,:nom)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_categorie' => $categorie->getid(),
					'nom' => $categorie->getnom()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperercategorie($id_categorie){
			$sql="SELECT * from categorie where id_categorie=$id_categorie";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$categorie=$query->fetch();
				return $categorie;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiercategorie($categorie, $id_categorie){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categorie SET 
						nom= :nom
					WHERE id_categorie= :id_categorie'
				);
				$query->execute([
					'nom' => $categorie->getnom(),
					'id_categorie' =>$id_categorie
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		/*function triereventsDESC()
		{
		$sql = "SELECT * from events ORDER BY date_ev DESC";
		$db = config2::getConnexion();
		try {
		$req = $db->query($sql);
		return $req;
		} 
		catch (Exception $e)
	 	{
		die('Erreur: ' . $e->getMessage());
		}
		}


		function triereventsASC()
		{
		$sql = "SELECT * from events ORDER BY date_ev ASC";
		$db = config2::getConnexion();
		try {
		$req = $db->query($sql);
		return $req;
		} 
		catch (Exception $e)
	 	{
		die('Erreur: ' . $e->getMessage());
		}
	    }*/


	}
?>