<?php 
require("config.php");

$sql="SELECT * FROM `user_info`";
$result=mysqli_query($connection, $sql) or die("failed");

if(mysqli_num_rows($result) >0){
    while($row=mysqli_fetch_assoc($result)){
echo
'
<tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["username"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["password"].'</td>
    <td><button class="btn btn-warning upd" data-id="'.$row['id'].'" > Update </button></td>
    <td><button class="btn btn-danger del" data-id="'.$row['id'].'"> DELETE </button></td>
</tr>
';



    }
}


?>