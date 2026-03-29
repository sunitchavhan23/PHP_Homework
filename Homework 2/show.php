<?php
    include "db.php";
    $result=$conn->query("select * from employee");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Employee Records</h1><br>
    <table border="1" cellpadding="5" style="margin:auto;border-collapse:collapse;width:80%;background:linear-gradient(lightpink,lightyellow,lightblue); border-radius:10px;overflow:hidden;box-shadow:0 5px 15px rgba(0,0,0,0.2);">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>POSITION</td>
            <td>SALARY</td>
        </tr>

        <?php
        while ($row=$result->fetch_assoc()) {
        ?>    
        
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["name"]?></td>
                <td><?php echo $row["position"]?></td>
                <td><?php echo $row["salary"]?></td>
            </tr>

        <?php
        }
        ?>

    </table>
</body>
</html>