<?php 
session_start();
include("marks.html");
$grade;
$marks=$_POST['marks'];
switch($marks)
{
    case $marks>75:
        $grade="A";
        break;
    case $marks>60:
        $grade="B";
        break;
    case $marks>50:
        $grade="C";
        break;
    case $marks>40:
        $grade="D";
        break;
        
    case $marks<39:
        $grade="F";
        break;
    default:
    $grade="Incorrect marks";        
}
echo $grade;
?>
<!doctype html>
<html>
    <body>
        
        <p>Submit here  <a href="marks.html">submit</a></p>
    </body>
</html>
