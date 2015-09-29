<?php
	$mysqli = new mysqli("localhost", "amysql", "aaaaaa"); 
	
	$sql = "SHOW DATABASES;";
	$result = $mysqli->query($sql);
	
	while($row = $result->fetch_assoc()) {
		echo $row['Database'] . '<br/>'; 
	}
	
	$result->free(); $mysqli->close();
?>