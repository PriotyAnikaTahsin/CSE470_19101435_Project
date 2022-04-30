<?php
	include('conn.php');
	
 $id=$_POST['id'];
	$name=$_POST['name'];
    $height=$_POST['height'];
	$crime=$_POST['crime'];
 
 
	mysqli_query($conn,"update `criminaltable` set id='$id', name='$name', height='$height' , crime='$crime' where id='$id'");
	header('location:CriminalsList');
?>