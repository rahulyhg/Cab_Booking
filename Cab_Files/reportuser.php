<html>
<body bgcolor="#ffebcd">
<h3 align="center" style="color:#20b2aa"><bold>RECORDS OF DESIRED VALID USERS:</bold></h3>
	<form action="records.php" method="POST">Name of the user:
	<SELECT  name="f[]" style="margin-left:450px;width:200px">	
<?php
	$file=fopen("userupdate.txt","r");
while(!feof($file)){
	$tx=fgets($file);
	if($tx!=""){
	$tx1=explode(" ",$tx);
	if($txt1[0]!=" ")
		echo ("<OPTION value=".$tx1[0].">".$tx1[1]."</OPTION>");
}
}
fclose($file);
?>
</select>	
		<br /><br /><div style="margin-left:615px">
		<input type="submit" name="submit" value="submit" />&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="reset" value="reset" />
	</div>
	</form>
	<p><form action="admin.php" align="center"><input type="submit" value="Adminpage"></form></p>
</html>
</body>	