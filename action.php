<?php

require_once 'database/db.php';

$connection = DB::getInstance();

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
    $photo = htmlentities($_POST['photo']);

    $connection->query('INSERT INTO `members`(first_name, last_name, birthdate, report_subject, country, phone, email, company, position, about_me, photo) 
     VALUES ("' . $fname . '", "' . $lname . '", "' . $birthdate . '", "'. $rs .'", "'. $country .'", "'. $phone .'", "'. $email .'", "'. $company .'", "'. $position .'", "'.$about_me.'", "'.$photo.'")');
} else {
    echo "Введенные данные некорректны";
}
    
    
    


$conn =  new mysqli('localhost', 'oleg_dev', '24062000', 'test');

$sql = "SELECT * FROM `members`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["first_name"]. " " . $row["last_name"] . " " . $row["birthdate"] . "<br>";
    }
} else {
    echo "0 results";
}



?>


