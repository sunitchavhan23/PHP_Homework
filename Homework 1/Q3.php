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
        Phone Number: <input type="number" name="pnum" id=""><br><br>
        Car Brand: <select name="cbrand" id="">
            <option value="Toyota">Toyota</option>
            <option value="Renault">Renault</option>
            <option value="Tata">Tata</option>
            <option value="Honda">Honda</option>
            <option value="Maruti">Maruti</option>
        </select><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $fname=$_POST["fname"];
    $pnum=$_POST["pnum"];
    $cbrand=$_POST["cbrand"];

    echo "Hello, $fname. Your Phone number is $pnum and your preferred car brand is $cbrand.";
}
?>