<?php
session_start();
session_destroy();
if(isset($_SESSION["admin"])){  
    $msg = "You are now logged out"; 
} 
else{ 
 	$msg = "<h2>Could not log you out</h2>"; 
}
?>
<html> 
<head>
	<style>
	body{
		background-image: url("banner4.png");
	}
	h3{
		color: #380000 ;
	}
	</style>
</head>
<body>

<?php echo $msg;?><br> 
<h3><a href="logadmin.php">Click here</a> to return to our login portal page </h3> 
</body> 
</html> 