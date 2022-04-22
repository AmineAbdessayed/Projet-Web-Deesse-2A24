<?php
	class reclamation{
		private $id_rec=null;
		private $email=null;
		
		
		private $objet=null;
		private $contenu;
		
		
		function __construct($id_rec, $email,  $objet, $contenu){
			$this->id_rec=$id_rec;
			$this->email=$email;
			$this->objet=$objet;
			$this->contenu=$contenu;
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