<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="employee_db";

    $conn=new mysqli($servername, $username, $password, $dbname);

    if (! $conn) {
        echo "Database not connected !";
    }
?>