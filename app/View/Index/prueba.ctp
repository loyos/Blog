Hola esta es la vista prueba

<?php
	echo $resultado;
 ?>
 
<div class = 'image'>

	<?php 
		echo $this->Html->image('battletoads.jpg', array('height' => '500px;'));
	?>
 
</div>

<?php 
	echo $this->Html->link('Haz click aquí', array('controller' => 'index', 'action' => 'hola'));
?>