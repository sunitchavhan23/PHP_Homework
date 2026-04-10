<?php
    if ($_SERVER["REQUEST_METHOD"]==="POST") {
        $name=$_POST["name"];
        $age=$_POST["age"];
        $course=$_POST["course"];

        header("Location:thankyou.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Students Details</h2>
    <form action="" method="POST">
        Name: <input type="text" name="name" id=""><br><br>
        Age: <input type="text" name="age" id=""><br><br>
        Course: <input type="text" name="course" id=""><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>