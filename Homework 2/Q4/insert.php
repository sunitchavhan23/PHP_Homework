<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Full Name: <input type="text" name="fname" id=""><br><br>
        Email: <input type="text" name="email" id=""><br><br>
        Password: <input type="password" name="pass" id=""><br><br>
        Confirm Password: <input type="password" name="cpass" id=""><br><br>
        Job Title: <input type="text" name="job" id=""><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
include "db1.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $pass  = $_POST["pass"];
    $cpass = $_POST["cpass"];
    $job   = $_POST["job"];

    $isValid = true;

    if (empty($fname) || empty($email) || empty($pass) || empty($cpass) || empty($job)) {
        echo "<script>alert('All fields are compulsory')</script>";
        $isValid = false;
    }

    if ($isValid && $pass != $cpass) {
        echo "<script>alert('Password not match')</script>";
        $isValid = false;
    }


    if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Enter valid Email')</script>";
        $isValid = false;
    }

   
    if ($isValid) {

        // Hash password
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

        $sql = $conn->prepare("INSERT INTO emp(name,email,password,job_title) VALUES (?,?,?,?)");
        $sql->bind_param("ssss", $fname, $email, $hashed_pass, $job);

        if ($sql->execute()) {
            echo "<script>alert('Data Inserted Successfully')</script>";
        }

        if (!$sql->execute()) {
            echo "<script>alert('Error inserting data')</script>";
        }

        $sql->close();
    }
}
?>