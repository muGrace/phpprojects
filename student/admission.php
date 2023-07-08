<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Merit list</title>
            <link rel="stylesheet" href="text.css">
        </head>
    <body>
        <h1>This is student Report form</h1>
        <div class="marks">
            <form action="form.php" method="POST">
                <label for="adm no"><b>Adm no</b></label> 
                <input type="number" name="admno" placeholder="Enter your student number" required>
                <label for="Student name"><b>Student name</b></label>
                <input type="text" name="studentname" placeholder="Enter your full name" required>
                <label for="dob"><b>Date of birth</b></label>
                <input type="date" name="yob" placeholder="Enter your year of birth" required>
                <label for="marks"><b>Marks</b></label>
                <input type="number" name="marks" placeholder="Enter your marks" required>
                <br><br>
                <button type="submit" name="btn">send</button>
            </form>
        </div>
        <div>
            <p>Already send</p><a href="form.php">seen</a>
        </div>
<table>
    <tr>
        <th>id</th>
        <th>student name</th>
        <th>adm no</th>
        <th>yob</th>
        <th>marks</th>
    </tr>
    <!...
    <?php
    /*display table
         if($num>0){
           while($data=mysqli_fetch_assoc($connect)){
              echo "
                     <tr><th>".$data['adm no']."</th>
                     <tr><th>".$data['student name']."</th>
                     <tr><th>".$data['date of birth']."</th>
                     <tr><th>".$data['marks']."</th>
                     </tr>
                     ";
                 }
} */
?>...!>
</table>
</body>

</html>