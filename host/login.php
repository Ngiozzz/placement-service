<?php 
include_once 'header.php'
?>
<div class="form-body" >
    <h1 class="pagetitle">Host Login</h1>
    <form action="includes/loginregister.inc.php" method="post">
        <input class="input-field" type="text" placeholder="full Name/ ID number"><br>
        <input class="input-field" type="password" placeholder="password"><br>
        <button class="form-submit" type="submit" name="submit">Login</button><br>
    </form>
    <a href="signup.php">don't have an account?</a><br>
</div>
<?php 
include_once 'footer.php'
?>