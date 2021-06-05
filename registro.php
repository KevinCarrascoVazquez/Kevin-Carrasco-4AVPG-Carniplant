<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['suger']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $suger = trim($_POST['suger']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO `datos`(nombre, email, suger, fecha_reg) VALUES ('$name','$email','$suger','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
