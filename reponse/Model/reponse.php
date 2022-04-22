<?php
	class reponse{
		private $id_rep=null;
		private $email=null;
		
		
		private $objet=null;
		private $contenu;
		
		
		function __construct($id_rep, $email,  $objet, $contenu){
			$this->id_rep=$id_rep;
			$this->email=$email;
			$this->objet=$objet;
			$this->contenu=$contenu;
		}
		function getid_rep(){
			return $this->id_rep;
		}
		function getemail(){
			return $this->email;
		}
		
		
		function getobjet(){
			return $this->objet;
		}
		function getcontenu(){
			return $this->contenu;
		}
        //setters
        function setid_rep(int $id_rep){
			$this->id_rep=$id_rep;
		}
		function setemail(string $email){
			$this->email=$email;
		}
		
		
		function setobjet(string $objet){
			$this->objet=$objet;
		}
		function setcontenu(string $contenu){
			$this->contenu=$contenu;
		}
		
	}


?>