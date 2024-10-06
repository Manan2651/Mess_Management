<?php
include("../config.php");
$mess_id = $_POST['mess_id'];
$mess_name = $_POST['mess_name'];
$college_name = $_POST['college_name'];



$sql = "UPDATE `mess_master` SET `mess_name`='$mess_name',
`mess_collegename`='$college_name' WHERE mess_id='$mess_id'";
$result = mysqli_query($con, $sql);
if ($result == true) {
    header('Location:success_edit_mess.php');
} else {

    header('Location:../registration.php');
}

?>