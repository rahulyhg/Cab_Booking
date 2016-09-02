<?php
session_start();
if(isset($_SESSION["admin"]))
{
	header('Location: http://localhost/project/warn.html');
}
?>
<html>
<head>
<style>
body{
	  background-image: url("automobile.jpg");
	background-color:#74AFAD; 
}
p{
	text-indent:450px;
}
.head {
	width: 600px;
    height: 40px;
    background-color: 996633; 
    animation-name: example;
    animation-duration: 40s;
    padding :25px;
    position:relative;
	left:260px;
}
.head{
	font-style: italic;
	font-size: 50px;
text-shadow: 2px 2px #FF0000;
border-radius: 10px;
}
@keyframes example {
    from {background-color: 996633;}
    to {background-color: yellow;}
}
</style>
</head>
<body>
<br/><br/>
<div align="center" class="head">VATIA CABS</div>
<br/><br/><br/><br/><br/><br/><br/>
<h3><p><strong>LOGIN PORTAL</strong></p></h3>
<form name="login" action="<?php $_PHP_SELF ?>" method="POST">
<table width="50%" height="50" align="center">
<tr>
<td>ADMIN:</td><td><input type="text" name="admin" value="" required></td>
</tr>
<tr>
<td>PASSWORD:</td><td><input type="password" name="pswd" value="" required></td>
</tr>
</table>
<br/>
<center>
	<input type="submit" name="submit" value="submit" />
	<input type="reset" name="reset" value="reset" />
</center>
</form>
<br/>
</body>
</html>


<?php
$flag=0;
// set the adminname and password

if(isset($_POST["admin"]))
{
$adminnameset="varun";
$adminpswdset="123";

$adminr=$_POST["admin"];
$pswdr=$_POST["pswd"];
if($adminr==$adminnameset&&$pswdr==$adminpswdset)
{
	// setting of session variables to use it in other files
	$_SESSION["admin"]=$adminnameset;
	$_SESSION["pswd"]=$adminpswdset;
	//now diretion to the admin page
	header("Location:admin.php");
}
else{
$filename="userupdate.txt";
$file=fopen($filename,"r");
while(!feof($file))
{
$txt=fgets($file);
//echo $txt."<br/>";
$var=explode(" ", $txt);

if($var[0]!=""&&$var[1]==$adminr&&$var[2]==$pswdr)//access to the user file that is created before
{
	$flag=1;
// setting of session variables to use it in other files
	$_SESSION["admin"]=$adminr;
	$_SESSION["pswd"]=$pswdr;
	$_SESSION["userid"]=$var[0];
//Now direct to the admin page
	header("Location:userportal.php");
}
}
fclose($file);
echo("<div style=color:red;text-align:center>");
if($flag==0)
{
	echo "ENTERED PASSWORD OR USER NAME IS INCORRECT</div>";
}
}
}
?>