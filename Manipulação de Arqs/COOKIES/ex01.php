<?php 

	$data = array(
		"empresa"=>"NSA"
	);

	setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

	echo "Ok";

?>