<?php
$nick = $_POST['nick'];
$pass = $_POST['pass'];

	function Conectarse(){
		if(!($link= mysql_connect("localhost","root"))) {
		echo "Error conectando a la BD. ";
		exit();
		}
		if(!mysql_select_db("tutorial",$link)) {
		echo "Error seleccionando la BD .";
		exit();
		}
		return $link;
	}
	$con = Conectarse();
	$query = "SELECT * FROM registro WHERE nick = '".$nick."' AND pass = '". md5($pass)."'";
	$q = mysql_query($query,$con);
	
	try{
		if(mysql_result($q,0)){
		$result= mysql_result($q,0);
		echo "Usuario Validado correctamente";
		}
		else 
			echo "Nick o password erroneos. "; 
	}
	catch (Exception $error){}
	mysql_close($con);
?>