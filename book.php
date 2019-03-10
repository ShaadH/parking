<?php
session_start();
$con=mysqli_connect('localhost','root','','login');
echo "<center>Booked: ",$_SESSION['slot'],"</center>";
if($_SESSION['slot']=='O:Slot1'){
	$query="UPDATE `open` SET `slot1`=0";
	$update=mysqli_query($con,$query);
	if($update){
		echo "<center>Confirmed</center>";
	}
	
}
if($_SESSION['slot']=='O:Slot2'){
	$query="UPDATE `open` SET `slot2`=0";
	$update=mysqli_query($con,$query);
	if($update){
		echo "<center>Confirmed</center>";
	}
	
}
if($_SESSION['slot']=='O:Slot3'){
	$query="UPDATE `open` SET `slot3`=0";
	$update=mysqli_query($con,$query);
	if($update){
		echo "<center>Confirmed</center>";
	}
	
}
if($_SESSION['slot']=='O:Slot4'){
	$query="UPDATE `open` SET `slot4`=0";
	$update=mysqli_query($con,$query);
	if($update){
		echo "<center>Confirmed</center>";
	}
	
}
if($_SESSION['slot']=='O:Slot5'){
	$query="UPDATE `open` SET `slot5`=0";
	$update=mysqli_query($con,$query);
	if($update){
		echo "<center>Confirmed</center>";
	}
	
}
if($_SESSION['slot']=='O:Slot6'){
	$query="UPDATE `open` SET `slot6`=0";
	$update=mysqli_query($con,$query);
	if($update){
		echo "<center>Confirmed</center>";
	}
	
}
if($_SESSION['slot']=='O:Slot7'){
	$query="UPDATE `open` SET `slot7`=0";
	$update=mysqli_query($con,$query);
	if($update){
		echo "<center>Confirmed</center>";
	}
	
}
if($_SESSION['slot']=='O:Slot8'){
	$query="UPDATE `open` SET `slot8`=0";
	$update=mysqli_query($con,$query);
	if($update){
		echo "<center>Confirmed</center>";
	}
	
}
if($_SESSION['slot']=='O:Slot9'){
	$query="UPDATE `open` SET `slot9`=0";
	$update=mysqli_query($con,$query);
	if($update){
		echo "<center>Confirmed</center>";
	}
	
}
if($_SESSION['slot']=='O:Slot10'){
	$query="UPDATE `open` SET `slot10`=0";
	$update=mysqli_query($con,$query);
	if($update){
		echo "<center>Confirmed</center>";
	}
	
}


?>
<html>
<body>
<center><a href='select.php'>Go Back</a>
</center>
</body>
</html>