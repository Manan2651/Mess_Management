<html>

<head>
    <title>Admin Login Page</title>
    <link href="styleloginpage.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <form id="form1" method='post'>

        <div class="loginbox">
            <img src="img/login_logo1.png" class="login_logo" alt="Image not found !!" />
            <h1>Login Here</h1>
            <form method="post" action="">
                <p>UserName</p>
                <input type="text" id="username" name="uname" placeholder="Enter UserName" />
                <p>Password</p>
                <input type="password" id="password" name="password" placeholder="Enter Password" TextMode="Password" />
                <input type="submit" ID="Loginbtn" Text="Login" name="submit" />
                <br />
                <center><a href="Forgot_Password_Page.php">Forgot Password ????</a></center>
            </form>
        </div>

    </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    $username = $_POST['uname'];
    $pass = $_POST['password'];

    include("config.php");
    session_start();

    $sql = "select * from user_master where u_username='$username' and u_password='$pass' ; ";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result)) {
        while ($data = mysqli_fetch_array($result)) {
            if ($data['role_id'] ==  1 && $data['u_username'] === $username && $data['u_password'] === $pass) {
                $_SESSION['userlogin'] = 1;
                $_SESSION['u_id'] = $data['u_id'];
                $_SESSION['u_name'] = $data['u_name'];
                $_SESSION['u_email'] = $data['u_email'];
                $_SESSION['u_contact'] = $data['u_contact'];
                $_SESSION['u_gender'] = $data['u_gender'];
                $_SESSION['u_dob'] = $data['u_dob'];
                $_SESSION['u_username'] = $data['u_username'];
                $_SESSION['u_password'] = $data['u_password'];
                $_SESSION['u_dor'] = $data['u_dor'];
                $_SESSION['u_plan'] = $data['u_plan'];
                $_SESSION['u_messname'] = $data['u_messname'];
                header('Location: Admin/admin_panel.php');
                exit();
            } elseif ($data['role_id'] == 2 && $data['u_username'] == $username && $data['u_password'] == $pass) {
                $_SESSION['userlogin'] = '2';
                $_SESSION['u_id'] = $data['u_id'];
                $_SESSION['u_name'] = $data['u_name'];
                $_SESSION['u_email'] = $data['u_email'];
                $_SESSION['u_contact'] = $data['u_contact'];
                $_SESSION['u_gender'] = $data['u_gender'];
                $_SESSION['u_dob'] = $data['u_dob'];
                $_SESSION['u_username'] = $data['u_username'];
                $_SESSION['u_password'] = $data['u_password'];
                $_SESSION['u_dor'] = $data['u_dor'];
                $_SESSION['u_plan'] = $data['u_plan'];
                $_SESSION['u_messname'] = $data['u_messname'];
                //echo mysqli_num_rows($result);
                header('Location: Mess/Mess_Auth_Home_Page.php');
                exit();
            } elseif ($data['role_id'] == 3 && $data['u_username'] == $username && $data['u_password'] == $pass) {
                $_SESSION['userlogin'] = '3';
                $_SESSION['u_id'] = $data['u_id'];
                $_SESSION['u_name'] = $data['u_name'];
                $_SESSION['u_email'] = $data['u_email'];
                $_SESSION['u_contact'] = $data['u_contact'];
                $_SESSION['u_gender'] = $data['u_gender'];
                $_SESSION['u_dob'] = $data['u_dob'];
                $_SESSION['u_username'] = $data['u_username'];
                $_SESSION['u_password'] = $data['u_password'];
                $_SESSION['u_dor'] = $data['u_dor'];
                $_SESSION['u_plan'] = $data['u_plan'];
                $_SESSION['u_messname'] = $data['u_messname'];
                header('Location: Hostellers/Home_Page_Hostellers.php');
                exit();
            } else {
                echo "<script type='text/javascript'>alert('Enter Valid Credentials !!');</script>";
            }
        }
    } else {
        echo "<script type='text/javascript'>alert('Enter Valid Credentials !!');</script>";
    }

}
?>