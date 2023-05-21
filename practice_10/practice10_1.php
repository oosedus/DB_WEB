<?php
session_start();
//set time out period (in-seconds)
$inactive = 10;
?>
<!DOCTYPE html>
<html>
<body>

<?php
//check to see if $_SESSION["timeout] is set
if(isset($_SESSION["timeout"])){
    //calculate the remain time to live
    $sessionTTL = time() - $_SESSION["timeout"];
    if($sessionTTL > $inactive){
        session_destroy();
        echo "Time is up. Session is destroyed!";
    }
    else{
        echo "We have time to timeout. ".$sessionTTL." seconds are passed";;
    }
}
else{
    $_SESSION["timeout"] = time();
    echo "Timeout is set with the current time";
}
?>
</body>
</html>