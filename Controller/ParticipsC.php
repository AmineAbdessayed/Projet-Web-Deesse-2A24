<?php
	
	include_once '../config.php';
	include_once "$_SERVER[DOCUMENT_ROOT]/projet/Model/Particips.php";
	
	
	class ParticipsC {
		function afficherP(){
			$sql="SELECT * FROM particips";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function triNomASC(){
			$sql="SELECT * FROM particips ORDER BY Nom_p ASC";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

		function triNomDESC(){
			$sql="SELECT * FROM particips ORDER BY Nom_p DESC";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		function supprimerP($id_p){
			$sql="DELETE FROM particips WHERE id_p=:id_p";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_p', $id_p);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
			return $req->execute();
		}
		function ajouterP($Particips){
			
			$sql="INSERT INTO particips (id_p,Nom_p,Prenom,adresse_mail) 
			VALUES (:id_p,:Nom_p,:Prenom,:adresse_mail)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					':id_p' => $Particips->getid_p(),
					':Nom_p' => $Particips->getNom_p(),
					':Prenom' => $Particips->getPrenom(),
					':adresse_mail' => $Particips->getadresse_mail()
					
				]);		
			} 
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererP($id_p){
			$sql="SELECT * from particips where id_p=$id_p";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Particips=$query->fetch();
				return $Particips;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierParticips($Particips){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE Particips SET 
						Nom_p= :Nom_p, 
						Prenom= :Prenom, 
						adresse_mail= :adresse_mail
						
					WHERE id_p= :id_p'
				);
				$query->execute([
					':Nom_p' => $Particips->getNom_p(),
					':Prenom' => $Particips->getPrenom(),
					':adresse_mail' => $Particips->getadresse_mail(),
					':id_p' => $Particips->getid_p()

				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}
?>