<?php
	class User{
		private $id=null;
		private $username=null;
		private $Email=null;
		
		private $password=null;
		private $type;
		private $IsBanned;
		
		
		function __construct($id, $username, $Email, $password, $type){
			$this->id=$id;
			$this->username=$username;
			
			$this->Email=$Email;
			$this->password=$password;
			$this->type=$type;
		}
		function getidUser(){
			return $this->id;
		}
		function getusername(){
			return $this->username;
		}
		
		function getEmail(){
			return $this->Email;
		}
		function getpassword(){
			return $this->password;
		}
		function gettype(){
			return $this->type;
		}
        //setters
        function setidUser(int $id){
			$this->id=$id;
		}
		function setusername(string $username){
			$this->username=$username;
		}
		
		function setEmail(string $Email){
			$this->Email=$Email;
		}
		function setpassword(string $password){
			$this->password=$password;
		}
		function settype(string $type){
			$this->type=$type;
		}
		function setbanned(Int $ban){
			$this->IsBanned=$ban;
		}
		function getbanned(){
			return $this->IsBanned;
		}
		
	}


?>