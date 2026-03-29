<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="classwork_2";

    $conn=new mysqli($servername, $username, $password, $dbname);

    if (! $conn) {
        echo "Database not connected";
    }

?>