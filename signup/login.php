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
        <div class="login">
            <h1>login</h1>
       
            <form>
                <label>Email</label>
                <input type="email" name="email" required>
                <label>password</label>
                <input type="password" name="pass" required>
                <button type="submit" name="sbt">submit</button>
            </form>
            <p> Not have an account ?<a href="signup.php">sign up here</a></p>
            
        </div>
    </body>
</html>