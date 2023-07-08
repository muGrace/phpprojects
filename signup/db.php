<?php
//connect to db
$conn=mysqli_connect("localhost","root","","form");
//if the button is clicked
if(isset($_POST['sbt'])){


$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$sex=$_POST['gender'];
$contacts=$_POST['cnum'];
$office=$_POST['address'];
$gmail=$_POST['email'];
$pass=$_POST['password'];

$pass=md5($pass);
$sql="INSERT INTO `formtbl`(`id`, `fname`, `lname`, `gender`, `cnum`, `address`, `email`, `pass`) VALUES ('null','$firstname','$lastname','$sex','$contacts','$office','$gmail','$pass')";
mysqli_query($conn,$sql);
//echo "<script type='text/javascript> alert('successfully registered')</script>";

if($conn){
    echo "connected";
}
else
{
    echo "error";
    //echo "error";
}
}
?>