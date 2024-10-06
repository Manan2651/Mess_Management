<?php
include("../config.php");
$mess_id = $_GET['u_id'];
$sql = "DELETE FROM `mess_master` WHERE `mess_id`='$mess_id'";
$result = mysqli_query($con, $sql);
if ($result == true) {
    header('Location: success_delete_mess.php');
} else {
    header('Location: ../admin_panel');
}
?>