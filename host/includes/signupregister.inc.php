<?php

    if(isset($_POST["submit"])){
        
        $name=$_POST['fullname'];
        $identification=$_POST['identification'];
        $dob=$_POST['dob'];
        $residence=$_POST['residence'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $pwd=$_POST['pwd'];
        $pwdRepeat=$_POST['pwdrepeat'];

        require_once 'dbconn.inc.php';
        require_once 'functions.inc.php';

        /*if(emptyInputSignup($name, $identification, $dob, $residence, $email, $phone, $pwd, $pwdrepeat) !==false){
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if(invalidName($name) !==false){
            header("location: ../signup.php?error=invalidname.");
            exit();
        }
        if(invalidEmail($email) !==false){
            header("location: ../signup.php?error=invalidemail");
            exit();
        }
        if(invalidPhone($Phone) !==false){
            header("location: ../signup.php?error=invalidphonenumber");
            exit();
        }
        if(pwdMatch($pwd, $pwdRepeat) !==false){
            header("location: ../signup.php?error=invalidPassword");
            exit();
        }
        if(identificationExists($conn, $identification) !==false){
            header("location: ../signup.php?error=passport/idnumberisusedYoucan'tcreatemultipleaccounts");
            exit();
        }
        */
        createUser($conn,$name, $identification, $dob, $residence, $email, $phone, $pwd );
       }
    else{
        header("location: ../signup.php");
        exit();
    }