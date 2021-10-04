<?php

class controladores
{

public static function plantilla()
	{
		include "vistas/template.php";
	}

public static function enlacesPaginasControlador()
	{
		if(isset($_GET["action"]))
		{
			$enlacesControlador=$_GET["action"];
		}
		else
		{
			$enlacesControlador="profile";
		}
		
		//echo $enlacesControlador;

		$respuesta=EnlacesPaginas::enlacesPaginasModelo($enlacesControlador);
		include $respuesta;
	}
}

?>

<?php

class controladores2
{

public static function plantilla2()
	{
		include "vistas/template.php";
	}

public static function enlacesPaginasControlador2()
	{
		if(isset($_GET["action"]))
		{
			$enlacesControlador2=$_GET["action"];
		}
		else
		{
			$enlacesControlador2="profile";
		}
		
		//echo $enlacesControlador;

	
	}
}


?>
