<?php
/*
 * Copyright (c) 2017 by G3de Organisation
 * Pascal Rost (contact@pascalrost.de)
*/

$devicesResult = $sqlConnection->getAllDevices();

//var_dump($devicesResult);
?>

<h1>Devices List</h1>

<?php
if ($devicesResult->num_rows > 0) {
	// output data of each row
	while($row = $devicesResult->fetch_assoc()) {
		echo $row['id'].' - '.$row['desc'].' - '.$row['ip'].' - '.$row['timestamp'];
		echo "<br />";
	}
}
?>
