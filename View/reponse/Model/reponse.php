<?php
	class reponse{
		private $id_rep=null;
		private $email=null;
		
		
		private $objet=null;
		private $contenu;
		private $id_rec;
		
		
		function __construct( $email,  $objet, $contenu, $id_rec){
			
			$this->email=$email;
			$this->objet=$objet;
			$this->contenu=$contenu;
			$this->id_rec=$id_rec;
		}
		function getid_rep(){
			return $this->id_rep;
		}
		function getid_rec(){
			return $this->id_rec;
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
		function setid_rec(int $id_rec){
			$this->id_rec=$id_rec;
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