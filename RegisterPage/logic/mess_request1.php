<?php
include("../config.php");
$u_id = $_GET['u_id'];
$sql = "UPDATE `user_master` SET`verify_user`='1' WHERE `u_id`=$u_id";
$result = mysqli_query($con, $sql);
if ($result == true) {
    header('Location:success_request.php');
} else {

    header('Location:../mess_request.php');
}

?>