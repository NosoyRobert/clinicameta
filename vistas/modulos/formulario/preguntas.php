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
        //NOSE QUE SEA ESTO PERO SIRVE
        $EVA_sql=mysqli_query($con, "select E1, E2, E3, jefe, EV.id_B FROM evaluador EV, e_e EE where EV.id_B=EE.id_B and EV.cedula = '$login_session'");
        $row = mysqli_fetch_assoc($EVA_sql);
        $E1 = $row['E1']; 
        $E2 = $row['E2']; 
        $E3 = $row['E3']; 
        $JE = $row['jefe']; 
        $id_B = $row['id_B'];
        //EVALUADOR 1
        $E1_sql=mysqli_query($con, "select PE.cedula, nombre, grupo, cargo from personas PE, evaluado EV where EV.cedula=PE.cedula and id_A='$E1'");
        $row = mysqli_fetch_assoc($E1_sql);
        $CC1 =$row['cedula'];
        $NAME1 =$row['nombre'];
        $GRU1 =$row['grupo'];
        $CAR1 =$row['cargo'];
        //EVALUADOR 2
        $E2_sql=mysqli_query($con, "select PE.cedula, nombre, grupo, cargo from personas PE, evaluado EV where EV.cedula=PE.cedula and id_A='$E2'");
        $row = mysqli_fetch_assoc($E2_sql);
        $CC2 =$row['cedula'];
        $NAME2 =$row['nombre'];
        $GRU2 =$row['grupo'];
        $CAR2 =$row['cargo'];
        //AUTOEVALUACION
        $E3_sql=mysqli_query($con, "select PE.cedula, nombre, grupo, cargo from personas PE, evaluado EV where EV.cedula=PE.cedula and id_A='$E3'");
        $row = mysqli_fetch_assoc($E3_sql);
        $CC3 =$row['cedula'];
        $NAME3 =$row['nombre'];
        $GRU3 =$row['grupo'];
        $CAR3 =$row['cargo'];
        //JEFE
        $JE_sql=mysqli_query($con, "select PE.cedula, nombre, grupo, cargo from personas PE, evaluado EV where EV.cedula=PE.cedula and id_A='$JE'");
        $row = mysqli_fetch_assoc($JE_sql);
        $CC4 =$row['cedula'];
        $NAME4 =$row['nombre'];
        $GRU4 =$row['grupo'];
        $CAR4 =$row['cargo'];

        //var_dump($CAR1);
        //EVALUADOR
        $datos=mysqli_query($con, "SELECT cedula, grupo, cargo FROM evaluado WHERE cedula='$cedula'");
        $row = mysqli_fetch_assoc($datos);
        $grupo = $row['grupo'];
        $cargoP = $row['cargo'];
        $cargoA = $row['cargo'];

        //ELECCION DE PREGUNTAS ESPECIFICAS DE EVALUADO
        $PRE=mysqli_query($con, "SELECT 
        grupo, cargo,
        PP1, PP2, PP3, PP4, PP5
        FROM preguntas
        WHERE cargo='$CAR1'");
        $row = mysqli_fetch_assoc($PRE);
        $PP1=isset($row['PP1']) ? $row['PP1'] : '';
        $PP2=isset($row['PP2']) ? $row['PP2'] : '';
        $PP3=isset($row['PP3']) ? $row['PP3'] : '';
        $PP4=isset($row['PP4']) ? $row['PP4'] : '';
        $PP5=isset($row['PP5']) ? $row['PP5'] : '';

        //var_dump($datos);
        //var_dump($PRE);
        
?>
            <?php
}
?>