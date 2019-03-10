<?php
session_start();
$user= $_SESSION['user'];
echo "<center>Welcome</center>",' ',"<center> $user</center>";
$con=mysqli_connect('localhost','root','','login');


?>
<html>
<head><title>Select Type</title></head>
<body>
<ul>
<?php
$query= "SELECT `open`, `booked`, `hand`, `faculty` FROM `type`";
$result=mysqli_query($con,$query);
$resultcheck=mysqli_num_rows($result);
echo "<center>Available slots: </center>";
if($resultcheck>0){
	while($row=mysqli_fetch_assoc($result)){
		echo "<a href='select.php'><center>Open: ",$row['open']. "<br></center>";
		echo "<a href='select.php'><center>Booked: ",$row['booked']. "<br></center>";
		echo "<a href='select.php'><center>Handicap: ",$row['hand']. "<br></center>";
		echo "<a href='select.php'><center>Faculty: ",$row['faculty']. "<br></center>";
	}
}
?>
</body>

</html>
