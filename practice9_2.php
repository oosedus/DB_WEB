<?php
echo "<h2>Problem 1.</h2>";
$ceu = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava","Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin") ;
$max = 0;
foreach ($ceu as $key => $value){
    if ($key > $max){
        $max = $key;
    }
}

echo $max."<br>";
$max_key = max(array_keys($ceu));
echo $max_key;

echo "<h2>Problem 2.</h2>";    
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
    "holes" => array ( "First", 5 => "Second", "Third"));

$color_1 = $color["color"];
$holes = $color["holes"];

echo $color_1["a"]."<br>";
echo $holes[5]."<br>";

echo $color["color"]["a"]."<br>";
echo $color["holes"][5]. "<br>";

echo "<h2>Problem 3.</h2>"; 
$colors = array("c1"=>"Red", "c2"=>"Green", "c3"=>"Yellow", "c4"=>"Red");
$red = 0;
$green = 0;
$yellow = 0;
foreach ($colors as $key => $value){
    switch($value){
        case "Red":
            $red++;
            break;
        case "Yellow":
            $yellow++;
            break;
        case "Green":
            $green++;
            break;
        default:
            break;
    }
}
echo "Red count: ";
echo $red."<br>";

echo "Yellow count: ";
echo $yellow."<br>";
echo "Green count: ";
echo $green."<br>";

function count_array_value($my_array, $match){
    $count = 0;

    foreach ($my_array as $key => $value){
        if ($value == $match){
            $count++;
        }
    }
    return $count;
}

echo "Red color appears ".count_array_value($colors, "Red")." time(s).";
?>
