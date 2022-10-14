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
if($_SESSION['email']==''){
	header("location:login.php");
}
else{
$email= $_SESSION['email'];
}

	$st="select name from users where email='$email'";
	  		$result = mysqli_query($conn,$st);
			$datas = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regform.css">
    <title>Registration Form</title>
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/x-icon">
</head>

<body>
    <main>
        <div class="container">
            <div class="text">
            </div>
            <div class="form">
                    <h1>Welcome</h1> <h1><?php echo $email;   ?></h1>
					<p> Your login is successful</p>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>