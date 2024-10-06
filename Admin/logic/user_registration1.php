<?php
include("../config.php");
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$messname = $_POST['messname'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$sql = "INSERT INTO `user_master`(`u_name`, `u_email`, `u_contact`, `u_gender`, `u_dob`, `u_username`, `u_password`, `u_dor`, `u_plan`, `u_messname`, `role_id`, `verify_user`) 
VALUES ('$fullname','$email','$phone','$gender','$dob','$username','$password','','yes','$messname','   3','0');";
$result = mysqli_query($con, $sql);
if ($result == true) {
    header('Location:success_user_r.php');
} else {

    header('Location:../registration.php');
}
?>