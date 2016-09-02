<?php
$flag=0;
$adminu=$_POST["adminu"];
$pswdu=$_POST["pswdu"];

$filename1="userupdate.txt";
$file1=fopen($filename1,"a+");
if($file1==false)
{
	echo "<h1>unable to open the file due to error in program</h1>";
	exit();
}
else
{
	$flag=1;
	// entry of new users in the file
	fwrite($file1,$adminu." ");
	fwrite($file1,$pswdu."\r\n" );
}
fclose($file1);
?>

<html>
<head>
<style>
p{
	text-indent:450px;
}
</style>
</head>
<body>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<h3><p><strong>NEW USER ACCOUNT</strong></p></h3>
<form action="<?php $_PHP_SELF ?>" method="POST">
<table width="50%" height="50" align="center">
<tr>
<td>ADMIN:</td><td><input type="text" name="adminu" value=""></td>
</tr>
<tr>
<td>PASSWORD:</td><td><input type="password" name="pswdu" value=""></td>
</tr>
</table>
<br/>
<center>
	<input type="submit" name="submit" value="submit" />
	<input type="reset" name="reset" value="reset" />
</center>
</form>
<p><a href="logadmin.php">Homepage</a></p>
</body>
</html>