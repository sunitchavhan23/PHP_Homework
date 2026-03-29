<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        Username: <input type="text" name="uname" id=""><br><br>
        Password: <input type="password" name="password" id=""><br><br>
        Are you agree ? <input type="checkbox" name="agree" value="Yes" id=""><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"]==="GET") {
    $user=$_GET["uname"];
    $pass=$_GET["password"];
    $agree=isset($_GET["agree"])?"Agreed":"Not Agreed";

   echo  "Welcome $user. You have $agree to the terms and conditions.";
}
?>