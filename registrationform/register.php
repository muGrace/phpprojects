<?php
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 
 //create a connection
 $conn=mysqli_connect('localhost','root','','registrationform');
 $sql="INSERT INTO `reg`(`id`, `firstname`, `lastname`, `email`, `password`) VALUES ('null','firstname','lastname','email','password')";
 //check connection
 if(!$conn){
    echo "connection error";
}
else{
    echo "connection successful";
    //echo "$firstname";
    //echo"$lastname";
    //echo "$email";
}


?>