<?php 
$grade;
$marks=$_POST['marks'];
switch($marks)
{
    case $marks>100 and $marks<0:
        $grade="incorrect marks";
        break;

    case $marks>75 and $marks <=99:
            $grade="A";
            break;
    case $marks>60:
        $marks="B" ; 
        break;
    case $marks>50: 
        $grade="C";
        break;
    case $marks >40:
        $grade="D";
        break;
    case $marks>30:
        $grade="E";
        break;

    case $marks>20:
        $grade="F";
        break;    
    default:
    $grade= "Incorrect entry";                     

}

echo $grade;
?>