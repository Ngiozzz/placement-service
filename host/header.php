<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Host Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\navstyle.css">
    
</head>
<body>
<div class='navigation'>
    <div class="logo">
        <p>Placement Service</p>
    </div>
    <div class="menu">
        <div class="menu-bar"></div>
        <div class="menu-bar"></div>
        <div class="menu-bar"></div>    
        
        <div class="menu-content">
            <?php
            if(ISSET($_SESSION['User'])){
                echo "<a href='index.php'>Home</a>";
                echo "<a href='profile.php'>My profile</a>";
                echo "<a href='logout.php'>Log Out</a>";
                }
                else{
                echo "<a href='landingpage.php'>Home</a>";
                echo "<a href='hostlogin.php'>Host Login</a>";
                echo "<a href='hostsignup.php'>Host Signup</a>";
                echo "<a href='adminlogin.php'>Admin Portal</a>";
                echo "<a href='vetterlogin.php'>Vetter Portal</a>";
                echo "<a href='counsellorlogin.php'>Counselor Portal</a>";
                
            }
            
            echo "<a href='aboutus.php'>About us</a>";
            echo "<a href='contactus.php'>Contact us</a>";
            ?>
        </div>
    </div>
</div>
 
    <hr>