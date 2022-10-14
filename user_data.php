<?php

$servername="127.0.0.1";
$user="root";
$password="";
$databasedb="cuteauth";

$conn= mysqli_connect($servername,$user,$password,$databasedb);

if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $doby=$_POST['doby'];
    $dobm=$_POST['dobm'];
    $dobd=$_POST['dobd'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];


       
	   $st="select * from users where email='$email'";
	   $checkrow=$conn->query($st);

 if($checkrow->num_rows>0)
{
     while($row = $checkrow->fetch_assoc()){
         echo"<script> alert('Email already used pls use another email');
		 </script>";
    
	}
	echo "<script>window.location.href = ('index.php'); </script>";
 }
 else{
	    
    if(isset($_POST['sub'])){
            $sql="insert into users (name,email,dob,gender,country,password,confirmpassword) 
        values ('$name','$email','$doby$dobm$dobd','$gender','$country','$password','$cpassword')";

         if($conn->query($sql)=== TRUE){
		echo"<script> alert('Registered successfully');</script>";
		echo "<script>window.location.href = ('index.php'); </script>";
	}
	else{
		echo"<script> alert('Registration not successful');</script>";
	}
	$conn->close();
        
}
	 
 }
	  

        // if($conn ->query($query) === TRUE){
        //     echo"<script> alert('Registered successfully');
        //     // window.location='index.php'
        //     </script>";
        // }
        // else{
        //     echo"<script> alert('Registration not succesful');
        //     // window.location='index.php'
        //     </script>" . $conn->error;
        // }
        // $conn->close();
    
    
// if (isset($_POST['submit'])){

//      $data=array($name,$email,$date,$gender,$country."</br>");

//     // var_dump ($data);

//     $file = fopen('userdata.csv','a');

//     if($file){
//         echo "file opened"."<br>" ."and"."<br>";
//         fputcsv($file,$data);
//         fclose($file);
//         echo "file written";

//         // $path = "userdata.csv";
//         // $getfile = file_get_contents($path);
//         // $removedNewLine = explode(PHP_EOL,$getfile);
//         // foreach ($removedNewLine as $key => $string){
//         //     $ecpEach = explode (':', $string);
//         //     $finalArray[$ecpEach[0]] =$ecpEach[1];
//         // }

//         // print_r($finalArray);
//         // exit();

//         // cuteauth password on 000webhost
//         // eGj8$ZqaTTo67Nl8e*op

//         // cuteauth username on infinity free
//         // epiz_32775086


//         $user_list= file_get_contents("userdata.csv");
//             echo "<h2> You Entered : </h2>";
//         print_r ($user_list);
            
//     }
//     else{
//         echo "No data";
//     }
//     echo "<button><a href='index.php'>Click to go back</a></button> </br>";
// // header('location:index.php');
// }
?>