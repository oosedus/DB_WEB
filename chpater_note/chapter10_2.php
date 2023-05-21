<html>
<head>
<title>PHP Form example</title>
</head>
<body>
<?php
/*declare some functions*/
function print_form($f_name, $l_name, $email, $os)
{
?>
<form action="chapter10_2.php" method="get">
First Name: <input type="text" name="f_name" value="<?php echo $f_name?>" /> <br/>
Last Name <b>*</b>:<input type="text" name="l_name" value="<?php echo $l_name?>" /> <br/>
Email Address <b>*</b>:<input type="text" name="email" value="<?php echo $email?>" /> <br/>
Operating System: <input type="text" name="os" value="<?php echo $os?>" /> <br/><br/>
<input type="submit" name="submit" value="Submit" /> <input type="reset" />
</form>
<?php
} //** end of "print_form" function

function check_form($f_name, $l_name, $email, $os)
{
if (!$l_name||!$email){
echo "<h3>You are missing some required fields!</h3>";
print_form($f_name, $l_name, $email, $os);
}
else{
confirm_form($f_name, $l_name, $email, $os);
}
} //** end of "check_form" function

function confirm_form($f_name, $l_name, $email, $os)
{
?>
<h2>Thanks! Below is the information you have sent to us.</h2>
<h3>Contact Info</h3>
<?php
echo "Name: $f_name $l_name <br/>";
echo "Email: $email <br/>";
echo "OS: $os";
} //** end of "confirm_form" function

/*Main Program*/
if (!isset($_GET["submit"]))
{
?>
<h3>Please enter your information</h3>
<p>Fields with a "<b>*</b>" are required.</p>
<?php
print_form("","","","");
}
else{
check_form($_GET["f_name"],$_GET["l_name"],$_GET["email"],$_GET["os"]);
}
?>
</body>
</html>