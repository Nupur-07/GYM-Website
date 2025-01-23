<?php
session_start();
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $phoneno=$_REQUEST["phoneno"];
    $sex=$_REQUEST["sex"];
    $package=$_REQUEST["package"];
    $activity=$_REQUEST["activity"];
    $expdate=$_REQUEST["expdate"];
    $date=$_REQUEST["date"];
    $duration1=$_REQUEST["d1"];
    $duration2=$_REQUEST["d2"];
    $duration=$duration1." ".$duration2;
   if($duration2=="month"){
    if($package=="Beginner Membership"){
        $price=1400*$duration1;
    }
    elseif($package=="Intermediate Membership"){
        $price=1600*$duration1;
    }
    elseif($package=="Pro Membership"){
        $price=2000*$duration1;
    }
    else{
        $price=0;
    }
   }
   if($duration2=="year"){
    if($package=="Beginner Membership"){
        
        $price=15000*$duration1;
    }
    elseif($package=="Intermediate Membership"){
        $price=17000*$duration1;
    }
    elseif($package=="Pro Membership"){
        $price=20000*$duration1;
    }
    else{
        $price=0;
    }
   }
   
    if(empty($name)){
        echo"Please enter your Name";
    }
    elseif(empty($email)){
        echo"Please enter your Email";
    }
    elseif(empty($phoneno)){
        echo"Please enter your Phone Number";
    }
    
    elseif(empty($package)){
        echo"Please select your Package";
    }
    else{
            $stmt = $con->prepare("INSERT INTO data(Name, Email_Id, Phone, Sex, Package,Activity,Duration,Price, Date, Expdate) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssissssiss", $name, $email, $phoneno, $sex, $package,$activity,$duration,$price,$date,$expdate);
            $execval = $stmt->execute();
            $stmt->close();
            $_SESSION['name']=$name;
            $_SESSION['email']=$email;
            $_SESSION['phone']=$phoneno;
            $_SESSION['package']=$package;
            $_SESSION['expdate']=$expdate;
            $_SESSION['date']=$date;
            header("Location: signup.php");
        }
    }

mysqli_close($con);

?>