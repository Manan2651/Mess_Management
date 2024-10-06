<?php 

if(isset($_POST['submit']))
{
    $con = mysql_connect("localhost","root","");
    if($con == false)
    {
        die("connection failed ");
    }

    mysql_select_db("mess");

    $fname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $gen = $_POST['gender'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $today = date('d-m-y');
    $messid = $_POST['mess'];
    $roleid = $_POST['role'];

    
    echo "<br>".$pass;
    echo "<br>".$roleid;
    // mysql_select_db("mess");
    // $sql2 = "INSERT INTO `register_user` (`re_u_name`, `re_u_email`, `re_u_contact`, `re_u_gender`, `re_u_username`, `re_u_password`, `re_u_dor`, `re_u_plan`, `mess_id`, `role_id`) VALUES ('$fname', '$email', '$contact', '$gen', '$username','$pass', '$today','yes','$messid','$roleid')";
    // $result2 = mysql_query($sql2,$con);

    // if($result2 === FALSE)
    // {
    //     echo "<script type='text/javascript'>alert('Record NOT inserted !!');</script>";
    // }
    // else
    // {
    //     echo "<script type='text/javascript'>alert('Request Sent !!');</script>";
    // }
}
?>