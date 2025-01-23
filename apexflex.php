<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="apexflex.css">
    <title>Document</title>
    <script>
        function calculateEndDate() {
            var joinDate = document.getElementById("join_date").value;
            var durationValue = document.getElementById("duration_value").value;
            var durationType = document.getElementById("duration_type").value;

            var endDate = new Date(joinDate);

            if (durationType === "month") {
                endDate.setMonth(endDate.getMonth() + parseInt(durationValue));
            } else if (durationType === "year") {
                endDate.setFullYear(endDate.getFullYear() + parseInt(durationValue));
            }

            var endDateString = endDate.toISOString().split("T")[0];
            document.getElementById("end_date").value = endDateString;
        }
    </script>
</head>
<body>
<header>
    <a name="web1"></a>
    <div class="web1">
        <video src="mixkit-woman-and-man-doing-dumbbell-reps-together-44413.mp4" autoplay muted loop class="v1"></video>
        
        <div class="para">
            <h1>WELCOME TO APEXFLEX</h1>
            <a href="#web5" id="b1">Book Now</a>
        </div>

        
</header>
<section>
    <div class="web2">
        <a name="web2"></a>
        <div class="p1">
            <h1>ABOUT APEXFLEX</h1>
            <p>ApexFlex is a community of fitness enthusiasts, professionals, and beginners alike. Our dedicated team of certified trainers and staff are passionate about helping you unlock your full potential and transform your body and mind.</p>
            <h1>OUR MISSION</h1>
            <p>we are committed to empowering individuals to achieve their fitness goals and lead a healthier, more active lifestyle. Our mission is to create a positive and motivating environment where everyone, regardless of their fitness level, feels welcome and inspired to reach new heights.</p>
        </div>
            <img src="gym1.jpg" alt="image">
    </div>
</section>
<section>
    <div class="web3">
        <a name="web3"></a>
        <video src="mixkit-muscular-woman-and-man-stretching-in-a-gym-44440.mp4" autoplay muted loop class="v1"></video>
        <div class="web3">
            <div class="c3">
               <h1>EXPLORE OUR PROGRAMS SHAPE YOU</h1>
            </div>
            <div id="act">
                <h2>STRENGTH TRAINING</h2>
                <p>In this program, you are trained to improve your strength through many exercises.</p>
              
               </div>
               <div id="act">
                   <h2>CARDIO TRAINING</h2>
                   <p>In this program, you are trained to do sequential moves in range of 20 until 30 minutes.</p>
               </div>
               <div id="act">
                   <h2>FAT BURNING</h2>
                   <p>This program is suitable for you who wants to get rid of your fat and lose their weight.</p>
               </div>
               <div id="act">
                   <h2>HEALTH FITNESS</h2>
                   <p>This programs is designed for those who exercises only for their body fitness not body building.</p>
               </div>
        </div>
    </section>
    </div>
    </div>
</section>
<section>
    <div class="web4">
        <a name="web4"></a>
        <div id="tbox">
           <div id="c">
               <h1>FITNESS PACKAGES</h1>
               <p>We have prepared monthly and annual memberships of each activity to feed your individual needs.
                   Our pricing is competitive and quite affordable. Check our plans and hurry up to join us! </p>
                   <a href="monthlypackage.php" id="b3">MONTHLY MEMBERSHIPS ></a>
                   <a href="annualpackage.php"id="b3">ANNUAL MEMBERSHIPS ></a>
           </div>
        </div>
    </div>
</section>
<section>
    <div class="web5">
            <a name="web5">
            <video src="mixkit-woman-and-man-doing-squats-together-in-a-gym-44438.mp4" autoplay muted loop class="v2"></video>
            <h1>We Are here To Help You! To Shape Your Body.</h1>
            <form method="post" action="connection.php">
                <h3>Leave Your Information Here</h3>
                <input type="text" placeholder="Name *" name="name" class="ip">
                <input type="text" placeholder="EmailID *" name="email" class="ip">
                <input type="text" placeholder="Phone Number *" name="phoneno" class="ip">
                <select name="sex" id="gender">
                    <option value="Male"disabled selected hidden>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <select name="package" id="sel">
                    <option value=""disabled selected hidden>Membership</option>
                    <option value="Beginner Membership">Beginner</option>
                    <option value="Intermediate Membership">Intermediate</option>
                    <option value="Pro Membership">Pro</option>
                </select>
                <select name="activity" id="sel" >
                    <option value=""disabled selected hidden>Activity</option>
                    <option value="Strength Training">Strength Training</option>
                    <option value="Cardio Training">Cardio Training</option>
                    <option value="Fat Burning">Fat Burning</option>
                    <option value="Health Fitness">Health Fitness</option>
                </select>
                <input type="number" placeholder="Duration" name="d1" id="duration_value" onchange="calculateEndDate()">
                <select id="duration_type" name="d2" onchange="calculateEndDate()">
        <option value="month">Months</option>
        <option value="year">Years</option>
    </select>
                <input type="date" placeholder="Joining Date" name="date" id="join_date" onchange="calculateEndDate()">
                <input type="text" id="end_date" placeholder="End Date" name="expdate" readonly>
                <input type="submit" value="Submit" id="submit">
            </form>
        </div>
</section>
    <footer>
        <?php 
        include("nav.php");
        ?> 
        <button id="b6"><a href="#web1">^</a></button>
    </footer>
  
</body>
</html>
