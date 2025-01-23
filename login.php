<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    margin: 0%;
    font-family: 'Poppins',sans-serif;
    font-size: 25px;
    color:white;

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
        h2{
            text-align: center;
            color: rgb(255 173 62);
            position: relative;
            top: 280px;
        }
        #b{
            position: relative;
    left: 490px;
    top: 300px;
    background-color: rgb(255 173 62);
    text-decoration: none;
    border-radius: 50px;
    color: white;
    padding-block: 20px;
    padding-inline: 75px;
    margin: 30px;
    font-size: 25px;
}

#b:hover{
    background-color: coral;
    transition-duration: 0.4s;
    cursor: pointer;
   
}
    </style>
</head>
<body>
<video src="mixkit-athletic-couple-in-functional-training-40241.mp4"autoplay muted loop class="back-video"></video>
<header>
    <?php 
        include("nav.php");
        ?>
    </header>
<div class="web">
    <h2>LOGIN AS</h2>
                <a href="adminlogin.php" id="b">ADMIN</a>
                <a href="userlogin.php"id="b">USER</a>
</div>
</body>
</html>