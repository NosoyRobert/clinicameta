<?php

/*Datos de conexion a la base de datos*/
/*define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
define('DB_USER', 'root');//Usuario de tu base de datos
define('DB_PASS', '');//Contraseña del usuario de la base de datos
define('DB_NAME', 'clinicameta');//Nombre de la base de datos

$con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$con){
    die("imposible conectarse: ".mysqli_error($con));
}
if (@mysqli_connect_errno()) {
    die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}*/

require_once('config/db.php');
require_once('config/conexion.php');

session_start();

$user_check=$_SESSION['login_user_sys']; // Sesion iniciada
// SQL Query para completar la informacion del usuario

$ses_sql=mysqli_query($con, "SELECT cedula from personas where cedula='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['cedula'];

if(!isset($login_session))
{
mysqli_close($con); // Cerrando la conexion
header('Location: index.php'); // Redirecciona a la pagina de inicio
}


//INFORMACION A 
$informacion= 
"SELECT EV.cedula, PE.nombre, EV.grupo, EV.cargo, EV.celular, EV.correo, EV.direccion, EV.edad, EV.genero
FROM personas PE, evaluado EV";

$resu=mysqli_query($con,$informacion);

header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename=Datos.xls');
header('Pragma: no-cache');
header('Expires: 0');

echo'<table border=1>';
echo'<tr>';
echo'<th colspan=31>DatosPersonales</th>';
echo'</tr>';
echo'<tr><th>cedula</th><th>nombre</th><th>grupo</th><th>cargo</th><th>celular</th><th>correo</th><th>direccion</th><th>edad</th><th>genero</th></tr>';
while($row=$resu->fetch_array())
{   
    echo'<tr>';
    echo '<td>'.$cedula= $row['cedula'].'</td>';
    echo '<td>'.$nombre= $row['nombre'].'</td>';
    echo '<td>'.$grupo= $row['grupo'].'</td>';
    echo '<td>'.$cargo = $row['cargo'].'</td>';
    echo '<td>'.$celular = $row['celular'].'</td>';
    echo '<td>'.$correo = $row['correo'].'</td>';
    echo '<td>'.$direccion = $row['direccion'].'</td>';
    echo '<td>'.$edad = $row['edad'].'</td>';
    echo '<td>'.$genero = $row['genero'].'</td>';
    echo'</tr>';    
}
echo '</table>';

?>