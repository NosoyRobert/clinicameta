<?php

        $con = mysqli_connect('localhost', 'root', '', 'clinicameta');

        function insertar_datos($grupo,$cargo,$PP1,$PP2,$PP3,$PP4,$PP5)
        {
                global $con;

                $registrar_sql = "INSERT INTO preguntas(grupo,cargo,PP1,PP2,PP3,PP4,PP5) VALUES ('$grupo','$cargo','$PP1','$PP2','$PP3','$PP4','$PP5')";
                $resul=mysqli_query($con, $registrar_sql);

                set_time_limit(500);
                return $resul;
        }
?>