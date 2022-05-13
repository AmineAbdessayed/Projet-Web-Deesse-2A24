<?php
	
	include_once 'C:\xampp\htdocs\temp\view\config4.php';
	include_once "$_SERVER[DOCUMENT_ROOT]/temp/Model/User.php";
	
	
	class UserC {
		function afficherUser(){
			$sql="SELECT * FROM users";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerUser($id){
			$sql="DELETE FROM users WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
			return $req->execute();
		}
		
		function recupererUser($id){
			$sql="SELECT * from users where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$User=$query->fetch();
				return $User;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierUser($User){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE users SET 
						type = :type, 
						id= :id, 
						username= :username,  
						
					WHERE id= :id'
				);
				$query->execute([
					':username' => $User->getusername(),
					':Email' => $User->getEmail(),
					':password' => $User->getpassword(),
					':id' => $User->getidUser(),
					':type' => $User->gettype()

				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function banUser($id){
			$sql="Update users set IsBanned='1' where id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
			return $req->execute();
		}
		function unbanUser($id){
			$sql="Update users set IsBanned='0' where id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
			return $req->execute();
		}
		function makeAdmin($id){
			$sql="Update users set type='admin' where id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
			return $req->execute();
		}
		function makeUser($id){
			$sql="Update users set type='user' where id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
			return $req->execute();
		}

		
		function resetPassword($email, $pass) //updated
	{
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE users SET 							
						password = :password
					WHERE email = :email'
			);
			$query->execute([
				'password' => $pass,
				'email' => $email
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	function verifierUtilisateur($email)//updated
		{
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE users SET 							
							verified = :verified
						WHERE email = :email'
				);
				$query->execute([
					'verified' => 1,
					'email' => $email
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>