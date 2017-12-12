<?php 
  try{
	$usuario = $_POST['usuario'];
	$pass = $_POST['clave'];
	include("../database/config.php");
	$sql = "SELECT id,user,name FROM user WHERE user=? AND pass=?";
	if($stmt = $conn->prepare($sql)){
		$stmt->bind_param("ss", $usuario, $pass);
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($user_id, $user,$name);
	    $stmt->fetch();
	    $rows = $stmt->num_rows;
	    $stmt->close();
	}
    $conn->close();
	session_start();
    if($rows>0){
        $_SESSION['id_tipo'] = $user_id;
        $_SESSION['user'] = $user;
        $_SESSION['name'] = $name;
        header("Location:../../home.php");
	   	exit();
	} 
	else{
		header("Location:../../index.php?error=1");
		exit();
	}
  }
  catch(Exception $e){
  
  exit();
  }
?>