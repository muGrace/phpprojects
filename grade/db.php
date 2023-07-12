<?php 
//connect to db,servername,password
$conn=mysqli_connect("localhost","root","","marks");
//if the button is clicked
if(isset($_POST['sbt'])){
    $course=$_POST['subject'];
    $name=$_POST['lecturer'];
//insert data to the table of the database
    $sql="INSERT INTO `markstbl`(`id`, `subject`, `lecturer`) VALUES ('null','$course','$name')";
    mysqli_query($conn,$sql);
    if($conn){
        echo "connected successful";
    }
    else{
        die();
    }
}




?>