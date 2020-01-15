<?php
require_once 'database/db.php';

function get_data()
{
	$conn = new mysqli('localhost', 'oleg_dev', '24062000', 'test');

	$sql = "SELECT * FROM members";
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
