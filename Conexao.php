<?php
session_start();
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "atividade";
			global $pdo;


				try{
					$pdo = new PDO("mysql:dbname=".$dbname."; host=".$servername, $username, $password);
					
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}catch(PDOException $e){
					echo "Connection failed: " . $e->getMessage();
					exit;
				}				
					
	

?>