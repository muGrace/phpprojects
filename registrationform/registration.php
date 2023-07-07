<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <title>Registration form</title>
        <
    </head>
    <body>
        <style>
            *{box-sizing: border-box;}
            .container{
                padding: 18px;
            }
            input[type="text"],[type="password"]{
                width: 100%;
                padding: 15px;
                margin: 15px 0 22px 0;
                display: inline-block;
                border: none;
                background: whitesmoke;
            }
            input[type="text"]:focus,[type="password"]:focus{
                background: #ddd;
                outline: none;
            }
            .btnregister{
                background-color:blue;
                color: grey;
                padding: 16px 20px;
                margin: 8px o;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
            }
            .btnregister:hover{
                opacity: 1;
            }
            a{
                color: blue;
            }
            .signin{
                background-color: greenyellow;
                text-align: center;
            }
        
            </style>
        <form action="register.php" method="post" id="registration_form">
            <div class="container">
                <h1>Registration form</h1>
                <p>Create an account</p>
                <label for="firstname"><b>First name</b></label>
                <input type="text" placeholder="Enter your first name" name="firstname" id="firstname" required>

                <label for="firstname"><b>Last name</b></label>
                <input type="text" placeholder="Enter your first name" name="lastname" id="firstname">
                
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter your Email" name="email" id="email">
                
                <label for="password"><b>password</b></label>
                <input type="password" placeholder="Enter your password" name="password" id="password">
                
                <button type="submit" class ="btnregister" >Register</button>

            </div>
            <div class="container signin" >
                <p>Already have an account<a href="#">Sign in</a></p>
            </div>

        </form>
    </body>
</html>