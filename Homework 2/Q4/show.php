<?php
    include "db1.php";
    $result=$conn->query("select * from emp");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 align="center">Employee Details</h3>
    <table border="1" cellpadding="5" cellspacing="5" style="margin:auto;border-collapse:collapse;width:auto;background:#fff;border-radius:1px;overflow:hidden;box-shadow:0 5px 5px rgba(0,0,0,0.2);">
        <tr>
            <td>ID</td>
            <td>Full Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Job Title</td>
        </tr>

        <?php
        while($row=$result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row["id"]?></td>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["password"]?></td>
            <td><?php echo $row["job_title"]?></td>
        </tr>

        <?php 
        }
        ?>
    </table>
</body>
</html>