<?php
	class produit{
		private $id_produit=null;
		private $nom_produit=null;
		private $prix_produit=null;
		private $quantite_produit=null;
		function __construct($id_produit,$nom_produit,$prix_produit,$quantite_produit){
            $this->id_produit=$id_produit;
			$this->nom_produit=$nom_produit;
			$this->prix_produit=$prix_produit;
			$this->quantite_produit=$quantite_produit;
			
		}
        // function get(var p)
        // {
            
        //     return p;
        // }

		function getid(){
			return $this->id_produit;
		}
		

		function getnom(){
			return $this->nom_produit;
		}

		function getprix(){
			return $this->prix_produit;
		}

		function getquantite(){
			return $this->quantite_produit;
		}


		function setnom(string $nom_produit){
			$this->nom_produit=$nom_produit;
		}
	
		function setprix(string $prix_produit){
			$this->prix_produit=$prix__produit;
		}
		function setquantite(string $quantite_produit){
			$this->quantite_produit=$quantite_produit;
		}		
	}


?>