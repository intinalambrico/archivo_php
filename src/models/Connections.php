<?php

class Connections extends PDO{

	 public function __construct(){
		 
	 }

	public function Connectar(){
		
		$server	=	'mysql:host=localhost; dbname=internet_pagos';
		 
		$password	= '';
		$username	= '';
        

		try {
			
			$conn = new PDO($server, $username , $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $conn;

		} catch (PDOException $e) {
			echo 'Fallo la Conexión: '. $e->getMessage();
		}
	



}
}

?>