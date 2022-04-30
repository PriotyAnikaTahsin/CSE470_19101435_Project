<?php
	include('conn.php');
 $id=$_POST['id'];
 $url_address=$_POST['url_address'];
	$username=$_POST['username'];
    $password=$_POST['password'];
	$email=$_POST['email'];
	$date=$_POST['date'];
 
	mysqli_query($conn,"insert into `adminusers` (id,username,password,email,date) values ('$id',
		'$username' , '$password', '$email','$date')");
	header('location:AdminUp');
 
?>