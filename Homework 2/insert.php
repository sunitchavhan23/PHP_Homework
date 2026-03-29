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
        Position: <input type="text" name="position" id=""><br><br>
        Salary: <input type="number" name="salary" id=""><br><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    include "db.php";
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name=$_POST["name"];
        $position=$_POST["position"];
        $salary=$_POST["salary"];

        $sql=$conn->prepare("insert into employee (name,position,salary) values(?,?,?)");
        $sql->bind_param('ssd',$name, $position, $salary);

        if ($sql->execute()) {
            echo "<script>alert('Data Inserted')</script>";
        }

    }

?>