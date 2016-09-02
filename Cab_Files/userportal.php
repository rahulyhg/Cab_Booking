<?php
session_start();
$i=$_SESSION["admin"];
if(isset($i) && ($_SESSION["admin"]==="varun")==false)
{
echo "<p> WELCOME Mr.".$i;
echo ("<a href=logoutp.php><span class=logout>Logout</span></a></p><br/>");
}
else
{
	header('Location:http://localhost/project/delete.php');
}
?>
<html>
<head>
	<style>
		body{
			background-color:#b0e0e6;
		}
		p
		{
			font-size:20px;
			text-transform: uppercase;
			text-align:center;
			margin-bottom: 30px;
		}

		h3{

			color:green;
		}
		p.lo{
			text-align: center;
		}
		table
		{
			text-align:center;
			display:inline-block;
			margin-left:200px;
		}
		td
		{
			height:35px;
			width: 60px;
		}
		small
		{
			color: red;
			width:200px;
			display: inline-block;
			margin-left:100px;
			margin-top:0px;
		}
		.input
		{
			background-color:#7fffd4;
		
		}
		.logout{
			text-decoration: none;
			float:right;
			width:65px;
			height:20px;
			padding: 10px 20px 10px 20px;
			border-radius: 20px;
			background-color:#87ceeb;
			font-size: 18px;
			color:white;
			font-style:sans-serif;
			text-transform:none;
		}
		.logout:hover
		{
			background-color: #1e90ff;
		}
	</style>
	<script>
	function show()
	{
		document.getElementById("alert").innerHTML="*Fare of each respecitve car is given in bracket.Rate is in per month.";
	}
	function res()
	{
		document.getElementById("alert").innerHTML="";
	}
	</script>
	</head>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST" name="f1">
	<div class="input">
<table width="60%">
	<tr>
	<td><b>DIFFEENT CABS AVAILABLE:</b></td>
<td colspan="3"> <SELECT name="h[]" onfocus="show()" onblur="res()">
<?php
$filec=fopen("carsentry.txt","r");
$size=filesize("carsentry.txt");
$fi=fread($filec,$size);
$cont=explode(".",$fi);
$va=count($cont);
for($i=0;$i<$va-1;$i++){

	$txtf=explode(" ",$cont[$i]);
	echo ("<OPTION value=".$txtf[0].">".$txtf[1]."(".$txtf[2].")</OPTION>");
}
fclose($filec);
?> 
</select>
</td>
</tr>
<tr>
	<td rowspan="2">START DATE:</td>
	<td>DD</td>
	<td>MM</td>
	<td>YY</td>
</tr>
<tr>
	<td><SELECT size="2" name="sd[]">
<OPTION value="1 ">1</OPTION><OPTION value="2 ">2</OPTION><OPTION value="3 ">3</OPTION><OPTION value="4 ">4</OPTION>
<OPTION value="5 ">5</OPTION><OPTION value="6 ">6</OPTION><OPTION value="7 ">7</OPTION><OPTION value="8 ">8</OPTION><OPTION value="9">9</OPTION>
<OPTION value="10">10</OPTION><OPTION value="11">11</OPTION><OPTION value="12">12</OPTION><OPTION value="13">13</OPTION><OPTION value="14">14</OPTION>
<OPTION value="15">15</OPTION><OPTION value="16">16</OPTION><OPTION value="17">17</OPTION><OPTION value="18">18</OPTION><OPTION value="19">19</OPTION>
<OPTION value="20">20</OPTION><OPTION value="21">21</OPTION><OPTION value="22">22</OPTION><OPTION value="23">23</OPTION><OPTION value="24">24</OPTION>
<OPTION value="25">25</OPTION><OPTION value="26">26</OPTION><OPTION value="27">27</OPTION><OPTION value="28">28</OPTION><OPTION value="29">29</OPTION>
<OPTION value="30">30</OPTION><OPTION value="31">31</OPTION>
</select>
</td>
<td>
	<SELECT size="2" MULTIPLE name="sm[]">
<OPTION value="1">1</OPTION><OPTION value="2">2</OPTION><OPTION value="3">3</OPTION><OPTION value="4">4</OPTION>
<OPTION value="5">5</OPTION><OPTION value="6">6</OPTION><OPTION value="7">7</OPTION><OPTION value="8">8</OPTION>
<OPTION value="9">9</OPTION><OPTION value="10">10</OPTION><OPTION value="11">11</OPTION><OPTION value="12">12</OPTION>
	</select>
</td>	
<td>
	<SELECT size="2" MULTIPLE name="sy[]">
<OPTION value="2015">2015</OPTION><OPTION value="2016">2016</OPTION>
<OPTION value="2017">2017</OPTION><OPTION value="2018">2018</OPTION>
</select>
</td>	
</tr>
<tr>
	<td rowspan="2">END DATE:</td>
	<td>DD</td>
	<td>MM</td>
	<td>YY</td>
</tr>
<tr>
	<td><SELECT size="2" width="8" MULTIPLE name="ed[]">
	<OPTION value="1 ">1</OPTION><OPTION value="2 ">2</OPTION><OPTION value="3 ">3</OPTION><OPTION value="4 ">4</OPTION>
<OPTION value="5 ">5</OPTION><OPTION value="6 ">6</OPTION><OPTION value="7 ">7</OPTION><OPTION value="8 ">8</OPTION><OPTION value="9">9</OPTION>
<OPTION value="10">10</OPTION><OPTION value="11">11</OPTION><OPTION value="12">12</OPTION><OPTION value="13">13</OPTION><OPTION value="14">14</OPTION>
<OPTION value="15">15</OPTION><OPTION value="16">16</OPTION><OPTION value="17">17</OPTION><OPTION value="18">18</OPTION><OPTION value="19">19</OPTION>
<OPTION value="20">20</OPTION><OPTION value="21">21</OPTION><OPTION value="22">22</OPTION><OPTION value="23">23</OPTION><OPTION value="24">24</OPTION>
<OPTION value="25">25</OPTION><OPTION value="26">26</OPTION><OPTION value="27">27</OPTION><OPTION value="28">28</OPTION><OPTION value="29">29</OPTION>
<OPTION value="30">30</OPTION><OPTION value="31">31</OPTION>
</select>
</td>
<td>
	<SELECT size="2" MULTIPLE name="em[]">
<OPTION value="1">1</OPTION><OPTION value="2">2</OPTION><OPTION value="3">3</OPTION><OPTION value="4">4</OPTION>
<OPTION value="5">5</OPTION><OPTION value="6">6</OPTION><OPTION value="7">7</OPTION><OPTION value="8">8</OPTION>
<OPTION value="9">9</OPTION><OPTION value="10">10</OPTION><OPTION value="11">11</OPTION><OPTION value="12">12</OPTION>
	</select>
</td>	
<td>
	<SELECT size="2" MULTIPLE name="ey[]">
<OPTION value="2015">2015</OPTION><OPTION value="2016">2016</OPTION>
<OPTION value="2017">2017</OPTION><OPTION value="2018">2018</OPTION>
</select>
</td>	
</tr>
</table>
<small id="alert"></small>
</div>
<br/><br/>
<center style="display:block;">
<input type="submit" value="submit" name="submit" />
<input type="reset" name="reset" name="reset" />
</center>
</form>
</body>
</html>
<?php
$ch=1;
if(isset($_POST["h"])){
$car=$_POST["h"];
$prd=$_POST["sd"];
$pry=$_POST["sy"];
$lad=$_POST["ed"];
$lay=$_POST["ey"];
$prm=$_POST["sm"];
$lam=$_POST["em"];
foreach($_POST["h"] as $car)
{
$del=explode(" ",$car);
}
foreach ($_POST["sd"] as $prd) {
	$prd=explode(" ", $prd);
}
foreach ($_POST["sy"] as $pry) {
	$pry=explode(" ", $pry);
}
foreach ($_POST["ed"] as $lad) {
	$lad=explode(" ", $lad);
}
foreach ($_POST["ey"] as $lay) {
	$lay=explode(" ", $lay);
}
foreach($_POST["sm"] as $prm){
	$prm=explode(" ", $prm);
}
foreach($_POST["em"] as $lam){
	$lam=explode(" ", $lam);
}
$flag1=1;
/* a bloc to check whether the date is valid or not*/
if($_POST["sy"]>$_POST["ey"]){
	$flag1=0;
	echo "1";
}
else if($_POST["sy"]==$_POST["ey"]&&$_POST["sm"]>$_POST["em"]){
	$flag1=0;
	echo "2";
}
else if($_POST["sy"]==$_POST["ey"]&&$_POST["sm"]==$_POST["em"]&&$_POST["sd"]>$_POST["ed"]){
	$flag1=0;
	echo "3";
}

if($prm[0]<=7 || $lam[0]<=7)
{
	if(($prm[0]%2==0 && $prd[0]>30) || ($lam[0]%2==0 && $lad[0]>30))
	{
		echo("1");
		$flag1=0;
	}
	if(($prm[0]==2 && $pry[0]%4!=0 && $prd[0]>28) || ($prm[0]==2 && $pry[0]%4==0 && $prd[0]>29))
	{
		echo("2");
		$flag1=0;
	}
	if(($lam[0]==2 && $lay[0]%4!=0 && $lad[0]>28) || ($lam[0]==2 && $lay[0]%4==0 && $lad[0]>29))
	{
		echo("3");
		$flag1=0;
	}
}
if($prm[0]>7 || $lam[0]>7)
{
	if(($prm[0]%2==1 && $prd[0]>30) || ($lam[0]%2==1 && $lad[0]>30))
	{
		echo("4");
		$flag1=0;
	}
}
if($flag1==0){
	echo "<h4>INVALID DATE!</h4><br/>";
}
else
{
$fr=fopen("user.txt","r");
while(!feof($fr)){
	$t1=fgets($fr);
	$t2=explode(",", $t1);
	if(($t1=="")==true){
		break;
	}
	if($del[0]==$t2[1]){
		if($pry[0]<$t2[7]){
			$flag1=0;
		}
		 if($pry[0]==$t2[7]){
			if($prm[0]<$t2[6])
			{
				$flag1=0;
			}
			else{
				$flag1=1;
			}
			if($prm[0]==$t2[6]){
				if($prd[0]<$t2[5])
				{
					$flag1=0;
				}
				else{
					$flag1=1;
				} 
			}
		}

	}
}
fclose($fr);
// the selection of cars time slot
if($flag1==0){
	echo "<h4>THE SELECTED CAR IS NOT AVAILABLE AT THE TIME SLOT YOU HAD DESIRED</h4><br/>";
}
// input from the admin page
if(isset($_SESSION["admin"])){
	if($flag1==1){
	$nam=$_SESSION["admin"];
	$uid=$_SESSION["userid"];
			$filenameu="user.txt";
			$file1=fopen($filenameu,"a+");
			fwrite($file1,$uid.",");
			fwrite($file1,$del[0].",");				
			fwrite($file1,$prd[0].",");
			fwrite($file1,$prm[0].",");
			fwrite($file1,$pry[0].",");
			fwrite($file1,$lad[0].",");
			fwrite($file1,$lam[0].",");
			fwrite($file1,$lay[0].".\r\n");
			$carent=fopen("carsentry.txt","r");
			$csize=filesize("carsentry.txt");
			$cdata=fread($carent,$csize);
			$cent=explode(".",$cdata);
			for($val=0;$val<count($cent)-1;$val++)
			{
				$cfie=explode(" ",$cent[$val]);
				if($cfie[0]==$car)
				{
					$rate=$cfie[2];
				}
			}
			//echo $rate."<br/>";
			if($prm[0]==$lam[0])
			{
				$amt=$rate;
			}
			else if($prd[0]>=$lad[0])
			{
				//echo("true".$prd[0].",".$lad[0]);
				$amt=(12*($lay[0]-$pry[0])+$lam[0]-$prm[0])*$rate;
			}
			else if($prd[0]<$lad[0])
			{
				//echo("false".$prd[0].",".$lad[0]);
				$amt=(12*($lay[0]-$pry[0])+$lam[0]-$prm[0]+1)*$rate;
			}
			echo "<h3>YOUR BOOKING IS SUCCESFUL FOR THE CAR</h3>";
			echo "<br/><h3>Your fare is Rs.".$amt."</h3>";
fclose($file1);
}
}
}
}
?>