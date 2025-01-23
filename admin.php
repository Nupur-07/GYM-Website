<?php
   session_start();
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
               body{
               background-color:  rgb(35, 35, 35);
    margin: 0%;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
    color: white;
    
}
.web1{
    background-image: url(bg.jpg);
    background-size: cover;
    height: 740px;
    color: white;
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
.tablewrap{
    position: relative;
    top: 125px;
    max-height: 375px;
    overflow-y: scroll;
}

table {
            margin: 0 auto;
            font-size: large;
            color: white;
            position: relative;
            background-color: #8a8a8a17;
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            overflow:hidden;
            height: 200px;
            min-width: max-content;
            
        }
        
        td {
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            
            background-color: #00000073;
            
        }
        th{
            color: white;
            position: sticky;
            background-color: rgb(255 173 62);
            font-weight: bold;
            padding: 10px;
            text-align: center;
        }
        
        td {
            background-color: #8a8a8a17;
            font-weight: bold;
            padding: 10px;
            text-align: center;
           
        }
 
        
        .v1{
    position:absolute ;
    right: 0;
    top: 0;
    z-index: -1;
    }
    @media(min-aspect-ratio: 16/9){
        .v1{
            object-fit:cover;
            width: 100%;
            height: 100%;
        }
        }
        @media (max-aspect-ratio: 16/9){
        .v1{
            object-fit:cover;
            width: auto;
            height: 100%;
        }
        }
        #wel{
            position: relative;
            top: 50px;
            color: rgb(255 173 62);
        }
        .tb{
            position: relative;
            height: 200px;
            width: 1200px;
        }
    </style>
</head>
<body>
    <header>
    <nav>
           <a href="apexflex.php#web1"  >
                <img src="f718fd1dc9fa4867927556147970c72d__1_-removebg-preview.png" alt="logo" id="logo"></a>
           </nav>
           
           <nav id="signup">
            <a href="logout.php" id="su">Logout</a><img src="th-removebg-preview.png" alt="user" id="img">
           </nav>
    </header>
    <div class="web">
   <h1 id="wel">Welcome 
    <?php
   echo"{$_SESSION['username']}";
   ?> </h1>
   
   <div class="tablewrap">
   <table class="table ">
       <thead><tr>
         <th> NAME</th>
         <th>EMAILID</th>
         <th>PHONE NUMBER</th>
         <th>SEX</th>
         <th>PACKAGE</th>
         <th>ACTIVITY</th>
         <th>DURATION</th>
         <th>JOINING DATE</th>
         <th>EXP DATE</th>
         <th>PRICE</th>
    </thead>
    <tbody>
        <?php   
        
        $sql = ("SELECT * FROM data");
         $users = $con -> query($sql);
     // Fetch all
     $users -> fetch_all();
     foreach($users as $user){
     ?>
     <tr>
        <td><?php echo"{$user['Name']}";?></td>
        <td><?php echo"{$user['Email_ID']}";?></td>
        <td><?php echo"{$user['Phone']}";?></td>
        <td><?php echo"{$user['Sex']}";?></td>
        <td><?php echo"{$user['Package']}";?></td>
        <td><?php echo"{$user['Activity']}";?></td>
        <td><?php echo"{$user['Duration']}";?></td>
        <td><?php echo"{$user['Date']}";?></td>
        <td><?php echo"{$user['Expdate']}";?></td>
        <td><?php echo"{$user['Price']}"?></td>

    <?php
     }
     ?>
     </tr>
    </tbody>
    </table>

   </div>
    
    </div>
</body>
</html>
<?php
mysqli_close($con);
?>