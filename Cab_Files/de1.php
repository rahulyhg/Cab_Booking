<?php
if(isset($_POST["c"])){
$n=$_POST["c"];
if(isset($_COOKIE["car"]))
{
	$_COOKIE["car"]=$_COOKIE["car"]+1;
	$carid=$_COOKIE["car"];
	setcookie("car",$_COOKIE["car"],time()+64000,"/");
}
else{
	setcookie("car",565,time()+88000,"/");
	$carid=$_COOKIE["car"];
}
$file=fopen("carsentry.txt","a+");
if($file==false)
	echo "Unable to open the file due to technical problem <br/>";
else{
	fwrite($file,$carid." ");
	fwrite($file,$n."."."\r\n");
	fclose($file);
}
}
?>
<html>
<body>
	<h3 align="center" ><italic>NEW CAR INDUCTION PORTAL</italic></h3>
	<form action="<?php $_PHP_SELF ?>" method="POST">
	<table align="center">
		<tr>
			<td><h5>ENTER THE CAR NAME YOU WISH TO ADD:</h5>
			<INPUT type="text" value=" " name="c"/></td>;
		</tr>
	</table>
	<input type="submit" name="submit" value="submit"/>
	<input type="reset" name="reset" value="reset" />
	</form>
	</body>
</html>