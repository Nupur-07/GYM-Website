<?php
session_start();

session_unset();
session_destroy();   // function that Destroys Session 
header("Location: login.php");
echo "Logout Successfully ";
?>