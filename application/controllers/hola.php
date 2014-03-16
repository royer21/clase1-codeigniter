<?php 

class Hola extends CI_controller {

	function index()
	{
		echo "Hola mundo";
	}

	function saludo()
	{
		echo "clase1_codeigniter";

	}
	function saludo1($id=0)
	{
		switch ($id) {
			case 0:
				# code...
				echo " saludo 0";
				break;

			case 1:
				# code...
				echo " saludo 1";
				break;
			
			
			default:
				# code...
				echo " saludo 1";
				break;
		}
	}

	function _calcular($anio)
	{
		$edad=2014-$anio;
		return $edad;
	}

	function edad($anio)
	{
		$edad=$this->_calcular($anio);
		echo "tu edad es ".$edad;
	}


}

?>