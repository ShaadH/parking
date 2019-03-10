<?php
session_start();
$con=mysqli_connect('localhost','root','','login');

?>
<html>
<head>
<style>
a:link{
	text-decoration:none;
}
</style>
<title>Select slot</title></head>
<body>
<center><h1>Select your parking slot:</h1></center>
<form method='POST' action=''>
<table align='center' border='1' style="width: 80%;">
<tr>
<td align='center'>O:Slot1<input type='radio' name='slot' value='O:Slot1'><?php $q1="select `slot1` from `open`";
$run1=mysqli_query($con,$q1);
$row=mysqli_fetch_assoc($run1);
if($row['slot1']==0){
	echo"<br>Unavailable";}
else{
	echo "<br>Available";
}	?>
</td>
	<td align='center'>O:Slot2<input type='radio' name='slot' value='O:Slot2'><?php $q1="select `slot2` from `open`";
$run1=mysqli_query($con,$q1);
$row=mysqli_fetch_assoc($run1);
if($row['slot2']==0){
	echo"<br>Unavailable";}
else{
	echo "<br>Available";
}	?>
	<td align='center'>O:Slot3<input type='radio' name='slot' value='O:Slot3'><?php $q1="select `slot3` from `open`";
$run1=mysqli_query($con,$q1);
$row=mysqli_fetch_assoc($run1);
if($row['slot3']==0){
	echo"<br>Unavailable";}
else{
	echo "<br>Available";
}	?>
	<td align='center'>O:Slot4<input type='radio' name='slot' value='O:Slot4'><?php $q1="select `slot4` from `open`";
$run1=mysqli_query($con,$q1);
$row=mysqli_fetch_assoc($run1);
if($row['slot4']==0){
	echo"<br>Unavailable";}
else{
	echo "<br>Available";
}	?>
	<td align='center'>O:Slot5<input type='radio' name='slot' value='O:Slot5'><?php $q1="select `slot5` from `open`";
$run1=mysqli_query($con,$q1);
$row=mysqli_fetch_assoc($run1);
if($row['slot5']==0){
	echo"<br>Unavailable";}
else{
	echo "<br>Available";
}	?>
	<td align='center'>O:Slot6<input type='radio' name='slot' value='O:Slot6'><?php $q1="select `slot6` from `open`";
$run1=mysqli_query($con,$q1);
$row=mysqli_fetch_assoc($run1);
if($row['slot6']==0){
	echo"<br>Unavailable";}
else{
	echo "<br>Available";
}	?>
	<td align='center'>O:Slot7<input type='radio' name='slot' value='O:Slot7'><?php $q1="select `slot7` from `open`";
$run1=mysqli_query($con,$q1);
$row=mysqli_fetch_assoc($run1);
if($row['slot7']==0){
	echo"<br>Unavailable";}
else{
	echo "<br>Available";
}	?>
	<td align='center'>O:Slot8<input type='radio' name='slot' value='O:Slot8'><?php $q1="select `slot8` from `open`";
$run1=mysqli_query($con,$q1);
$row=mysqli_fetch_assoc($run1);
if($row['slot8']==0){
	echo"<br>Unavailable";}
else{
	echo "<br>Available";
}	?>
	<td align='center'>O:Slot9<input type='radio' name='slot' value='O:Slot9'><?php $q1="select `slot9` from `open`";
$run1=mysqli_query($con,$q1);
$row=mysqli_fetch_assoc($run1);
if($row['slot9']==0){
	echo"<br>Unavailable";}
else{
	echo "<br>Available";
}	?>
	<td align='center'>O:Slot10<input type='radio' name='slot' value='O:Slot10'><?php $q1="select `slot10` from `open`";
$run1=mysqli_query($con,$q1);
$row=mysqli_fetch_assoc($run1);
if($row['slot10']==0){
	echo"<br>Unavailable";}
else{
	echo "<br>Available";
}	?>
</tr>
<tr>
	<td>--</td>
	<td>--</td>
	<td>--</td>
	<td>--</td><td>--</td>
	<td>--</td><td>--</td>
	<td>--</td><td>--</td>
	<td>--</td>
</tr>	
<tr>
	<td>H:Slot1</td>
	<td>H:Slot2</td>
	<td>H:Slot1</td>
	<td>H:Slot2</td>
	<td>H:Slot1</td>
	<td>H:Slot2</td>
	<td>H:Slot1</td>
	<td>H:Slot2</td>
	<td>H:Slot1</td>
	<td>H:Slot2</td>
</tr>
<tr>
	<td>--</td>
	<td>--</td>
	<td>--</td>
	<td>--</td><td>--</td>
	<td>--</td><td>--</td>
	<td>--</td><td>--</td>
	<td>--</td>
</tr>	
<tr>
	<td>F:Slot1</td>
	<td>F:Slot2</td>
	<td>F:Slot3</td>
	<td>F:Slot4</td>
	<td>F:Slot5</td>
	<td>F:Slot6</td>
	<td>F:Slot7</td>
	<td>F:Slot8</td>
	<td>F:Slot9</td>
	<td>F:Slot10</td>
</tr>

</table>
<center><input type='submit' name='book' value='Book'></center>
</form>
<?php


if(isset($_POST['book'])){
	if(isset($_POST['slot'])){
		$_SESSION['slot']=$_POST['slot'];
		header('location:book.php');
	}
	
}
?>
</body>
</html>