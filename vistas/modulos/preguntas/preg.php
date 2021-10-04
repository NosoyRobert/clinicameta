<?php

if(isset($_POST['cargo']))
    {

        if(strlen 
        ($_POST['GRU']) >= 1 && strlen
        ($_POST['CAR']) >= 1 && strlen 
        ($_POST['PP1']) >= 1 && strlen 
        ($_POST['PP2']) >= 1 && strlen 
        ($_POST['PP3']) >= 1 && strlen
        ($_POST['PP4']) >= 1 && strlen       
        ($_POST['PP5']) >= 1 )
        {
        $grupo=trim($_POST['GRU']);
        $cargo=trim($_POST['CAR']);
        $PP1=trim($_POST['PP1']);
        $PP2=trim($_POST['PP2']);
        $PP3=trim($_POST['PP3']);
        $PP4=trim($_POST['PP4']);
        $PP5=trim($_POST['PP5']);
        
        
          

        $editar_sql = "UPDATE preguntas SET grupo='$grupo', cargo='$cargo', PP1='$PP1', PP2='$PP2', PP3='$PP3', PP4='$PP4', PP5='$PP5' where grupo='$grupo' and cargo='$cargo'";
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
        }   
        else
        {
            ?>
            <h1 class="titulo">Completar datos</h1>
            <?php   
        }  


      
    
?>