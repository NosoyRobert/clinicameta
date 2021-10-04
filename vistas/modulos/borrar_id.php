<?php
include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("config/conexion.php");//Contiene de conexion a la base de datos    

include "style.php";

echo '<a href="profile.php?action=administrar"  class="but">Volver</a>';

?>
<form method="POST">

<h1 class="titulo">Borrar por ID Form</h1>
       <div class="section">
        <h3>ID Form:</h3>
        <input class="field" type="text" ID="ID" name="ID" placeholder="Ingrese ID Form de colsulta anterior">

        <br>
        <br>

        <input type="submit" name="borrar_id">
        <br>
        <br>
        </div>
</form>

<?php 
    include "borrar/eliminar.php";
?>