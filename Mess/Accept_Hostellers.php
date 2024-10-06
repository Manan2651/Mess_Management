<?php
session_start();
include("config.php");
$re_u_id = $_GET['re_u_id'];
// $sql = "select * from register_user where role_id='3' and re_u_id=$re_u_id; ";
$sql = "UPDATE `register_user` SET `re_u_plan`='yes' WHERE `re_u_id`='$re_u_id'";
$result = mysqli_query($con, $sql);
if ($result == true) {
    header('Location:Approve_Hostellers.php');
    // header('Location:../Home_Page.php');
} else {
    echo "<script type='text/javascript'>alert('Record NOT Updated !!');</script>";
}
// $uname = "";
// $uemail = "";
// $ucontact = "";
// $ugender = "";
// $username = "";
// $pass = "";
// $plan = "yes";
// $udate = date('d-m-y');
// $messname = $_SESSION['u_messname'];
// $role = '3';

// while ($row = mysqli_fetch_array($result)) {
//     $uname = $row['re_u_name'];
//     $uemail = $row['re_u_email'];
//     $ucontact = $row['re_u_contact'];
//     ;
//     $ugender = $row['re_u_gender'];
//     ;
//     $username = $row['re_u_username'];
//     ;
//     $pass = $row['re_u_password'];
//     ;
// }

// $sql2 = "select * from user_master where u_email='$uemail' and u_username='$uname'; ";
// $result2 = mysqli_query($sql2, $con);

// if (mysqli_num_rows($result2) == 0) {
//     $sql3 = "INSERT INTO `user_master`(`u_name`, `u_email`, `u_contact`, `u_gender`, `u_username`, `u_password`, `u_dor`, `u_plan`, `u_messname`, `role_id`) VALUES ('$uname', '$uemail', '$ucontact', '$ugender', '$username', '$pass', '$udate', '$plan', '$messname', '$role') ";
//     $result3 = mysqli_query($sql3, $con);

//     if ($result3 === false) {
//         echo "<script type='text/javascript'>alert('Record NOT Inserted !!');</script>";
//         // header('Location: Approve_Hostellers.php');
//         // exit();
//     } else {

//         //header('Location: Approve_Hostellers.php');
//         echo "<script type='text/javascript'>alert('Record Inserted !!');</script>";
//         //exit();
//     }
// } else {

//     //header('Location: Approve_Hostellers.php');
//     echo "<script type='text/javascript'>alert('Record Exists !!');</script>";
//     //exit();
// }

//echo $_SESSION['tempid'];
?>