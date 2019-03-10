<?php
$name= $_POST['user'];
$pass=$_POST['pass'];
$con=mysqli_connect('localhost','root','','login');
$query= "INSERT INTO `login`(`user`, `pass`) VALUES ('$name','$pass')";
$run=mysqli_query($con,$query);
if($run)
{
	echo "<center>Registered</center><br>";
	echo "<center><a href='signin.php'>Login</center>";
}
else
{
	if ( false===$run ) {
  printf("error: %s\n", mysqli_error($con));
}
}
?>