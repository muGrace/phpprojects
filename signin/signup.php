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
        <h1>Sign up here </h1>
        <form action="login.php" method="POST">
            <label for="first name">First name</label>
            <input type="text" name="firstname" required>
            <label for="last name">Last name</label>
            <input type="text" name="lastname" required>
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <label for="mobile">Mobile number</label>
            <input type="tel" name="mobile" required>
            <label for="age">Age</label>
            <input type="number" name="age" required>
            <label for="password">password</label>
            <input type="password" name="pass" required>
            <button type="submit" name="button">submit</button>
         </form>
    </body>
    <p>Already have an account   <a href="login.php" >login</a></p>
</html>