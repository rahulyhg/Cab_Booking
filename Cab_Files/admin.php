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
 	ul.nm {
		width: 1000 px;
		margin: 0px auto;
	}
	ul.nm li {
		width: 125px;
		text-align: center;
		position: relative;
		margin-right: 150px;
		}
	ul.nm a{
		text-decoration: none;
		display: block;
		width: 250px;
		height: 35px;
		line-height: 25px;
		background-color: #FFF;
		border: 1px solid orange;
		border-radius: 5px;
		}
		ul.nm li a:hover {
		background-color: #CFC;
		}
		
		p.e a{
			text-decoration:none;
			display: block;
			border: 1px solid orange;
			border-radius: 5px;
			background-color: #FFF;
		}
		p.e{
			line-height: 25px;
			margin:0px auto; 
			width: 125px;
			height: 35px;
			text-align: center;
			margin-right: 150px;
			position:absolute;
			top: 50px;
			right:45px;
		}
		body{
			background-image:url("shadow.jpg"); 
		}
 	</style>
 <title><?php echo $usname ;?> - user page</title> 
 </head> 
 
 <body> 
 <?php 
 echo "<h3><span style=color:red;>".$result." "."Mr.Admin</span></h3>";
 ?>
 <br/>
 <br/>
 <p class="e"><a href="logoutp.php" class="l">LOG OUT</a></p>
 <ul class="nm">
 	<li ><a href="adminuse.php">ADD NEW USER</a></li><br/>
	<li ><a href="admincar.php">ADD NEW CAR</a></li><br/>
	<li><a href="reportcar.php">RECORDS OF CARS</a></li><br/>
	<li><a href="reportuser.php">RECORDS OF USERS</a></li>
</ul>
<br/><br/><br/>
  </body> 
 </html> 

 