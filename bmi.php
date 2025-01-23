<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            body{
        background-color:  rgb(35, 35, 35);
        color: white;
    margin: 0%;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
}

nav{
    background-color: #00000073;
    color: white;
    position:fixed;
    width: 100%;
    height: 70px;
    top: 0px;
}
#logo {
        width: 120px;
    position: fixed;
    top: -25px;
    left: 10px;
}
#menu{
    position: fixed;
    left: 650px;
    font-size: 20px;
    background-color: transparent;
}
#menu a{
    text-decoration: none;
    color: white;
    position: relative;
    top: 25px;
    padding: 10px;
}
#menu a:hover{
color: coral;
border-bottom: 1px solid coral;
}
#signup{
    position: fixed;
    left: 1300px;
    width: 150px;
    height: 50px;
    top: 15px;
    background-color: transparent;
}
#su{
    background-color: rgb(255 173 62);
    padding-inline: 10px;
    padding-left: 45px;
    border: none;
    text-decoration: none;
    color: white;
    position: fixed;
    top: 12px;
    font-size: 20px;
    padding-block: 10px;
    transition-duration: 0.4s;
    cursor: pointer;
}
#img{
    position: fixed;
    width: 35px;
    height: 35px;
    left: 1306px;
    top: 15px;
}
#su:hover,#su a:hover{
background-color:coral ;

}
#submit{
    border: none;
    padding-inline: 40px;
    font-size: 25px;
    padding-block: 10px;
    border-radius: 25px;
    background-color: rgb(255 173 62);
    color: white;
    transition-duration: 0.4s;
    cursor: pointer;
    position: relative;
    left: 25px;

}
#submit:hover{
    background-color: coral;
}
               video{
    position:absolute ;
    right: 0;
    top: 0;
    z-index: -1;
    }
    @media(min-aspect-ratio: 16/9){
        video{
            object-fit:cover;
            width: 100%;
            height: 100%;
        }
        }
        @media (max-aspect-ratio: 16/9){
        video{
            object-fit:cover;
            width: auto;
            height: 100%;
        }
        }
       .container{
        position: relative;
        top: 200px;
       } 
       .container h1{
        -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color:rgb(255 173 62);
    color: transparent;
    font-family: Arial, Helvetica, sans-serif;
       }
       #cip{
        position: relative;
    left: 15px;
    background-color: #ffffff17;
    color: white;
    border: none;
    font-size: 25px;
    padding-block: 10px;
}
#cip::placeholder{
           color: white;

       }
       #cil{
        position: relative;
        left: 20px;    top: 0px;
    font-size: 25px;
       }
    </style>

</head>
<body>
    <video src="mixkit-portrait-of-young-athletes-in-the-gym-40247 (2).mp4"autoplay muted loop></video>
    <header>
    <nav>
           <a href="user.php"  >
                <img src="f718fd1dc9fa4867927556147970c72d__1_-removebg-preview.png" alt="logo" id="logo"></a>
           </nav>
           <nav id="menu">
               <a href="bmi.php">BMI calculator</a>
               <a href="userinfo.php">Personal info</a>
               <a href="workoutplan.php">Workout Plan</a>
               <a href="repack.php">Renew packages</a>           
            </nav>
           <nav id="signup">
            <a href="logout.php" id="su">Logout</a><img src="th-removebg-preview.png" alt="user" id="img">
           </nav>
    </header>
    <div class="container">
        <h1>CALCULATE YOUR BMI HERE</h1>
        <p>The Body Mass Index(BMI) calculator calculates body mass index from your weight and height.</p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
       <label for="height" id="cil">Height (cm):</label>  
       <input type="number" name="height" step="0.1" id="cip">
       <label for="height" id="cil"> Weight (kg):</label> 
        <input type="number" name="weight" step="0.1"id="cip" required>
        <input type="submit" name="submit" id="submit" value="Calculate">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $height = $_POST["height"];
            $weight = $_POST["weight"];

            $bmi = $weight / (($height/100) * ($height/100));
            $bmi = round($bmi, 1);

            echo "<h2>Your BMI is: $bmi</h2>";

            if ($bmi < 18.5) {
                echo "You are underweight.<br>";
                echo "Strength Training is Suggested ";
            } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
                echo "You are in the healthy weight range.";
                echo "Strength Training,Cardio Training are Suggested ";
            } elseif ($bmi >= 25 && $bmi <= 29.9) {
                echo "You are overweight.";
                echo "Strength Training,Cardio Training,Fat Burning are Suggested ";
            } else {
                echo "You are obese.";
                echo "Strength Training,Cardio Training,Fat Burning are Suggested ";
            }
            
        }
    ?>
    </div>
</body>
</html>