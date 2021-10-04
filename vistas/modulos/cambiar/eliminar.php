<?php
if(isset($_POST['eliminar']))
    {

        if(strlen ($_POST['ID']) >= 1)
        {
            $id_B=trim($_POST['ID']);

            $eliminar="DELETE FROM e_e WHERE id_B='$id_B'";
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
        ?>