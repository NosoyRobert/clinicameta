<?php
include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("config/conexion.php");//Contiene de conexion a la base de datos


include "style.php";

echo '<a href="profile.php?action=administrar"  class="but">Volver</a>';
?>
<form action="vistas/modulos/importar/index2.php" class="formulariocompleto" method="post" enctype="multipart/form-data">
			<input type="file" name="archivo" class="form-control"/>
			<input type="submit" class="form-control" name="enviar">
</form>

<?php
include "importar/index2.php";
?>