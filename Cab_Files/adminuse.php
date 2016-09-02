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
?>
<html>
<head>
<style>
p{
	text-indent:450px;
}
body{
	background-color:#FF7260;
}
h4{
	text-indent:240px;
}

</style>
</head>
<body >
<br/><br/><br/>
<h3><p>NEW USER ACCOUNT</p></h3>
<form action="<?php $_PHP_SELF ?>" method="POST">
<table width="50%" height="50" align="center">
<tr>
<td>ADMIN:</td><td><input type="text" name="admina" value="" required></td>
</tr>
<tr>
<td>PASSWORD:</td><td><input type="password" name="pswda" value="" required></td>
</tr>
</table>
<br/>
<center> 
	<input type="submit" name="submit" value="confirmtoclick" />
	<input type="reset" name="reset" value="reset" />
</center>
</form>
<p><form action="admin.php" align="center"><input type="submit" value="Adminpage"></form></p>
<h4 >WELCOME TO THE COMMUNITY OF VATIA CABS , HAVE A HAPPY AND A SAFE JOURNEY</h4>
</body>
</html>

<?php
$flag=0;
$doo=0;
if(isset($_POST["pswda"])){
$y=$_POST["pswda"];//a bloc to state that the password should have minimum requirements
$c="!@#$%^&*()_<>?\/";
$d=strlen($c);
$e=strlen($y);
$count=0;
for($i=0;$i<$e;$i++){
	$tk=0;
	for($j=0;$j<$d&&$tk==0;$j++){
		if($y[$i]==$c[$j]){
			$tk=1;
			$count++;
		}
	}
}
if($count<2){
	echo "The password should contain atleast two characters<br/>";
}
else if($count>=2){
	$doo=1;
}
}
if(isset($_POST["admina"])&&$doo==1){
$admina=$_POST["admina"];
$pswda=$_POST["pswda"];
if(isset($_COOKIE["user1"]))
   {
      $_COOKIE["user1"]=$_COOKIE["user1"]+1;
      $userid=$_COOKIE["user1"];
      setcookie("user1",$_COOKIE["user1"] , time() + (600000), "/");
    }
 else
   {
      setcookie("user1",9007, time() + (800000), "/");
      $userid=$_COOKIE["user1"];
   }
$filename1="userupdate.txt";
$file1=fopen($filename1,"r");
$s=filesize("userupdate.txt");
$cont=fread($file1,$s);
$textr=explode(".",$cont);
for($i=0;$i<count($textr)-1;$i++){
	$v=explode(" ",$textr[$i]);
	if($v[1]==$admina){
		$flag=1;
	}
}
if($file1==false)
{
	echo "<h1>unable to open the file due to error in program</h1>";
	exit();
}
else
{
	if($flag==1){
		echo "The user name already exists try another user name <br />";
	}
	// entry of new users in the file
	else {
	$file1=fopen($filename1,"a+");
	fwrite($file1,$userid." ".$admina." ");
	fwrite($file1,$pswda." .\r\n" );
	}
}
fclose($file1);
}
?>