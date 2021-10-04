<?php
if(isset($_POST['borrar_id']))
    {

        if(strlen ($_POST['ID']) >= 1)
        {
            $id_form=trim($_POST['ID']);

            $eliminar="DELETE FROM form WHERE id_form='$id_form'";
            $resultado=mysqli_query($con,$eliminar);
        
            if($resultado)
            {
            ?>
            <h1 class="titulo">Eliminacion correcta</h1>
            <?php  
            }
            else
            {
            ?>
            <h1 class="titulo">Error Al eliminar</h1>
            <?php  
            }
    
        }  

        
    
        }
        else
        {
            ?>
            <h1 class="titulo">Completar datos</h1>
            <?php   
        } 