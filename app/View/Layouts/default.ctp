<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'Rental Cars' ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('style');
		// echo $this->fetch('meta');
		// echo $this->fetch('css');
		// echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		
		<div id="header">
			<h1><?php echo 'Rental'; ?></h1>
		</div>
		
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		
		<div id="footer">
			<?php 
				echo 'Footer';
			?>
		</div>
	</div>
	
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
