<?php 

	$link = "http://cdn.wallpapersafari.com/41/70/35Jlky.jpg";

	$content = file_get_contents($link);

	$parse = parse_url($link);

	$basename = basename($parse["path"]);

	$file = fopen($basename, "w+");

	fwrite($file, $content);

	fclose($file);

	//var_dump($content);

 ?>

 <img src="<?=$basename?>"><!--sinal de igual subistitui o Echo = escreva basename-->