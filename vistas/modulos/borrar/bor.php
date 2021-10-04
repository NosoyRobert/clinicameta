<?php
if(isset($_POST['borrar']))
    {

        if(strlen ($_POST['ID']) >= 1)
        {
            $id_B=trim($_POST['ID']);

            $mostrar="SELECT id_form, fecha, id_A, id_B FROM form WHERE id_B='$id_B'";
            $resultado=mysqli_query($con,$mostrar);
            $numero=0;
            

            ?>

            <br><br><br>
            
            <table width="80%" class="tablita"> 
            
                       
            
                        <tr>
                            <td><p class="center">ID Form:</p></td>
                            <td><p class="center">Fecha:</p></td>
                            <td><p class="center">Evaluador:</p></td>
                            <td><p class="center">Evaluado:</p></td>
            
                        </tr>
            
            <?php
            
            
            while($row=$resultado->fetch_array())
            {
                
                $id_form = $row['id_form'];
                $fecha = $row['fecha']; 
                $id_A = $row['id_A'];
                $id_B = $row['id_B'];   ?>
            
            
            
                        <tr>
                            <td><p class="center"><?php echo $id_form; ?></p></td>
                            <td ><p class="center"><?php echo $fecha; ?></p></td>
                            <td ><p class="center"><?php echo $id_A; ?></p></td>
                            <td ><p class="center"><?php echo $id_B; ?></p></td>
                        </tr>
            
            
                <?php
            
                $numero++;
            }
            
            ?>
                        <tr>
                            <td colspan="15"><p class="center">Totales Evaluaciones: <?php echo $numero; ?></p>
                        </tr>
            </table>
            

            <br><br>

            <?php echo '<a href="profile.php?action=borrar_id"  class="but">Borrar por ID Form</a>'; 
            
            
            
    
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