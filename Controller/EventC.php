<?php
	
	include_once 'C:/xampp/htdocs/demo/config.php';
	include_once "C:/xampp/htdocs//projet/Model/Event.php";
	
	
	class reclamationC {
		function afficherreclamation(){
			$sql="SELECT * FROM reclamation ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerreclamation($id_rec){
			$sql="DELETE FROM reclamation WHERE id_rec=:id_rec";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_rec', $id_rec);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
			return $req->execute();
		}
		function ajouterreclamation($reclamation){
			
			$sql="INSERT INTO reclamation (id_rec,Nom,dateenvoi,sujet,contenu) 
			VALUES (:id_rec,:nom,:dateenvoi,:sujet,:contenu)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					':id_rec' => $reclamation->getid_rec(),
					':nom' => $reclamation->getnom(),
					':dateenvoi' => $reclamation->getdateenvoi(),
					':sujet' => $reclamation->getsujet(),
					':contenu' => $reclamation->getcontenu()
				]);		
			} 
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererreclamation($id_rec){
			$sql="SELECT * from reclamation where id_rec=$id_rec";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$reclamation=$query->fetch();
				return $reclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierreclamation($reclamation){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reclamation SET 
						nom= :nom,
						dateenvoi= :dateenvoi,  
						contenu=:contenu
					WHERE id_rec= :id_rec'
				);
				$query->execute([
					':Nom' => $reclamation->getnom(),
					':date_debut' => $reclamation->getdateenvoi(),
					':DateInscription' => $reclamation->getsujet(),
					':id_rec' => $reclamation->getid_rec(),
					':contenu' => $reclamation->getcontenu()

				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>