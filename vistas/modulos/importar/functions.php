<?php

        $con = mysqli_connect('192.168.11.247', 'talentoh', 'talentoh', 'talentoh');

        function insertar_datos($cedula, $nombre, $correo, $password, $cargo, $grupo)
        {
                global $con;

                $id_A = "A".$cedula;
                $id_B = "B".$cedula;

                $registrar_sql = "INSERT INTO personas(cedula,nombre,correo,password) VALUES ('$cedula','$nombre','$cedula','$cedula')";
        $resul=mysqli_query($con, $registrar_sql);

        $registrar_sql1 = "INSERT INTO evaluado(id_A,cedula,grupo,cargo) VALUES ('$id_A','$cedula','$grupo','$cargo')";
        $resul=mysqli_query($con, $registrar_sql1);

        $registrar_sql2 = "INSERT INTO evaluador(id_B,cedula) VALUES ('$id_B','$cedula')";
        $resul=mysqli_query($con, $registrar_sql2);

        set_time_limit(500);
        return $resul;
        }
?>