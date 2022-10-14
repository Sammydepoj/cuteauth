<?php

$servername="127.0.0.1";
$user="root";
$password="";
$databasedb="cuteauth";

$conn= mysqli_connect($servername,$user,$password,$databasedb);

if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
   session_start(); 
	
	$email = $_POST['email'];
	$password = $_POST['password'];
      
	   
    if(isset($_POST['sub'])){
		
		$st="select * from users where email='$email' and password='$password'";
	  		$result = mysqli_query($conn,$st);
			$datas = mysqli_num_rows($result);
	if ($datas >0){
			$_SESSION['email']=$email;
		header("location:success.php");
		}

		else{
		echo"<script> alert('Error login check email or password');</script>";
	}

}
	  
?>