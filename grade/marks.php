<?php 
session_start();
include("db.php");
//include("grade.php");
echo "The session has been recorded";?>
<!DOCTYPE html>
<html>
    <head>
        <title>Grade</title>
    </head>
    <body>
        <style> 
    body{
        text-align:left;
        background-color: wheat;
        
        
    }
    form{
        text-align: center;
        padding: 20px;
        height: 230px;
        width: 20%;
        background-color: indianred;
    }
    input{
        text-align: center;
        background-color:sandybrown;
        cursor: pointer;
        padding: 10px;
        
    }
    label{
        display: flex;
        text-align: center;
        
        width: 20px;
        height: 30px;
        padding: 10px;
    }
    button{
        padding: 10px;
        
        background-color:whitesmoke;
    
    }
    p{
        text-align:left;
    }
    </style>
    <!...this is the paragraph element tyo ne displayed at home page //...>
    <p><b>Enter your subject and lecturer<b></p>
    <form action="db.php" method="POST">
        <label for="subject"></label>
        <input type="text" name="subject" placeholder="Enter name of subjects" >
        <label for="lecture">lecturer</label>
         <input type="text" name="lecturer" placeholder="Enter name of your lecturer" required >
    <br><br>
         <button type="submit" name="sbt">submit</button>
        </form>
        
        <p>If submited <a href="report.php"> see here</a></p>
    </body>
</html>