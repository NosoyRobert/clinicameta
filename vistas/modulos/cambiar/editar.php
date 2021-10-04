<?php

if(isset($_POST['editar']))
    {

        if(strlen 
        ($_POST['id_B']) >= 1 && strlen     
        ($_POST['E1']) >= 1 )

        {
        $id_B=trim($_POST['id_B']);
        $E1=trim($_POST['E1']);
        $E2=trim($_POST['E2']);
        $E3=trim($_POST['E3']);
        $jefe=trim($_POST['jefe']);
        
        }    

        $editar_sql = "UPDATE e_e SET id_B='$id_B', E1='$E1', E2='$E2', E3='$E3', jefe='$jefe' where id_B='$id_B'";
        $resul=mysqli_query($con, $editar_sql);

        
        if($resul)
        {
            ?><h1 class="titulo">Edicion registrada</h1><?php    
        }
        else
        {
                ?>
                <h1 class="titulo">Error</h1>
                <?php  
        }
        }
        else
        {
            ?>
            <h1 class="titulo">Completar datos</h1>
            <?php   
        }  


      
    
?>