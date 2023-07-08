<?php
session_start();
include("db.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form login and register</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="signup">
            <h1>Sign up</h1>
            <h4>Its free and only takes a minute</h4>
            <form action="db.php" method="POST">
                <label>First name</label>
                <input type="text" name="fname" required>
                <label>Last name</label>
                <input type="text" name="lname" required>
                <label>Gender</label>
                <input type="text" name="gender" required>
                <label>Contact address</label>
                <input type="tel" name="cnum" required>
                <label>Address</label>
                <input type="text" name="address" required>
                <label>Email</label>
                <input type="email" name="email" required>
                <label>password</label>
                <input type="password" name="password" required>
                <button type="submit" name="sbt">submit</button>
            </form>
            <p> By clicking to sign up ,you agree to our
            <a href="">Terms and condition</a> and <a href="#"> privacy policy</a></p>
            <p> Already have an account <a href="login.php">Login here</a></div>p>
        </div>
    </body>
</html>