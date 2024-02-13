<?php
 
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include "connection.php";

// Check if the user is logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    // If logged in, get the username from session
    
    $username = $_SESSION["username"];
    $fullName = $_SESSION["fullname"];
    $picture =  $_SESSION["photo"];
    $userId = $_SESSION["userId"]; // Add this line to get the userid


    
   
    
}
?>



<header>
          <div>
            <p1>SDO QUEZON CITY</p1>
            <p2>TEACHING HUMAN RESOURCE UPDATE SYSTEM TECHNOLOGY</p2>
            <p3>TEACHER'S PORTAL</p3>
          </div>
          <div id="profile">
          <img src="<?php echo $picture; ?>" alt="Profile Photo" />
            <span><?php echo $fullName; ?></span>
          </div>
</header>