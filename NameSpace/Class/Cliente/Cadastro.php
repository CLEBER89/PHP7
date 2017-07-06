<?php

	namespace Cliente;

	class Cadastro extends \Cadastro{

		public function regVenda(){
			echo "Foi registrada uma venda para o cliente ".$this->getNome();
		}
	}

?>