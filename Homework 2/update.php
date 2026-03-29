<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
       
        Name: <input type="text" name="name" id=""><br><br>
        Salary: <input type="number" name="salary" id=""><br><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    include "db.php";
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name=$_POST["name"];
        $salary=$_POST["salary"];

        $sql=$conn->prepare("update employee set salary=? where name=?");
        $sql->bind_param('ds', $salary, $name);

        if ($sql->execute()) {
            echo "<script>alert('Data Updated')</script>";
        }

    }

?>