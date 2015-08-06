<h1> POSTS </h1>
<br>
<br>

<?php 
	
	// debug($posts);
	
	
	echo '<table class = "posts_table">';
	
		echo "<tr>";
			echo "<th>";
				echo "ID";
			echo "</th>";
			echo "<th>";
				echo "Title";
			echo "</th>";
			echo "<th>";
				echo "Body";
			echo "</th>";
			echo "<th>";
				echo "Created";
			echo "</th>";
			echo "<th>";
				echo "Actions";
			echo "</th>";
		echo "</tr>";
		
		foreach($posts as $p){
		
			echo "<tr>";
				echo "<td>";
					echo $p['Post']['id'];
				echo "</td>";
				echo "<td>";
					echo $p['Post']['title'];
				echo "</td>";
				echo "<td>";
					echo $p['Post']['body'];
				echo "</td>";
				echo "<td>";
					echo $p['Post']['created'];
				echo "</td>";
				echo "<td>";
					echo "Edit";
					echo $this->Html->link(' / Delete', array('controller' => 'posts', 'action' => 'delete', $p['Post']['id'] ));
				echo "</td>";
			echo "</tr>";
		}
	
	echo '</table>';
?>