<?php

        $con = mysqli_connect('192.168.11.247', 'talentoh', 'talentoh', 'talentoh');

        function insertar_datos($grupo,$cargo,$id_pre,$PP1,$PP2,$PP3,$PP4,$PP5)
        {
                global $con;

                $registrar_sql = "INSERT INTO preguntas(grupo,cargo,id_pre,PP1,PP2,PP3,PP4,PP5) VALUES ('$grupo','$cargo','$id_pre','$PP1','$PP2','$PP3','$PP4','$PP5')";
                $resul=mysqli_query($con, $registrar_sql);

                set_time_limit(500);
                return $resul;
        }
?>