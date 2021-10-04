<?php
//require_once ("vistas/modulos/inicio.php");

$ses_sql=mysqli_query($con, "select cedula from personas where cedula='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['cedula'];

$EVA_sql=mysqli_query($con, "select E1, E2, E3, jefe, EV.id_B FROM evaluador EV, e_e EE where EV.id_B=EE.id_B and EV.cedula = '$login_session'");
$row = mysqli_fetch_assoc($EVA_sql); 

    
            if(isset($_POST['las']))
            {
                    if(strlen ($_POST['id_A']) >= 1)
                    {
                        $AE=trim($_POST['id_A']);
                        
                        /*if($AE == $login_session)
                        {*/
                            $resu = "UPDATE resultados SET VA='$AE' WHERE ID='RES'";
                            $resul=mysqli_query($con, $resu);

                                if($resul)
                                {
                                    ?>
                                    <a href="PDF/mpdf1.php" target="_blank" class="but">Generar PDF</a>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <h1 class="titulo">Error en colsulta para exportar</h1>
                                    <?php  
                                }
                        //}
                    }
            }    
?>