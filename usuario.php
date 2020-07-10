<?php
 
class Usuario{
 public function login($login, $senha){
 	global $pdo;

$comando = ("SELECT * FROM usuario WHERE login = :login AND senha= :senha");
$comando = $pdo->prepare($comando);
$comando ->bindValue("login",$login);
$comando ->bindValue("senha",$senha);
 $comando->execute();

 if($comando->rowCount() > 0){

 	$dado =$comando->fetch();
 	
 	$_SESSION['idUser']=$dado['id'];
 	return true;

 	
 }else{
 	return false;
 }


 }





}
?>