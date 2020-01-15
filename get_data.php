<?php
require_once 'database/db.php';

function get_data()
{
	$conn = new mysqli('mysql:host=localhost;dbname=test', 'oleg_dev', '24062000');

	$sql = "SELECT * FROM `members`";
	$result = $conn->query($sql);

	$test = [];

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($test, $row);
		}
	} else {
		echo "0 results";
	}

	return $test;
}

