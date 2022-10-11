<?php

$name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

if (isset($_POST['submit'])){

     $data=array($name,$email,$date,$gender,$country."</br>");

    // var_dump ($data);

    $file = fopen('userdata.csv','a');

    if($file){
        echo "file opened"."<br>" ."and"."<br>";
        fputcsv($file,$data);
        fclose($file);
        echo "file written";

        // $path = "userdata.csv";
        // $getfile = file_get_contents($path);
        // $removedNewLine = explode(PHP_EOL,$getfile);
        // foreach ($removedNewLine as $key => $string){
        //     $ecpEach = explode (':', $string);
        //     $finalArray[$ecpEach[0]] =$ecpEach[1];
        // }

        // print_r($finalArray);
        // exit();

        $user_list= file_get_contents("userdata.csv");
            echo "<h2> You Entered : </h2>";
        print_r ($user_list);
            
    }
    else{
        echo "No data";
    }
    echo "<button><a href='index.php'>Click to go back</a></button> </br>";
// header('location:index.php');
}
?>