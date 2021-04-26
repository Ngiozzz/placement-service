<?php 
include_once 'header.php'
?>

<div class="form-body">
    <h1 class="pagetitle">Host Sign Up</h1>
    <form action="includes/signupregister.inc.php" method="post">

        <input class="input-field" type="text" name="fullname" placeholder="full Name"><br>
        <input class="input-field" type="text" name="identification" placeholder="ID / Passport Number"><br>
        <input class="input-field" type="date" name="dob" placeholder="Date Of Birth"><br>
        <input class="input-field" type="text" name="residence" placeholder="Residence"><br>
        <input class="input-field" type="email" name="email" placeholder="example@example.com"><br>
        <input class="input-field" type="text" name="phone" placeholder="+2547********"><br>
        <input class="input-field" type="password" name="pwd" placeholder="password"><br>
        <input class="input-field" type="password" name="pwdrepeat"placeholder="confirm password"><br>
        <button class="form-submit" type="submit" name="submit">Sign Up</button><br>
    </form>
    <a href="login.php">Already have an account?</a>
</div>

<?php 
include_once 'footer.php'
?>