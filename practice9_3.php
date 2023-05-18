<?php
$d = 'A00';
for($n=0; $n<5; $n++){
    echo ++$d ."<br>";
}

function mod_operation($num1, $num2){
    while($num1 >= $num2){
        $num1 = $num1-$num2;
    }
    return $num1;
}
echo mod_operation(5,2);
?>