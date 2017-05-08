<?php
/*
 * Copyright (c) 2017 by G3de Organisation
 * Pascal Rost (contact@pascalrost.de)
*/

session_start();

class sqlConnection {
	
	function connect() {

		$db_servername = "localhost";
		$db_username = "piStations";
		$db_password = "YOUR_PW_HERE";
		$db_name = "piStations";

		// Create connection
		$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		return $conn;
	}

	function getAllDevices() {
		
		$connect = $this->connect();

		$sql = "SELECT * FROM devices";
		
		$result = $connect->query($sql);

		if ($result->num_rows > 0) {
			return $result;
		} else {
			return $result;
		}
		
		$connect->close();
	}
}

?>
