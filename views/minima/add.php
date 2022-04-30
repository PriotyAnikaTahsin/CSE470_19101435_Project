
<?php
	include('conn.php');
 $id=$_POST['id'];
	$name=$_POST['name'];
    $height=$_POST['height'];
	$crime=$_POST['crime'];
 
	mysqli_query($conn,"insert into `criminaltable` (id,name,height,crime) values ('$id','$name', '$height', '$crime')");
	header('location:CriminalsList');
 
?>