
<?php
	include('conn.php');
 $id=$_POST['id'];
	$name=$_POST['name'];
    $height=$_POST['height'];
	$designation=$_POST['designation'];
	$phone_number=$_POST['phone_number'];
 
	mysqli_query($conn,"insert into `policetable` (id,name,height,designation,phone_number) values ('$id','$name', '$height', '$designation','$phone_number')");
	header('location:PoliceList');
 
?>