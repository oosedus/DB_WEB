<?php

echo "<h2>Problem 1.</h2>";

function check_prime($num){
    for($i = 2; $i<$num;$i++){
        if($num%$i ==0){
            return false;
        }
    }
    return true;
}

function reverse_string($str){
    $num = strlen($str);
    if($num == 1){
        return $str;
    }
    else{
        $num--;
        return reverse_string(substr($str, 1,$num).)substr($str, 0,1);
    }
}
?>