<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <div class="header">
            <h2>Register</h2>
            <form action="login.php" method="post">
                <div class="input-group">
                    <label>username</label>
                    <input type="text" name="username">
                </div>

                
                <div class="input-group">
                    <label>password</label>
                    <input type="password" name="password_1">
                </div>

                
                <br><br>

                <div class="input-group">
                    
                    <button type="submit" name="login" class="btn">login</button>

                </div>
                <p>
                   Not yet a member?<a href="register.php"><br> sign up</a>
                </p>
            </form>

        </div>
    </body>
</html>