<?php 
include_once 'header.php'
?>
    <form action="includes/loginregister.inc.php" method="post">
    <input type="text" placeholder="full Name/ ID number"><br>
    <input type="password" placeholder="password"><br>
    <button type="submit" name="submit">Login</button><br>
    </form>
    <a href="signup.php">don't have an account?</a><br>

<?php 
include_once 'footer.php'
?>