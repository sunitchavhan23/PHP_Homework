<?php
    session_destroy();
    include "db.php";
    header("Location:project_login.php")
?>