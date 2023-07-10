<?php 
//connect to database,servername,username,password
$conn=mysqli_connect("localhost","root","","form1");
//if button is clicked
if(isset($_POST['button'])){
    $First=$_POST['firstname'];
    $last=$_POST['lastname'];
    $mail=$_POST['email'];
    $phone=$_POST['mobile'];
    $age=$_POST['age'];
    $password=$_POST['pass'];

    $sql="INSERT INTO `formtbl`(`id`, `Firstname`, `Lastname`, `Email`, `mobilenumber`, `Age`, `Password`) VALUES ('null','$First','$last','$mail','$phone','$age','$password')";
    mysqli_query($conn,$sql);// display data in database
    if($conn){
        echo "connected";
    }
    else{
        die();
    }
}
?>