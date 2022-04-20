<?php
	
	include_once 'C:/xampp/htdocs/demo/config.php';
	include_once "$_SERVER[DOCUMENT_ROOT]/projet/Model/reclamation.php";
	
	
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
			
			$sql="INSERT INTO reclamation (id_rec,email,objet,contenu) 
			VALUES (:id_rec,:email,:objet,:contenu)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					':id_rec' => $reclamation->getid_rec(),
					':email' => $reclamation->getemail(),
					':objet' => $reclamation->getobjet(),
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
						email= :email, 
						objet= :objet,
						contenu=:contenu
					WHERE id_rec= :id_rec'
				);
				$query->execute([':id_rec' => $reclamation->getid_rec(),
					':email' => $reclamation->getemail(),
					':objet' => $reclamation->getobjet(),
					':contenu' => $reclamation->getcontenu()
					

				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>