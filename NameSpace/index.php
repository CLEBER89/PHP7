		<?php
			
			require_once("config.php");

			use Cliente\Cadastro;

			$cad = new Cadastro();

			$cad->setNome("Cleberson Correia");
			$cad->setEmail("cleberson@hotmail.com");
			$cad->setSenha("123456");

			$cad->regVenda();

			echo $cad;

		?>