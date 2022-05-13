<?php
	
	include_once "$_SERVER[DOCUMENT_ROOT]/temp/config.php";
	include_once "$_SERVER[DOCUMENT_ROOT]/temp/reponse/Model/reponse.php";
	
	
	class reponseC {
		function afficherreponse(){
			$sql="SELECT * FROM reponse ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerreponse($id_rep){
			$sql="DELETE FROM reponse WHERE id_rep=:id_rep";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_rep', $id_rep);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
			return $req->execute();
		}
		function ajouterreponse($reponse){
			
			$sql="INSERT INTO reponse (id_rep,email,objet,contenu,id_rec) 
			VALUES (:id_rep,:email,:objet,:contenu,:id_rec)";
			$sql2="UPDATE reclamation set etat = 1  where id_rec =".$reponse->getid_rec();
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query2 = $db->prepare($sql2);
				$query->execute([
					':id_rep' => $reponse->getid_rep(),
					':email' => $reponse->getemail(),
					':objet' => $reponse->getobjet(),
					':contenu' => $reponse->getcontenu(),
					':id_rec' => $reponse->getid_rec()
				]);
				
				$query2->execute(); 		
			} 
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererreponse($id_rep){
			$sql="SELECT * from reponse where id_rep=$id_rep";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$reponse=$query->fetch();
				return $reponse;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierreponse($reponse){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reponse SET 
						email= :email, 
						objet= :objet,
						contenu=:contenu
					WHERE id_rep= :id_rep'
				);
				$query->execute([':id_rep' => $reponse->getid_rep(),
					':email' => $reponse->getemail(),
					':objet' => $reponse->getobjet(),
					':contenu' => $reponse->getcontenu()
					

				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>