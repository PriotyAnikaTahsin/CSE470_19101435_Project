<?php
	include('conn.php');
	
 $id=$_POST['id'];
	$name=$_POST['name'];
    $height=$_POST['height'];
	$designation=$_POST['designation'];
	$phone_number=$_POST['phone_number'];
 
	mysqli_query($conn,"update `criminaltable` set id='$id', name='$name', height='$height' , designation='$designation',phone_number='$phone_number' where id='$id'");
	header('location:CriminalsList');
?>