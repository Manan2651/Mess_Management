<?php
include("../config.php");
$mess_name = $_POST['mess_name'];
$college_name = $_POST['college_name'];
$dor = $_POST['dor'];


$sql = "INSERT INTO `mess_master`(`mess_name`, `mess_collegename`, `mess_dor`) VALUES 
('$mess_name','$college_name','$dor')";
$result = mysqli_query($con, $sql);
if ($result == true) {
    header('Location:../success.php');
} else {

    header('Location:../registration.php');
}

?>