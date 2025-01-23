<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    
    color: #fff;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}

form{
    height: 500px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
    color: rgb(255 173 62);
}
form h5{
    top: 10px;
    position: relative;
}
form h5 a{
    text-decoration: none;
}
label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
    color: rgb(255 173 62);
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: gray;
}
#su{
    margin-top: 50px;
    width: 100%;
    background-color: rgb(255 173 62);
    color: #fff;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    transition-duration: 0.4s;
    cursor: pointer;
}
.back-video{
    position:absolute ;
    right: 0;
    top: 0;
    z-index: -1;
    }
    @media(min-aspect-ratio: 16/9){
        .back-video{
            object-fit:cover;
            width: 100%;
            height: 100%;
        }
        }
        @media (max-aspect-ratio: 16/9){
        .back-video{
            object-fit:cover;
            width: auto;
            height: 100%;
        }
        }

    </style>
</head>
<body>
    <video src="mixkit-athletic-couple-in-functional-training-40241.mp4"autoplay muted loop class="back-video"></video>
    <form method="post" >
        <h3>Login Here</h3>
        <label for="username">Email</label>
        <input type="text" placeholder="Enter Your Email" name="username" id="username" required>
        <label for="password">Password</label>
        <input type="password" placeholder="Enter Your Password" name="password" id="password" required>
        <input type="submit" value="Log In" name="login" id="su" >
        
    </form>
</body>
</html>
<?php 
include("database.php");
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  }
  else{
    if(isset($_POST['login'])){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = test_input($_POST["username"]);
            $password = test_input($_POST["password"]);
            $sql = ("SELECT * FROM admininfo");
            if($sql){
                $users = $con -> query($sql);
                // Fetch all
                $users -> fetch_all();
                foreach($users as $user) {
                    if($username!==$user['EmailID'])
                        {
                             echo'Wrong Username </form>';
                            }
                    elseif(($password!==$user['Password'])) {
                            echo'Wrong Password </form>';

                        }
                        else{
                            $_SESSION['username']=$user['Username'];
                            header("Location: admin.php"); 
                        }
                        break;
                    }
            }
            
           
        }   
    }
  }

mysqli_close($con);
?>