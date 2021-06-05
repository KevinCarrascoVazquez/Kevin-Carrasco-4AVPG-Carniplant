<?php 
$inc = include("con_dbM.php");
if ($inc) {
	$consulta = "SELECT * FROM datos";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    
	    $nombre = $row['nombre'];
	    $email = $row['email'];
	    $suger = $row['suger'];
	    $fechareg = $row['fecha_reg'];
	    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>Email: </b> <?php echo $email ?><br>
        		    <b>Opinión: </b> <?php  echo $suger ?><br>
        		    <b>Fecha Registro: </b> <?php echo $fechareg ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>