<?php

/*Datos de conexion a la base de datos*/
define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
define('DB_USER', 'root');//Usuario de tu base de datos
define('DB_PASS', '');//Contraseña del usuario de la base de datos
define('DB_NAME', 'clinicameta');//Nombre de la base de datos

$con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$con){
    die("imposible conectarse: ".mysqli_error($con));
}
if (@mysqli_connect_errno()) {
    die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}

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
"SELECT PE.cedula, nombre, grupo, cargo, EV.id_A, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27  
FROM personas PE, evaluado EV, form FO 
WHERE PE.cedula=EV.cedula and EV.id_A=FO.id_A";

$resu=mysqli_query($con,$informacion);

header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename=Matriz.xls');
header('Pragma: no-cache');
header('Expires: 0');

echo'<table border=1>';
echo'<tr>';
echo'<th colspan=31>Matriz</th>';
echo'</tr>';
echo'<tr><th>cedula</th><th>nombre</th><th>grupo</th><th>cargo</th><th>P1</th><th>P2</th><th>P3</th><th>P4</th><th>P5</th><th>P6</th><th>P7</th><th>P8</th><th>P9</th><th>P10</th><th>P11</th><th>P12</th><th>P13</th><th>P14</th><th>P15</th><th>P16</th><th>P17</th><th>P18</th><th>P19</th><th>P20</th><th>P21</th><th>P22</th><th>P23</th><th>P24</th><th>P25</th><th>P26</th><th>P27</th></tr>';
while($row=$resu->fetch_array())
{   
    echo'<tr>';
    echo '<td>'.$cedula= $row['cedula'].'</td>';
    echo '<td>'.$nombre= $row['nombre'].'</td>';
    echo '<td>'.$grupo= $row['grupo'].'</td>';
    echo '<td>'.$cargo = $row['cargo'].'</td>';
    echo '<td>'.$Rp1 = $row['p1'].'</td>';
    echo '<td>'.$Rp2 = $row['p2'].'</td>';
    echo '<td>'.$Rp3 = $row['p3'].'</td>';
    echo '<td>'.$Rp4 = $row['p4'].'</td>';
    echo '<td>'.$Rp5 = $row['p5'].'</td>';
    echo '<td>'.$Rp6 = $row['p6'].'</td>';
    echo '<td>'.$Rp7 = $row['p7'].'</td>';
    echo '<td>'.$Rp8 = $row['p8'].'</td>';
    echo '<td>'.$Rp9 = $row['p9'].'</td>';
    echo '<td>'.$Rp10 = $row['p10'].'</td>';
    echo '<td>'.$Rp11 = $row['p11'].'</td>';
    echo '<td>'.$Rp12 = $row['p12'].'</td>';
    echo '<td>'.$Rp13 = $row['p13'].'</td>';
    echo '<td>'.$Rp14 = $row['p14'].'</td>';
    echo '<td>'.$Rp15 = $row['p15'].'</td>';
    echo '<td>'.$Rp16 = $row['p16'].'</td>';
    echo '<td>'.$Rp17 = $row['p17'].'</td>';
    echo '<td>'.$Rp18 = $row['p18'].'</td>';
    echo '<td>'.$Rp19 = $row['p19'].'</td>';
    echo '<td>'.$Rp20 = $row['p20'].'</td>';
    echo '<td>'.$Rp21 = $row['p21'].'</td>'; 
    echo '<td>'.$Rp22 = $row['p22'].'</td>';
    echo '<td>'.$Rp23 = $row['p23'].'</td>';
    echo '<td>'.$Rp24 = $row['p24'].'</td>';
    echo '<td>'.$Rp25 = $row['p25'].'</td>';
    echo '<td>'.$Rp26 = $row['p26'].'</td>';
    echo '<td>'.$Rp27 = $row['p27'].'</td>';
    echo'</tr>';    
}
echo '</table>';

?>