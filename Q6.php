<?php
echo "A. Single Quotes & Double Quotes<br>";
$car1='This is Maruti';
echo $car1. "<br>";

$model="AUDI";
$car2="This is $model Car.";
echo $car2."<br>";

echo "<br>B. Concatenation<br>";
$car_model="BMW";
$car_price="5120000";
echo "Car Model: ".$car_model."<br>"."Car Price: ".$car_price."<br>";

echo "<br>C. Search Substring using strpos()<br>";
$text="Toyota cars are the best.";
$search="best";
$position=strpos($text,$search);
if ($position !== false) {
    echo "Substring '$search' found at position: $position <br>";
} else {
    echo "Substring not found<br>";
}

echo "<br>str_replace Function<br>";
$text2="Maruti Cars are cheap";
$new_s=str_replace("cheap","affordable",$text2);
echo "Original: ".$text2."<br>";
echo "Modified: ".$new_s."<br>";


echo "<br>String Library Functions<br>";
$string="  Mercedes cars are premium ones";
echo "Original String: ".$string."<br>";
echo "Length:".strlen($string);
echo "<br>Lowercase: ".strtolower($string);
echo"<br> Uppercase: ".strtoupper($string);
$trim=trim($string);
echo "<br> Trimmed: ".$trim;
echo "<br> Substring: ".substr($trim,0,8);
?>