<?php
	class reclamation{
		private $id_rec=null;
		private $nom=null;
		private $dateenvoi=null;
		
		private $sujet=null;
		private $contenu;
		
		
		function __construct($id_rec, $nom, $dateenvoi, $sujet, $contenu){
			$this->id_rec=$id_rec;
			$this->nom=$nom;
			$this->dateenvoi=$dateenvoi;
			$this->sujet=$sujet;
			$this->contenu=$contenu;
		}
		function getid_rec(){
			return $this->id_rec;
		}
		function getnom(){
			return $this->nom;
		}
		function getdateenvoi(){
			return $this->dateenvoi;
		}
		
		function getsujet(){
			return $this->sujet;
		}
		function getcontenu(){
			return $this->contenu;
		}
        //setters
        function setid_rec(int $id_rec){
			$this->id_rec=$id_rec;
		}
		function setnom(string $nom){
			$this->nom=$nom;
		}
		function setdateenvoi(string $dateenvoi){
			$this->dateenvoi=$dateenvoi;
		}
		
		function setsujet(string $sujet){
			$this->sujet=$sujet;
		}
		function setcontenu(string $contenu){
			$this->contenu=$contenu;
		}
		
	}


?>