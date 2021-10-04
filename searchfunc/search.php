<?php
$conn = mysqli_connect("localhost", "root", "", "power_house");
$sql = "SELECT * FROM member WHERE f_name LIKE '".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>
        <td>".$row['f_name']."</td>
        <td>".$row['l_name']."</td>
        <td>".$row['phone_no']."</td>
        <td>".$row['dob']."</td>
      </tr>";
    }
}
else{
    echo "<tr><td>0 result's</td></tr>";
}
?>