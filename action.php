<?php

require_once 'database/db.php';

$connection = DB::getInstance();

echo json_encode($_FILES);


if (isset($_POST['fname']) && isset($_POST['lname'])) {

	

	$fname = htmlentities($_POST['fname']);
	$lname = htmlentities($_POST['lname']);
	$birthdate = htmlentities($_POST['birthday']);
	$rs = htmlentities($_POST['rs']);
	$country = htmlentities($_POST['country']);
	$phone = htmlentities($_POST['phone']);
	$email = htmlentities($_POST['email']);
	$company = htmlentities($_POST['company']);
	$position = htmlentities($_POST['position']);
	$about_me = htmlentities($_POST['about_me']);
	$photo = basename($_FILES["photo"]);

	$connection->query('INSERT INTO `members`(first_name, last_name, birthdate, report_subject, country, phone, email, company, position, about_me, photo) 
     VALUES ("' . $fname . '", "' . $lname . '", "' . $birthdate . '", "' . $rs . '", "' . $country . '", "' . $phone . '", "' . $email . '", "' . $company . '", "' . $position . '", "' . $about_me . '", "' . file_get_contents($photo) . '")');
}


