<?php
if(isset($_POST['preguntas']))
    {

        if(strlen ($_POST['ID']) >= 1)
        {
            $cargo=trim($_POST['ID']);

            $mostrar=mysqli_query($con,"SELECT grupo, cargo, PP1, PP2, PP3, PP4, PP5 FROM preguntas WHERE cargo='$cargo'");
            $row = mysqli_fetch_assoc($mostrar);
            $grupo=$row['grupo'];
            $PP1=$row['PP1'];
            $PP2=$row['PP2'];
            $PP3=$row['PP3'];
            $PP4=$row['PP4'];
            $PP5=$row['PP5'];

            ?>

            <br><br><br>
            
            <table width="80%" class="tablita"> 

            <tr>
                <td><p class="center">Grupo:</p></td>
                <td><h3><?php echo $grupo; ?></h3></td>
            </tr>
            <tr>

                <td><p class="center">Cargo:</p></td>
                <td><h3><?php echo $cargo; ?></h3></td>
            </tr>
            <tr>
                <td><p class="center">Pregunta 1:</p></td>
                <td><h3><?php echo $PP1; ?></h3></td>
            </tr>
            <tr>
                <td><p class="center">Pregunta 2:</p></td>
                <td><h3><?php echo $PP2; ?></h3></td>
            </tr>
            <tr>
                <td><p class="center">Pregunta 3:</p></td>
                <td><h3><?php echo $PP3; ?></h3></td>
            </tr>
            <tr>
                <td><p class="center">Pregunta 4:</p></td>
                <td><h3><?php echo $PP4; ?></h3></td>
            </tr>
            <tr>
                <td><p class="center">Pregunta 5:</p></td>
                <td><h3><?php echo $PP5; ?></h3></td>
            </tr>

            </table>
            

            <br><br>

            <?php echo '<a href="profile.php?action=preguntas_cargo"  class="but">Cambiar Preguntas</a>'; 
        
    
        }  
        else
        {
            ?>
            <h1 class="titulo">datos No encontrados</h1>
            <?php     
        }

        
    
        }
        else
        {
            ?>
            <h1 class="titulo">Completar datos</h1>
            <?php   
        } 