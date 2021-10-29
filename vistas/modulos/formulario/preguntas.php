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
        $cargo = $row['cargo'];

        $PRE=mysqli_query($con, "SELECT 
        grupo, cargo,
        PP1, PP2, PP3, PP4, PP5
        FROM preguntas
        WHERE cargo='$cargoP'");
        $row = mysqli_fetch_assoc($PRE);
        $PP1=isset($row['PP1']) ? $row['PP1'] : '';
        $PP2=isset($row['PP2']) ? $row['PP2'] : '';
        $PP3=isset($row['PP3']) ? $row['PP3'] : '';
        $PP4=isset($row['PP4']) ? $row['PP4'] : '';
        $PP5=isset($row['PP5']) ? $row['PP5'] : '';

        //var_dump($datos);
        //var_dump($PRE);

        /*if ($resultado = mysqli_query($con, $PRE)) 
        {
            while ($row = mysqli_fetch_assoc($resultado)) 
            {
                echo $row["$PRE"];
            }
        }*/

        /*if(empty($PP1)){
            echo "<h2> variable vacia o esta cero</h2>";
        }
        else{
            echo "<h2>variable no esta vacia</h2>";
        }*/
            /*if($row['PP1']!=null)
            {
                $PP1 = $row['PP1'];
            }

            if(['PP2']!=null) 
            {
                $PP2 = $row['PP2'];
            }

            if(['PP3']!=null) 
            {
            $PP3 = $row['PP3'];
            }

            if(['PP4']!=null) 
            {
            $PP4 = $row['PP4'];
            }

            if(['PP5']!=null) 
            {
            $PP5 = $row['PP5'];     
            }*/

?>
            <?php
}
?>