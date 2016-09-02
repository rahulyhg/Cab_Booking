
<html>
<head>
	<style>
	td,th
	{
		text-align: center;
		width: 150px;
		height: 35px;
		border: 1px solid black;
	}
	table
	{
		border: 1px solid black;
		border-collapse: collapse;
		margin-top: 0px;
	}
	h2
	{
		margin-bottom: 0px;
		color:#666666;
	}
	</style>
</head>
<body bgcolor="#dddddd">
	<?php 
 $flag=1;
 $co=0;
 //a bloc to have the records of certain car booking 
 if(isset($_POST["h"])){
 $inp=$_POST["h"];
 foreach($_POST["h"] as $car)
{
$dell=explode(" ",$car);
}
	$carf=fopen("carsentry.txt","r");
	$cars=filesize("carsentry.txt");
	$card=fread($carf,$cars);
	$care=explode(".",$card);
	for($inc=0;$inc<count($care)-1;$inc++)
	{
		$rec=explode(" ",$care[$inc]);
		if($rec[0]==$dell[0])
		{
			echo "<h2 align=center>The records of car ".$rec[1]." is as follows:</h2>";
		}
	}
	?>
	<table border="0" align="center">
		<tr>
			<th>User/Car</th>
				<th>Starting date</th>
				<th>Ending date</th>
			</tr>
			<?php
$ftxt="user.txt";
$file2=fopen($ftxt,"r");
while(!feof($file2)){
	$sta=fgets($file2);
	$check=explode(",", $sta);
	if($check[0]==""){

	}
	else if($check[1]==$dell[0]){
		$nam=fopen("userupdate.txt","r");
		$s=filesize("userupdate.txt");
	$cont=fread($nam,$s);
	$textr=explode(".",$cont);
	for($i=0;$i<count($textr)-1;$i++){
		$v=explode(" ",$textr[$i]);
		if($v[0]==$check[0]){
		echo "<tr><td>".$v[1]."</td>";
		}
	}
		
		$co=$co+1;
		echo "<td>".$check[2]."-".$check[3]."-".$check[4]."</td><td>".$check[5]."-".$check[6]."-".$check[7]."</td><tr><br/>";
	}
}
fclose($file2);
if($co==0){
	echo "<h3>TILL NOW NO RECORDS WERE PRESENT FOR THE GIVEN USER OR CAR</h3>";
}
}
// a bloc to have the records of user dependent details 
if(isset($_POST["f"])){
	$nami=$_POST["f"];
	foreach($_POST["f"] as $nami)
	{
		$naa=explode(" ",$nami);
	}
	$carf=fopen("userupdate.txt","r");
	$cars=filesize("userupdate.txt");
	$card=fread($carf,$cars);
	$care=explode(".",$card);
	for($inc=0;$inc<count($care)-1;$inc++)
	{
		$rec=explode(" ",$care[$inc]);
		if($rec[0]==$nami)
		{
			echo "<h2 align=center>The records of user ".$rec[1]." is as follows:</h2><br/>";
		}
	}?>
	<table border="0" align="center">
		<tr>
			<th>User/Car</th>
				<th>Starting date</th>
				<th>Ending date</th>
			</tr>
	<?php 
	$file3=fopen("user.txt","r");
	while(!feof($file3)){
		$stat=fgets($file3);
		$check1=explode(",", $stat);
		if($check1[0]==$naa[0]){
			$file4=fopen("carsentry.txt","r");
			while(!feof($file4)){
				$re=fgets($file4);
				$ac=explode(" ",$re);
				if($ac[0]==$check1[1]){
					echo ("<tr><td>".$ac[1]."</td>");
				}
			}
				fclose($file4);
				$co=$co+1;
			echo ("<td>".$check1[2]."-".$check1[3]."-".$check1[4]."</td><td>".$check1[5]."-".$check1[6]."-".$check1[7]."</td></tr>");
		}

	}
	fclose($file3);
	if($co==0){
	echo "<h3>TILL NOW NO RECORDS WERE PRESENT FOR THE GIVEN USER OR CAR</h3>";
}
}
?>
</table>
<br/><br/>
<center>
<form action="admin.php">
	<input name="submit" value="return to adminpage" type="submit"/>
	</form>
</center>
</body>
</html>