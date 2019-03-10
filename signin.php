

<html>
<head>
<title>Sign In</title>
</head>
<body>
<form method='post' action=''>
<table align='center'>
<tr><td>Username</td><td><input type="text" name="user"></td></tr>
<tr><td>Password</td><td><input type="password" name="pass"></td></tr>
<tr><td colspan='2' align='center'><input type='submit' name='signin' value='Login'></td></tr>
</table>
</form>
<?php
session_start();
if(isset($_POST['signin'])){
$con=mysqli_connect('localhost','root','','login');
$user=$_POST['user'];
$pass=$_POST['pass'];
$count=0;
	$query="SELECT `user`, `pass` FROM `login`";
	$run=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($run)){
		if($row['user']==$user && $row['pass']==$pass)
	{
		$_SESSION['user']=$user;
		header('location:home.php');
		$count=1;
		break;
	}
	
	}if($count==0){
		echo "<center>Username or password incorrect</center>";
	
	}
	

}

?>
</body>
</html>