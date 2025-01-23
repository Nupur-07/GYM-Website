<html>
<head>
    <title>Annual Packages</title>
   
    <style>
        body{
           
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            font-size: 25px;
            margin: 0px;
            }
            nav{
    background-color: #00000073;
    color: white;
    position:fixed;
    width: 100%;
    height: 70px;
    top: 0px;
}

        .c4{
             text-align: center;
             position: relative;
             top: 90px;
            }
        h1{
            -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: rgb(255 173 62);
    color: transparent;
    font-family: Arial, Helvetica, sans-serif;       
 }
        #box1{
            background-color: rgb(111 111 111 / 30%);
    display: inline-block;
    width: 450px;
    height: 400px;
    border-radius: 25px;
    text-align: center;
    position: relative;
    margin: 5px;
    top: 100px;
    left: 50px;
    font-size: 20px;
            }
            #box1:hover{
                box-shadow: 0 0 40px rgb(255 173 62);

            }
        #rs{
            font-size: 55px;
            -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: rgb(255, 255, 255);
    color: transparent;
    font-family: Arial, Helvetica, sans-serif;
        }
        #box1 li{
            list-style: none;
        }
        #b4{
            position: relative;
            top: 85px;
                        background-color: rgb(255 173 62);
            text-decoration: none;
            border-radius: 50px;
            color: white;
            padding-block: 10px;
            padding-inline: 70px;
            margin: 25px;
            font-size: 25px;
        }
        #b4:hover{
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

    </style>
</head>
<body>
    <video src="mixkit-portrait-of-young-athletes-in-the-gym-40247 (2).mp4" autoplay muted loop></video>
    <header>
    <?php 
        include("nav.php");
        ?>
    </header>
    <div class="ap">
        <a name="ap"></a>
        <div class="c4">
            <h1>ANNUAL MEMBERSHIPS</h1>
            <p>Choose one of the annual plans that suits you goals the most</p>
        </div>
       
         <div id="box1">
             <ul>
                 <li><h3>Beginner Training</h3></li>
                 <li id="rs">Rs 15,000</li>
                 <li>Per year</li>
                 <li>1hr Per Day</li>
                 <li>365 classes</li>
                 <li>Single Activity Included</li>
                 <li>Workout Plan</li>
                 <li><a href="apexflex.php#web5" id="b4">Become a member</a></li>
             </ul>

         </div>
         <div id="box1">
            <ul>
            <li><h3>Intermediate Training</h3></li>
                 <li id="rs">Rs 17,000</li>
                 <li>Per year</li>
                 <li>1hr 30mins Per Day</li>
                 <li>365 classes</li>
                 <li>Two Activities Included</li>
                 <li>Workout Plan</li>
                 <li><a href="apexflex.php#web5" id="b4">Become a member</a></li>
            </ul>

         </div>
         <div id="box1">
            <ul>
            <li><h3>Pro Training</h3></li>
                 <li id="rs">Rs 20,000</li>
                 <li>Per year</li>
                 <li>2hr Per Day</li>
                 <li>365 classes</li>
                 <li>Multiple Activities Included</li>
                 <li>Workout Plan</li>
                
                 <li><a href="apexflex.php#web5" id="b4">Become a member</a></li>
            </ul>

    </div>
</body>
</html>