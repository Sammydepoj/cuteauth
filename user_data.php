<?php

$name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

if (isset($_POST['submit'])){

     $data=array($name,$email,$date,$gender,$country);

    // var_dump ($data);

    $file = fopen('userdata.csv','a');

    if($file){
        echo "file opened"."<br>" ."and"."<br>";
        fputcsv($file,$data);
        fclose($file);
        echo "file written";
        echo file_get_contents("userdata.csv");

    }
    else{
        echo "No data";
    }
// header('location:index.html');
}
?>