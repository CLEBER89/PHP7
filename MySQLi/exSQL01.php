<?php  
	
	$conn = new mysqli("localhost", "root", "", "dbphp7");

	if ($conn->connect_error){

		echo "Errror: " . $conn->connect_error;
	}

	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

	$stmt->bind_param("ss", $login, $pass);

	$login = "user";
	$pass = "12345";

	$stmt->execute();

	$login = "user";
	$pass = "111111";

	$stmt->execute();

?>