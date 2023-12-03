<?php 

include('config.php');

$userid = $_POST['userid'];

$delete = mysqli_query($connection, "DELETE  from `user_info` where `id` = '$userid'");
if($delete){
    $data = mysqli_affected_rows($connection);
    echo ($data);
}

?>