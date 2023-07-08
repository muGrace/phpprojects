<?php
$adm=$_POST['admno'];
$name=$_POST['studentname'];
$YOB=$_POST['yob'];
$score=$_POST['marks'];
//connect with database,servername,suername,password
$conn=mysqli_connect("localhost","root","","student");
$sql="INSERT INTO `stdtable`(`adm no`, `student name`, `date of birth`, `marks`) VALUES ('$adm','$name','$YOB','$score')";
//$sql="SELECT * FROM `stdtable` ";
$connect=mysqli_query($conn,$sql);
//$num=mysqli_num_rows($connect);
//check if connected or not
if($conn){
    echo "connected";

}
else{
    die();
}

?>