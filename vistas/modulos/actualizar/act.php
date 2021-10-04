<?php

if(isset($_POST['actualizar']))
    {

        if(strlen    
        ($_POST['cargo']) >=1 && strlen
        ($_POST['grupo']) >=1 && strlen
        ($_POST['celular']) >= 1 && strlen 
        ($_POST['correo']) >= 1 && strlen 
        ($_POST['direccion']) >= 1 && strlen 
        ($_POST['edad']) >= 1 && strlen 
        ($_POST['genero']) >= 1 )

        {
        $cargo=trim($_POST['cargo']);
        $grupo=trim($_POST['grupo']);
        $celular=trim($_POST['celular']);
        $correo=trim($_POST['correo']);
        $direccion=trim($_POST['direccion']);
        $edad=trim($_POST['edad']);
        $genero=trim($_POST['genero']);

        $actualizar_sql = "UPDATE evaluado SET cargo='$cargo', grupo='$grupo', celular='$celular', correo='$correo', direccion='$direccion', edad='$edad', genero='$genero' where cedula='$cedula'";
        $resul=mysqli_query($con, $actualizar_sql);
            
        if($resul)
        {
            ?><h1 class="titulo">Los datos han sido actualizados</h1><?php    
        }
        else
        {
                ?>
                <h1 class="titulo">Error en actualizar los datos</h1>
                <?php  
        }

     }   
    }
?>
   