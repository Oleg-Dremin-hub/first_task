<?php

require_once 'database/db.php';

$connection = DB::getInstance();

if (isset($_POST['fname']) && isset($_POST['lname'])) {
    $fname = htmlentities($_POST['fname']);
    $lname = htmlentities($_POST['lname']);
    $output = "
    <html>
    <head>
    <title>Анкетные данные</title>
    </head>
    <body>
    Вас зовут: $fname $lname </body>";

    $connection->query('INSERT INTO members (first_name, last_name, report_subject, counrty, phone, email) 
        VALUES ("' . $fname . '", "' . $lname . '", "fdgd", "Uk", "+3805456465", "fdgjdg@sfd.com")');

    echo $output;
} else {
    echo "Введенные данные некорректны";
}
