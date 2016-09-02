<?php
session_start();
 $flag=0;
 if (isset($_SESSION["admin"]) && ($_SESSION["admin"]==="varun")==true) { 
 	// Put stored session variables into local PHP variable 
 	$flag=1;
    $usname = $_SESSION["admin"]; 
 	$result = "Welcome : ".$usname;
 }
 else { 
 	 $flag=0;
         header('Location:http://localhost/project/delete.php');
 } 
if(isset($_POST["c"])){
$n=$_POST["c"];
$fa1=$_POST["fa"];
if(isset($_COOKIE["car"]))
{
	$_COOKIE["car"]=$_COOKIE["car"]+1;
	$carid=$_COOKIE["car"];
	setcookie("car",$_COOKIE["car"],time()+640000,"/");
}
else{
	setcookie("car",5651,time()+880000,"/");
	$carid=$_COOKIE["car"];
}

$file=fopen("carsentry.txt","a+");
if($file==false)
	echo "Unable to open the file due to technical problem <br/>";
else{
	fwrite($file,$carid." ");
	fwrite($file,$n." ".$fa1." .\r\n");
	fclose($file);
}
}
?>
<html>
<head>
	<style>
	body{
		background-color: #79BFA1;
	}
	</style>
	</head>
<body>
	<br/><br/>
	<h3 align="center" ><italic>NEW CAR INDUCTION PORTAL</italic></h3>
	<form action="<?php $_PHP_SELF ?>" method="POST">
	<table align="center">
		<tr>
			<td><h5>ENTER THE CAR NAME YOU WISH TO ADD:</h5></td>
			<td><INPUT type="text" name="c" value="" required></td>;
		</tr>
		<tr>
			<td><h5>ENTER THE FARE FOR THE VEHICLE FOR A MONTH:</h5></td>
			<td><input type="number" name="fa" value="" required></td>
		</tr>
	</table>
	<br/><br/>
<center>
	<input  type="submit" name="submit" value="submit"/>
	<input type="reset" name="reset" value="reset" />
</center>
	</form>
	<center>
	<form action="admin.php">
	<input type="submit" name="submit" value="return">
	</form>
	
	</center> 
	</body>
</html>