<html>
<body><p>
<?php
echo '<h2>Problem 1.</h2>';
$foo = true; if ($foo) echo "1. It is TRUE! <br/>";
$txt = '1234'; echo "2. $txt <br/>";
$num = 1234; echo "3. $num <br/>";
$num = 1.234; echo "4. $num <br/>";
$beer = 'Heineken'; echo "5. $beer's taste is great <br/>";
$beer = 'Heineken'; echo "6. \$beer's taste is great <br/>";
$str = <<<EOD
7. Example of string
spanning multiple lines
using "heredoc" syntax.
EOD;
echo $str;
?>

<?php
echo '<br>';
echo '<br>';
echo '<h2>Problem 2.</h2>';
$arr = array(5 => 1, 12 => 2);
foreach ($arr as $key => $value) {
echo $key, '=>', $value;
echo '<br>';
}
echo '<br>';
$arr[] = 56; // the same as $arr[13] = 56;
$arr["x"] = 42; // adds a new element
foreach ($arr as $key => $value) {
echo $key, '=>', $value;
echo '<br>';
}
?>

<?php
echo '<br>';
echo '<br>';
echo '<h2>Problem 3.</h2>';
$arr = array(5 => 1, 12 => 2);
foreach ($arr as $key => $value) {
echo $key, '=>', $value;
echo '<br>';
}
echo '<br>';
unset($arr[5]); // removes the element
foreach ($arr as $key => $value) {
echo $key, '=>', $value;
echo '<br>';
}
unset($arr); // deletes the whole array
?>

<?php
echo '<br>';
echo '<h2>Problem 4.</h2>';
$arr = array(1 => 'one', 2 => 'two', 3 => 'three');
unset($arr[2]);
foreach ($arr as $key => $value) {
echo $key, '=>', $value;
echo '<br>';
}
echo '<br>';
$b = array_values($arr);
foreach ($b as $key => $value) {
echo $key, '=>', $value;
echo '<br>';
}
?> 

<?php
echo '<h2>Problem 5.</h2>';
$d=date("D");
echo $d, "<br/>";
if ($d=="Fri")
echo "Have a nice weekend! <br/>";
else
echo "Have a nice day! <br/>";
?>

<?php
echo '<h2>Problem 6.</h2>';
$x = rand(1,5); // random integer
echo "x = $x <br/><br/>";
switch ($x)
{
case 1:
echo "Number 1";
break;
case 2:
echo "Number 2";
break;
case 3:
echo "Number 3";
break;
default:
echo "No number between 1 and 3";
break;
}
?>

<?php
echo '<h2>Problem 7.</h2>';
$a_array=array("a","b","c");
foreach ($a_array as $key => $value)
{
    echo $key . " = " . $value . "<br/>";
}
?>


</p></body>
</html>