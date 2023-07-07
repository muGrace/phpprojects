<html>
    <body>
        <table>
            <tr>
                <th>user id</th>
                <th>username</th>
                <th>password</th>
                <th>email</th>
                <th>sign up date</th>
            </tr>
            <?php
            $conn=mysqli_connect('localhost','root','','websitedb');
            $sql=
            $result=$conn->query($sql);
            if($result->num_rows>0){
                while($row=$result ->fetch_assoc()){
                    echo "<tr><td>".$row["user_id"]."<td><td>".$row["user_name"]."<td><td>".$row["pass_word"]."<td><td>".$row["email"]."<td><td>".$row["sign_up_date"]."<td><td>";

                }

            }
            else{
                echo"no result found";
            }
            $conn->close();
            ?>
        </table>

    </body>
</html>