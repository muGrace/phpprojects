<?php  
include('server.php')?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <div class="header">
            <h2>Register</h2>
            <form action="register.php" method="post">
                <!..display validation errors here..>
                <?php  include ('errors.php')?>
                <div class="input-group">
                    <label>username</label>
                    <input type="text" name="username">
                </div>

                <div class="input-group">
                    <label>Email</label>
                    <input type="text" name="email">
                </div>

                <div class="input-group">
                    <label>password</label>
                    <input type="password" name="password_1">
                </div>

                <div class="input-group">
                    <label>Confirm password</label>
                    <input type="password" name="password_2">
                </div>
                <br><br>

                <div class="input-group">
                    
                    <button type="submit" name="register" class="btn">Register</button>

                </div>
                <p>
                    Already a member?<a href="login.php"><br>Sign in</a>
                </p>
            </form>

        </div>
    </body>
</html>