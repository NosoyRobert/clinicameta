<?php
if(isset($_POST['buscar']))
    {

        if(strlen ($_POST['ID']) >= 1)
        {
            $id_B=trim($_POST['ID']);

            $CCCC=mysqli_query($con, "select PE.cedula, nombre from personas PE, evaluador EV where EV.cedula=PE.cedula and id_B='$id_B'");
            $row = mysqli_fetch_assoc($CCCC);
            $CC =$row['cedula'];
            $NAME =$row['nombre'];
            

            $buscar=mysqli_query($con, "SELECT id_B, E1, E2, E3, jefe FROM e_e WHERE id_B='$id_B'");
            $row = mysqli_fetch_assoc($buscar);
            $E1 = $row['E1'];
            $E2 = $row['E2'];
            $E3 = $row['E3'];
            $jefe = $row['jefe'];

            $E1_sql=mysqli_query($con, "select PE.cedula, nombre, grupo, cargo from personas PE, evaluado EV where EV.cedula=PE.cedula and id_A='$E1'");
            $row = mysqli_fetch_assoc($E1_sql);
            $CC1 =$row['cedula'];
            $NAME1 =$row['nombre'];
            $GRU1 =$row['grupo'];
            $CAR1 =$row['cargo'];
        
            $E2_sql=mysqli_query($con, "select PE.cedula, nombre, grupo, cargo from personas PE, evaluado EV where EV.cedula=PE.cedula and id_A='$E2'");
            $row = mysqli_fetch_assoc($E2_sql);
            $CC2 =$row['cedula'];
            $NAME2 =$row['nombre'];
            $GRU2 =$row['grupo'];
            $CAR2 =$row['cargo'];
        
            $E3_sql=mysqli_query($con, "select PE.cedula, nombre, grupo, cargo from personas PE, evaluado EV where EV.cedula=PE.cedula and id_A='$E3'");
            $row = mysqli_fetch_assoc($E3_sql);
            $CC3 =$row['cedula'];
            $NAME3 =$row['nombre'];
            $GRU3 =$row['grupo'];
            $CAR3 =$row['cargo'];
        
            $JE_sql=mysqli_query($con, "select PE.cedula, nombre, grupo, cargo from personas PE, evaluado EV where EV.cedula=PE.cedula and id_A='$jefe'");
            $row = mysqli_fetch_assoc($JE_sql);
            $CC4 =$row['cedula'];
            $NAME4 =$row['nombre'];
            $GRU4 =$row['grupo'];
            $CAR4 =$row['cargo'];

              ?>  <table width="50%" class="tablita"> 

            <tr>
                <td><p class="center">Departamento:</p></td>
                <td><h3><?php echo $GRU1; ?></h3></td>
            </tr>
            <tr>

                <td><p class="center">Evaluador:</p></td>
                <td><h3><?php echo $CC; ?></h3></td>
            </tr>
            <tr>
                <td><p class="center">Nombre:</p></td>
                <td><h3><?php echo $NAME; ?></h3></td>
            </tr>
            <tr>
                <td><p class="center">Evaluado 1:</p></td>
                <td><h3><?php echo $CC1; ?></h3></td>
            </tr>
            <tr>
                <td><p class="center">Nombre:</p></td>
                <td><h3><?php echo $NAME1; ?></h3></td>
            </tr>
            <tr>
                <td><p class="center">Evaluado 2:</p></td>
                <td><h3><?php echo $CC2; ?></h3></td>
            </tr>
            <tr>
                <td><p class="center">Nombre:</p></td>
                <td><h3><?php echo $NAME2; ?></h3></td>
            </tr>
            <tr>
                <td><p class="center">Evaluado 3:</p></td>
                <td><h3><?php echo $CC3; ?></h3></td>
            </tr>
            <tr>
                <td><p class="center">Nombre:</p></td>
                <td><h3><?php echo $NAME3; ?></h3></td>
            </tr>
            <tr>
                <td><p class="center">Jefe:</p></td>
                <td><h3><?php echo $CC4; ?></h3></td>
            </tr>
            <tr>
                <td><p class="center">Nombre:</p></td>
                <td><h3><?php echo $NAME4; ?></h3></td>
            </tr>

                </table>

            <br><br><br>
        

            <?php  

            echo '<a href="profile.php?action=cambiar_editar"  class="but">Editar</a>'; ?>

            <?php 
            
            echo '<a href="profile.php?action=cambiar_eliminar"  class="but">Eliminar</a>';


        }  
        else if(strlen ($_POST['GR']) >= 1 )
        {
        $GRO=trim($_POST['GR']);

            include "else.php";

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


