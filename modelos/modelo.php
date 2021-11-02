<?php

class EnlacesPaginas
{
	public static function enlacesPaginasModelo($enlacesModelo)
	{
		$modelo="";

		if ($enlacesModelo=="inicio"||
			$enlacesModelo=="perfil"||
			$enlacesModelo=="evaluar"||
			$enlacesModelo=="exportar"||
			$enlacesModelo=="importar"||
			$enlacesModelo=="actualizar"||
			$enlacesModelo=="administrar"||
			$enlacesModelo=="registrar"||
			$enlacesModelo=="buscar"||
			$enlacesModelo=="asignar"||
			$enlacesModelo=="eliminar"||
			$enlacesModelo=="resultados"||
			$enlacesModelo=="registrados"||
			$enlacesModelo=="cambiar"||
			$enlacesModelo=="cambiar_editar"||
			$enlacesModelo=="cambiar_eliminar"||
			$enlacesModelo=="borrar"||
			$enlacesModelo=="borrar_id"||
			$enlacesModelo=="preguntas"||
			$enlacesModelo=="Copia_seguridad"||
			$enlacesModelo=="espe"||
			$enlacesModelo=="truncate"||
			$enlacesModelo=="jefe"||
			$enlacesModelo=="Expo_datos"||
			$enlacesModelo=="preguntas_cargo"||
			$enlacesModelo=="excel"||
			$enlacesModelo=="cerrar")
		{
			$modelo = "vistas/modulos/".$enlacesModelo.".php";	
		}
		else if($enlacesModelo=="profile")
		{
			$modelo = "vistas/modulos/inicio.php";
		}

		return $modelo;
	}
}

?>