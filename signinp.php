<?php

$con=mysqli_connect('localhost','root','','login');
$user=$_POST['user'];
$pass=$_POST['pass'];
$count=0;
	$query="SELECT `user`, `pass` FROM `login`";
	$run=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($run)){
		if($row['user']==$user && $row['pass']==$pass)
	{
		echo "logged In";
		$count=1;
		break;
	}
	
	}if($count==0){
		echo "Username or password incorrect.";
	
	}
	



?>