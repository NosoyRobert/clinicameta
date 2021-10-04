<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Script php backup and restore</title>
</head>
<body>
	<?php 
	echo '<a href="profile.php?action=administrar"  class="but">Volver</a>';
	?>
	<?php
		include 'Connet.php';
		include 'sty.php';
	?>
	<form action="vistas/modulos/copia/restore.php" method="POST">
		<h1>Selecciona un punto de restauración</h1><br>
		<select class="restorePoint" name="restorePoint">
			<option value="" disabled="" selected="">Selecciona un punto de restauración</option>
			<?php
				$ruta=BACKUP_PATH;
				if(is_dir($ruta)){
				    if($aux=opendir($ruta)){
				        while(($archivo = readdir($aux)) !== false){
				            if($archivo!="."&&$archivo!=".."){
				                $nombrearchivo=str_replace(".sql", "", $archivo);
				                $nombrearchivo=str_replace("-", ":", $nombrearchivo);
				                $ruta_completa=$ruta.$archivo;
				                if(is_dir($ruta_completa)){
				                }else{
				                    echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
				                }
				            }
				        }
				        closedir($aux);
				    }
				}else{
				    echo $ruta." No es ruta válida";
				}
			?>
		</select>
		<input type="submit" class="form-control" name="enviar">
	</form>
	<a href="vistas/modulos/copia/back.php">Realizar copia de seguridad</a>
</body>
</html>