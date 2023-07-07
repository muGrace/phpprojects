<?php 
$username="";
$email="";
$errors=array();
//connect to the database
$db=mysqli_connect('localhost','root','','registration');
//if the buttonnnn is clicked
if(isset($_POST['register'])){
$username=($_POST['username']);
    $email=($_POST['email']);
    $password_1=($_POST['password_1']);
    $password_2=($_POST['password_2']);
    


//ensure fileds are filled properly
if(empty($username)){
    array_push($errors,"username is required");
}
if(empty($email)){
    array_push($errors,"email is required");
}
if(empty($password_1)){
    array_push($errors,"password_1 is required");
}
if($password_1 !=$password_2){
    array_push($errors,"the two password do not match ");
}
if(count($errors)==0){
    $password=md5($password_1);//encrept password before storing in the database
    $sql="INSERT INTO `users`(`id`, `username`, `email`, `password`) VALUES ('','$username','$email','$password')";
    mysqli_query($db,$sql);
}
}
?>