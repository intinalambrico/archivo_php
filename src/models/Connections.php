<?php

class Connections extends PDO{

	 public function __construct(){
		 
	 }

	public function Connectar(){
		
		$server	=	'mysql:host=localhost; dbname=internet_pagos';
		 
		$password	= '+wq)@ZCV#%Z~';
		$username	= 'internet_pagos';
       // $password	= '9C9UAaqKecHRZA79';
	//	$username	= 'LNWW(345';

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