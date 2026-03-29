<?php
echo "A. Using for Loop <br>";

$cars=["BMW","AUDI","TESLA","TOYOTA","MERCEDES"];
for ($i=0 ; $i < count($cars) ; $i++ ) { 
    echo "Car ". ($i+1)."= ".$cars[$i]."<br>";
}

echo "<br> B. Using ForEach Loop <br>";
$car_prices=["BMW"=>500000,"AUDI"=>200000,"TESLA"=>8900000,"TOYOTA"=>2510000];
foreach ($car_prices as $key => $value) {
    echo "Price of $key is $value <br>";
}

echo "<br> Array Push <br>";
array_push($cars,"HYUNDAI","KIA");
print_r ($cars);

echo "<br>Array Pop<br>";
array_pop($cars);
print_r($cars);

echo "<br>Array Merge<br>";
$new_cars=["HONDA","FERARRI"];
$merged=array_merge($cars,$new_cars);
print_r($merged);

echo "<br>Array Slice<br>";
$slice=array_slice($merged,1,4);
print_r($slice);

echo "<br>Array Keys<br>";
$array_key=array_keys($car_prices);
print_r($array_key);
?>