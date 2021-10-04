<?php
$user_check=$_SESSION['login_user_sys']; // Sesion iniciada
// SQL Query para completar la informacion del usuario

$ses_sql=mysqli_query($con, "select cedula from personas where cedula='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['cedula'];

if(!isset($login_session))
{
mysqli_close($con); // Cerrando la conexion
header('Location: index.php'); // Redirecciona a la pagina de inicio
}

$consulta = "SELECT cedula, nombre FROM personas WHERE cedula = $login_session";
$resultado= mysqli_query($con,$consulta);

if($resultado)
{
    while($row = $resultado->fetch_array())
    {
        $cedula = $row['cedula'];
    }

        $datos=mysqli_query($con, "SELECT cedula, grupo, cargo FROM evaluado WHERE cedula='$cedula'");
        $row = mysqli_fetch_assoc($datos);
        $grupo = $row['grupo'];
        $cargoP = $row['cargo'];

        $PRE=mysqli_query($con, "SELECT 
        grupo, cargo,
        PP1, PP2, PP3, PP4, PP5, 
        PP6, PP7, PP8, PP9, PP10  
        FROM preguntas
        WHERE cargo='$cargoP'");
        $row = mysqli_fetch_assoc($PRE);

        /*$PP1 = $_SESSION['PP1'] ?? '';
        $PP2 = $_SESSION['PP2'] ?? '';
        $PP3 = $_SESSION['PP3'] ?? '';
        $PP4 = $_SESSION['PP4'] ?? '';
        $PP5 = $_SESSION['PP5'] ?? '';*/


            if(['PP1']!==null)
            {
                $PP1 = $_SESSION['PP1'] ?? '';
            }

            if(['PP2']!=null) 
            {
                $PP2 = $_SESSION['PP2'] ?? '';
            }

            if(['PP3']!=null) 
            {
                $PP3 = $_SESSION['PP3'] ?? '';
            }

            if(['PP4']!=null) 
            {
                $PP4 = $_SESSION['PP4'] ?? '';
            }

            if(['PP5']!=null) 
            {
                $PP5 = $_SESSION['PP5'] ?? '';
            }
}