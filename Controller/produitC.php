<?php
	include 'C:/xampp/htdocs/temp/config.php';
	include_once 'C:/xampp/htdocs/temp/Model/produit.php';
	class produitC {
		function afficherproduit(){
			$sql="SELECT * FROM produit";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerproduit($id_produit){
			$sql="DELETE FROM produit WHERE id_produit=:id_produit";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_produit', $id_produit);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterproduit($produit){
			$sql="INSERT INTO produit (id_produit,nom_produit,prix_produit,quantite_produit) 
			VALUES (:id_produit,:nom_produit,:prix_produit,:quantite_produit)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_produit' => $produit->getid(),
					'nom_produit' => $produit->getnom(),
					'prix_produit' => $produit->getprix(),
					'quantite_produit' => $produit->getquantite()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererproduit($id_produit){
			$sql="SELECT * from produit where id_produit=$id_produit";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$produit=$query->fetch();
				return $produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierproduit($produit, $id_produit){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET 
						nom_produit= :nom_produit,
						prix_produit= :prix_produit,
						quantite_produit= :quantite_produit
					WHERE id_produit= :id_produit'
				);
				$query->execute([
					
					'id_produit' =>$id_produit,
					'nom_produit' => $produit->getnom(),
					'prix_produit' => $produit->getprix(),
					'quantite_produit' => $produit->getquantite()
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