<?php
echo "<h2>Problem 1.<h2>";
for ($i=1; $i<=10; $i++){
    if($i ==1){
        echo $i;
    }
    else{
        echo "-".$i;
    }
}
echo "<br>";

echo "<h2>Problem 2.<h2>";
for($i=0;$i<10;$i++){
    if($i<5){
        for($j=0;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    else{
        for($j=$i;$j<10;$j++){
            echo "*";
        }
        echo "<br>";
    }
    
    
}





?>