<?php
session_start();
include("config.php");

$sql = "delete from user_master where `role_id`='3' and `u_id`='" . $_SESSION['removeid'] . "'; ";
$result = mysqli_query($con, $sql);
header('Location: Manage_Hostellers.php');



// if(!mysqli_num_rows($result))
// {
//     echo "<script type='text/javascript'>alert('Record NOT Deleted !!');</script>";
// }
// else
// {
//     echo "<script type='text/javascript'>alert('Record Deleted !!');</script>";
// }
?>