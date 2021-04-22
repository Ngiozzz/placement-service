<?php 
include_once 'header.php'
?>
    <form action="includes/signupregister.inc.php" method="post">

    <input type="text" name="fullname" placeholder="full Name"><br>
    <input type="text" name="identification" placeholder="ID / Passport Number"><br>
    <input type="date" name="dob" placeholder="Date Of Birth"><br>
    <input type="text" name="residence" placeholder="Residence"><br>
    <input type="email" name="email" placeholder="example@example.com"><br>
    <input type="text" name="phone" placeholder="+2547********"><br>
    <input type="password" name="pwd" placeholder="password"><br>
    <input type="password" name="pwdrepeat"placeholder="confirm password"><br>
    <button type="submit" name="submit">Sign Up</button><br>
    </form>
    <a href="login.php">Already have an account?</a>

<?php 
include_once 'footer.php'
?>