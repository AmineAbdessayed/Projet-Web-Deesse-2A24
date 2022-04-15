<?php
	class categorie{
		private $id_categorie=null;
		private $nom=null;
		function __construct($id_categorie,$nom){
            $this->id_categorie=$id_categorie;
			$this->nom=$nom;
			
		}
        // function get(var p)
        // {
            
        //     return p;
        // }

		function getid(){
			return $this->id_categorie;
		}

		function getnom(){
			return $this->nom;
		}

        function setid(string $id_categorie){
			$this->id_categorie=$id_categorie;
		}

		function setnom(string $nom){
			$this->nom=$nom;
		}		
	}


?>