<?php
include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("config/conexion.php");//Contiene de conexion a la base de datos


include "style.php";

echo '<a href="profile.php?action=administrar"  class="but">Volver</a>';
?>

<form method="POST">

    <h1 class="titulo"> EDITAR PREGUNTAS POR CARGO </h1>
    <br>

        <p class="center">Debe completar todos los datos para poder editarlo</p><br><br>

	<hr class="hr">
	<div class="section">
    <h3 class="sex">EDITAR PREGUNTAS</h3>


      <br>


            <!--  cedula  -->


			<p class="bren";>GRUPO:</p>
            <input class="field" type="text" id="GRU" name="GRU" placeholder="Ingrese el Grupo">
			<p class="bren";>CARGO:</p>
            <input class="field" type="text" id="CAR" name="CAR" placeholder="Ingrese el Cargo">
            <p class="bren";>Pregunta 1:</p>
            <textarea name="PP1" rows="10" cols="40" placeholder="Pregunta 1"></textarea>
            <p class="bren";>Pregunta 2:</p>
            <textarea name="PP2" rows="10" cols="40" placeholder="Pregunta 2"></textarea>
            <p class="bren";>Pregunta 3:</p>
            <textarea name="PP3" rows="10" cols="40" placeholder="Pregunta 3"></textarea>
            <p class="bren";>Pregunta 4:</p>
            <textarea name="PP4" rows="10" cols="40" placeholder="Pregunta 4"></textarea>
            <p class="bren";>Pregunta 5:</p>
            <textarea name="PP5" rows="10" cols="40" placeholder="Pregunta 5"></textarea>
            <br>
            <br>



            <br>
            </div>
            <br><hr class="hr"><br/>


                        
                            <!--  Enviar  -->

                            <br>    
                        

                            </div>

                                <input type="submit" name="cargo">
                               
                            

    </form>

    <?php 
        include "preguntas/preg.php";
    ?>