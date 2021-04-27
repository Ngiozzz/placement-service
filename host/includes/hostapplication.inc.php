<?php

    if(isset($_POST["submit"])){
        
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $idnumber=$_POST['idnumber'];
        $nationality=$_POST['nationality'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $areacode=$_POST['areacode'];
        $phonenumber=$_POST['phonenumber'];
        $firstnamekin=$_POST['firstnamekin'];
        $lastnamekin=$_POST['lastnamekin'];
        $emailkin=$_POST['emailkin'];
        $areacodekin=$_POST['areacodekin'];
        $phonenumberkin=$_POST['phonenumberkin'];
        $occupation=$_POST['occupation'];
        $employer=$_POST['employer'];
        $emailemployer=$_POST['emailemployer'];
        $areacodeemployer=$_POST['areacodeemployer'];
        $phonenumberemployer=$_POST['phonenumberemployer'];
        $userID=$_POST['userID'];
        

        require_once 'dbconn.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputApplication($firstname, $lastname, $idnumber, $nationality, $dob, $gender,$email,$areacode,$phonenumber,
        $firstnamekin, $lastnamekin, $areacodekin, $phonenumberkin, $occupation, $employer, $emailemployer, $areacodeemployer, 
        $phonenumberemployer ,$userID) !==false){
            header("location: ../applicationform.php?error=emptyinput");
            exit();
        }
        /*
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
        createApplication($firstname, $lastname, $idnumber, $nationality, $dob, $gender,$email,$areacode,$phonenumber,
        $firstnamekin, $lastnamekin, $areacodekin, $phonenumberkin, $occupation, $employer, $emailemployer, $areacodeemployer, 
        $phonenumberemployer ,$userID);
       }
    else{
        header("location: ../applicationform.php");
        exit();
    }