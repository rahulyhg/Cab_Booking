<html>
<body bgcolor="#ff9999">
	<h3 align="center">RECORDS OF A GIVEN CAR</h3>
<form action="records.php" method="POST">
 <SELECT name="h[]" style="margin-left:550px;width:200px">
<?php
$filec=fopen("carsentry.txt","r");
$size=filesize("carsentry.txt");
$fi=fread($filec,$size);
$cont=explode(".",$fi);
$va=count($cont);
for($i=0;$i<$va-1;$i++){

	$txtf=explode(" ",$cont[$i]);
	echo ("<OPTION value=".$txtf[0].">".$txtf[1]."</OPTION>");
}
fclose($filec);
?>
</select>
<br/><br/><div style="margin-left:600px;">
<input type="submit" name="submit" value="submit" />
<input type="reset" name="reset" value="reset" />
</div>
	</form>
</body>