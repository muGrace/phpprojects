<?php 
session_start();
include('server.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>sign up</title>
        <link rel="stylesheet" href="text.css">
    </head>
    <body>
        <h1><b>login here</b> </h1>
        <form action="signup.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <label for="mobile">Mobile number</label>
            <label for="password">password</label>
            <input type="password" name="pass" required>
            <button type="submit" name="button">submit</button>
         </form>
    </body>
    <p> have no account  <a href="signup.php" >Signup</a></p>
</html>