<?php 
	include 'style.php';

	$con = mysqli_connect('192.168.11.247', 'talentoh', 'talentoh', 'talentoh');

	if(isset($_POST['truncate']))
	{
		$truncar = "DELETE FROM e_e";

		$si = mysqli_query($con, $truncar);

		if($si)
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
	}else if(isset($_POST['preguntas']))
	 {
	 	$truncar = "DELETE FROM preguntas";

		$si = mysqli_query($con, $truncar);

		if($si)
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
	 }else if(isset($_POST['personas']))
	  {
	 	$truncar = "DELETE FROM personas";
		$si = mysqli_query($con, $truncar);

		$truncar1 = "DELETE FROM evaluado";
		$si = mysqli_query($con, $truncar1);

		$truncar2 = "DELETE FROM evaluador";
		$si = mysqli_query($con, $truncar2);

		if($si)
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
?>
<br>
<br>
<br>
<br>

<h1>Tabla de evaluados</h1>
<form method="POST" id="formtruncate">
	<input type="hidden" name="truncate" value=""> 
	<input type="submit" name="truncar" value="truncar">
</form>

<h1>Tabla Preguntas</h1>
<form method="POST" id="formtruncate">
	<input type="hidden" name="preguntas" value=""> 
	<input type="submit" name="truncar" value="truncar">
</form>

<h1>Tabla Personas</h1>
<form method="POST" id="formtruncate">
	<input type="hidden" name="personas" value=""> 
	<input type="submit" name="truncar" value="truncar">
</form>
